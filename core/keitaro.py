import requests
import urllib3
import base64
import time
import re
from pathlib import Path

urllib3.disable_warnings()
import streamlit as st


# =====================================================
# CONFIG
# =====================================================

API_KEY = st.secrets["KEITARO_API_KEY"]
BASE_URL = st.secrets["KEITARO_BASE_URL"]
TIMEOUT = 120
CAMPAIGN_GROUP_ID = 2
OFFER_GROUP_ID = 3
HEADERS = {
    "Api-Key": API_KEY,
    "Content-Type": "application/json"
}


# =====================================================
# HELPERS
# =====================================================

def set_config(
    api_key: str,
    base_url: str,
    campaign_group_id: int = 1,
    offer_group_id: int = 1
):
    global API_KEY, BASE_URL
    global CAMPAIGN_GROUP_ID, OFFER_GROUP_ID
    global HEADERS

    API_KEY = api_key
    BASE_URL = base_url.rstrip("/")

    CAMPAIGN_GROUP_ID = campaign_group_id
    OFFER_GROUP_ID = offer_group_id

    HEADERS = {
        "Api-Key": API_KEY,
        "Content-Type": "application/json"
    }

def post(url, payload):
    return requests.post(
        url,
        headers=HEADERS,
        json=payload,
        timeout=TIMEOUT,
        verify=False
    )


def get(url):
    return requests.get(
        url,
        headers=HEADERS,
        timeout=TIMEOUT,
        verify=False
    )


def put(url, payload):
    return requests.put(
        url,
        headers=HEADERS,
        json=payload,
        timeout=TIMEOUT,
        verify=False
    )


# =====================================================
# STEP 1 — OFFER
# =====================================================

def create_offer(domain: str, zip_path: str):
    zip_file = Path(zip_path)

    if not zip_file.exists():
        raise Exception(f"ZIP not found: {zip_path}")

    with open(zip_file, "rb") as f:
        archive_b64 = base64.b64encode(f.read()).decode()

    payload = {
        "name": domain,
        "group_id": OFFER_GROUP_ID,
        "offer_type": "local",
        "state": "active",
        "archive": archive_b64
    }

    r = post(f"{BASE_URL}/offers", payload)

    if r.status_code != 200:
        raise Exception(r.text)

    return r.json()["id"]


# =====================================================
# STEP 2 — CAMPAIGN
# =====================================================

def create_campaign(domain: str):
    payload = {
        "name": domain,
        "alias": domain,
        "type": "position",
        "state": "active",
        "group_id": CAMPAIGN_GROUP_ID
    }

    r = post(f"{BASE_URL}/campaigns", payload)

    if r.status_code != 200:
        raise Exception(r.text)

    return r.json()["id"]


# =====================================================
# STEP 3 — FLOW
# =====================================================

def create_flow(domain: str, campaign_id: int, offer_id: int):
    payload = {
        "campaign_id": campaign_id,
        "type": "forced",
        "name": domain,
        "position": 1,
        "weight": 100,
        "state": "active",
        "action_type": "http",
        "schema": "landings",
        "offers": [
            {
                "offer_id": offer_id,
                "share": 100,
                "state": "active"
            }
        ]
    }

    r = post(f"{BASE_URL}/streams", payload)

    if r.status_code != 200:
        raise Exception(r.text)

    return r.json()["id"]


# =====================================================
# STEP 4 — WAIT DOMAIN
# =====================================================

def wait_domain(domain: str):
    while True:
        r = get(f"{BASE_URL}/domains")

        if r.status_code != 200:
            raise Exception(r.text)

        items = r.json()

        for item in items:
            if item["name"].lower() == domain.lower():
                return item["id"]

        time.sleep(60)


# =====================================================
# STEP 5 — ATTACH CAMPAIGN
# =====================================================

def attach_campaign(domain_id: int, campaign_id: int):
    payload = {
        "default_campaign_id": campaign_id
    }

    r = put(f"{BASE_URL}/domains/{domain_id}", payload)

    if r.status_code != 200:
        raise Exception(r.text)


# =====================================================
# STEP 6 — HTTPS CHECK
# =====================================================

def check_https(domain: str, callback=None):
    import requests
    import time

    url = f"https://{domain}"

    while True:
        try:
            if callback:
                callback(f"⏳ Перевіряю HTTPS: {domain}")

            r = requests.get(
                url,
                timeout=30,
                verify=False
            )

            if r.status_code == 200:
                html = r.text.lower()

                breadcrumb = (
                    "breadcrumblist" in html
                    and "application/ld+json" in html
                )

                return True, breadcrumb

        except Exception as e:
            if callback:
                callback("🌐 DNS / SSL ще не готовий. Чекаю 1 хвилину...")

        time.sleep(60)


# =====================================================
# MAIN PROCESS
# =====================================================

def create_full_project(domain: str, zip_path: str, callback=None):
    """
    callback(text) -> streamlit status update
    """

    def log(text):
        print(text)
        if callback:
            callback(text)

    log("Створення офера...")
    offer_id = create_offer(domain, zip_path)

    log("Створення кампанії...")
    campaign_id = create_campaign(domain)

    log("Створення flow...")
    flow_id = create_flow(domain, campaign_id, offer_id)

    log("Очікування домену...")
    domain_id = wait_domain(domain)

    log("Прив'язка кампанії...")
    attach_campaign(domain_id, campaign_id)

    log("HTTPS перевірка...")
    https_ok, breadcrumb_ok = check_https(domain)

    return {
        "offer_id": offer_id,
        "campaign_id": campaign_id,
        "flow_id": flow_id,
        "domain_id": domain_id,
        "https": https_ok,
        "breadcrumb": breadcrumb_ok
    }
