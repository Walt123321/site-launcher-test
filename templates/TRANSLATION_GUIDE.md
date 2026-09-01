# Переклад мовних версій шаблону (template_7 / template_10 та подібних)

Інструкція для доповнення мовних `lang.php` у шаблонах на кшталт `template_7`
і `template_10`, де розмітка сторінок продубльована по мовних підпапках
(`de/`, `fr/`, `nl/`, ...), а кожна підпапка тягне корінь через
`require __DIR__ . '/../lang.php';` і перевизначає лише текстові змінні.

## Формат override-файлу (шаблон)

```php
<?php
require __DIR__ . '/../lang.php';
$site_lang = 'de-DE';
$form_language = 'de'; // matches this page's own language, not the offer's global default

// ============================================================
// DE TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_url, ...) are intentionally NOT
// overridden -- they stay exactly as inherited from the root lang.php.
// ============================================================

$home_meta_title = "...переклад...";
...
```

Для мови "en" (якщо коренева мова шаблону — англійська) окремий повний
переклад НЕ потрібен — досить мінімального stub-файлу, який лише виставляє
локаль:

```php
<?php
require __DIR__ . '/../lang.php';
$site_lang = 'en-US';
$form_language = 'en';

// No native translation scope for this language -- content intentionally
// stays in English (inherited from root lang.php above). Only the locale
// and default form language are overridden here so the <html lang>,
// hreflang alternates, and phone-input default match this folder.
```

## Які змінні НЕ перекладати (identity/config)

Ці змінні лишаються як є (успадковуються з кореневого `lang.php`, задаються
per-launch генератором, а не перекладом):

- `site_name`, `site_url`, `site_domain`, `app_price`, `app_currency`,
  `site_lang`, `country_name`, `rating_value`, `rating_count`, `review_count`,
  `privacy_last_update`
- `review_N_author` (імена авторів відгуків — фіксовані, не локалізуються)
- `quiz_consultant_name`
- Для template_10 додатково: `site_slug`, `form_country`, `form_language`,
  `form_phone_country`, `form_only_countries`
- Похідні/логічні рядки, які не є текстом для користувача (наприклад,
  `$country_flag_code = $GEO_NAME_TO_CODE[$country_name] ?? '';` —
  порожній рядок-фолбек, не контент)

Все інше — переклад: заголовки, форми, FAQ, юридичні дисклеймери,
alt-тексти, футер, чат-віджет тощо.

## Технічний пайплайн (`translate_langs.py` + `extract_strings.php`)

Лежить у `/private/tmp/.../scratchpad/` цієї сесії (скопіювати в проєкт,
якщо потрібно зберегти постійно):

1. **`extract_strings.php`** — парсить `lang.php` через PHP `token_get_all()`
   (НЕ regex — надійно на escaped-лапках, HTML в рядках, масивах). Повертає
   JSON-список `{start, end, raw, context}` для кожного перекладного рядка:
   - прості присвоєння `$var = "...";` (context = ім'я змінної)
   - записи всередині масивів `"title" => "...",` / `"body" => "...",`
     (context = `"title"`/`"body"`, для template_10's `$privacy_sections`/
     `$conditions_sections`)
   - **важливо**: коректно ловить і рядки з інтерпольованими змінними
     (`"Plataforma $site_name"`), які PHP токенізує інакше, ніж прості
     рядки — окремий шлях обробки для raw `"`-токена, що відкриває
     interpolated string.
   - `start`/`end` — це **байтові offset-и** (PHP `strlen()` рахує байти,
     не символи). При заміні в Python обов'язково працювати з `bytes`,
     не з `str`-індексацією — інакше offset-и розсинхронізуються на
     першому ж багатобайтовому UTF-8 символі (напр. em-dash "—") і
     ламають весь файл далі по тексту.

2. **`translate_langs.py`**:
   - `php_unescape(raw)` / `php_escape(value, quote)` — конвертація між
     PHP-рядковим літералом (з лапками/екрануванням) і чистим текстовим
     значенням.
   - `translate_batch(client, model, strings, lang_code)` — один LLM-запит
     на весь список рядків одразу (через `core.lang_pipeline._llm_json`),
     з захистом `$variable`-плейсхолдерів (`_protect_placeholders`/
     `_restore_placeholders` з `core/lang_pipeline.py`) щоб LLM їх не займав.
   - `build_lang_file(...)` — бере spans з екстрактора, підставляє
     переклади за byte-offset-ами, потім **вирізає рядки** ідентичних/
     identity-змінних (та `<?php`/`// MANUAL`/`require geo_flags.php`/
     `$country_flag_code`), лишаючи тільки перекладний контент + коментарі
     секцій, і зверху додає стандартний header (require/site_lang/
     form_language/коментар-маркер).

3. Обов'язково `php -l <file>` на кожен готовий файл перед тим, як вважати
   його готовим.

## Якщо перекладаєш без LLM (вручну/іншою моделлю)

Той самий пайплайн можна прогнати, підставивши свій список перекладів
замість виклику `translate_batch`: `extract_strings.php` дає впорядкований
список рядків для перекладу (той самий порядок і кількість для кожної мови
одного шаблону, бо джерело — той самий кореневий `lang.php`) — досить
згенерувати `translations_by_context = {(context, start): "переклад", ...}`
і передати в `build_lang_file()`.

## Статус на 2026-09-01

- **template_7**: повністю перекладений — усі 22 мовні `lang.php` на місці
  (de, es, fr, it, nl, pl, pt були раніше; bg, cs, da, el, fi, hr, hu, ja,
  ms, nb, no, ro, sk, sv, tr + en-stub додані цією сесією).
- **template_10**: повністю перекладений — усі 22 мовні `lang.php` на місці
  (спочатку не мав жодного перекладу окрім кореневого; усі 21 повний
  переклад + en-stub додані цією сесією). nb і no — однаковий текст
  (обидва bokmål), як і в template_7.
- **template_8, template_9**: ПОМИЛКОВО зазначені раніше як "повністю
  перекладені" — насправді лише de, fr, it, nl мають реальний переклад
  (~40KB кожен, побайтово ідентичний між обома шаблонами — скопійовано з
  одного в інший). Решта 18 мов + en — це локаль-заглушки (370 байт,
  контент лишається англійською), той самий патерн що й en-stub.
  template_9: переклад геосторінок явно призупинений користувачем
  (підтверджено 2026-09-01) — не чіпати без окремого запиту. template_8:
  статус паузи не підтверджений явно, потребує уточнення.
