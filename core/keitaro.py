import requests
import urllib3
import base64
import time
from pathlib import Path
from concurrent.futures import ThreadPoolExecutor, as_completed

urllib3.disable_warnings()
import streamlit as st


# =====================================================
# CONFIG
# =====================================================

API_KEY = st.secrets["KEITARO_API_KEY"]
BASE_URL = st.secrets["KEITARO_BASE_URL"].rstrip("/")

TIMEOUT = 120

CAMPAIGN_GROUP_ID = 2
OFFER_GROUP_ID = 3
DOMAIN_GROUP_ID = 2

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
    campaign_group_id: int = 2,
    offer_group_id: int = 3,
    domain_group_id: int = 2
):
    global API_KEY, BASE_URL
    global CAMPAIGN_GROUP_ID, OFFER_GROUP_ID, DOMAIN_GROUP_ID
    global HEADERS

    API_KEY = api_key
    BASE_URL = base_url.rstrip("/")

    CAMPAIGN_GROUP_ID = campaign_group_id
    OFFER_GROUP_ID = offer_group_id
    DOMAIN_GROUP_ID = domain_group_id

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


# =====================================================
# OFFER
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
# CAMPAIGN
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
# FLOW
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
# DOMAIN
# =====================================================

def create_domain(domain: str, campaign_id: int):
    payload = {
        "name": domain,
        "default_campaign_id": campaign_id,
        "group_id": DOMAIN_GROUP_ID,
        "catch_not_found": False,
        "notes": "",
        "ssl_redirect": True,
        "allow_indexing": True,
        "admin_dashboard": False
    }

    r = post(f"{BASE_URL}/domains", payload)

    if r.status_code != 200:
        raise Exception(r.text)

    data = r.json()

    if isinstance(data, list):
        return data[0]["id"]

    return data["id"]


# =====================================================
# HTTPS CHECK
# =====================================================

def check_https(domain: str, callback=None):
    url = f"https://{domain}"

    while True:
        try:
            if callback:
                callback(f"🌐 {domain}: перевірка HTTPS...")

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

        except:
            pass

        if callback:
            callback(f"⏳ {domain}: DNS / SSL ще не готовий. Чекаю 1 хв...")

        time.sleep(60)


# =====================================================
# STAGE 1 (FAST)
# =====================================================

def prepare_project(domain: str, zip_path: str, callback=None):

    def log(msg):
        print(msg)
        if callback:
            callback(msg)

    log(f"🚀 {domain}: створення offer")
    offer_id = create_offer(domain, zip_path)

    log(f"🚀 {domain}: створення campaign")
    campaign_id = create_campaign(domain)

    log(f"🚀 {domain}: створення flow")
    flow_id = create_flow(domain, campaign_id, offer_id)

    log(f"🚀 {domain}: створення domain")
    domain_id = create_domain(domain, campaign_id)

    return {
        "domain": domain,
        "offer_id": offer_id,
        "campaign_id": campaign_id,
        "flow_id": flow_id,
        "domain_id": domain_id
    }


# =====================================================
# STAGE 2 (WAIT HTTPS)
# =====================================================

def finalize_project(project: dict, callback=None):
    domain = project["domain"]

    https_ok, breadcrumb_ok = check_https(domain, callback)

    project["https"] = https_ok
    project["breadcrumb"] = breadcrumb_ok

    return project


# =====================================================
# SINGLE DOMAIN
# =====================================================

def create_full_project(domain: str, zip_path: str, callback=None):
    project = prepare_project(domain, zip_path, callback)
    project = finalize_project(project, callback)
    return project


# =====================================================
# MULTI DOMAIN ULTRA MODE
# =====================================================

def create_multiple_projects(domains, zip_path, callback=None, max_workers=5):
    """
    Реально паралельний режим:

    Stage 1:
        всі домени створюються одночасно

    Stage 2:
        всі домени одночасно чекають SSL
    """

    prepared = []
    final_results = []

    # ---------------------------------
    # STAGE 1
    # ---------------------------------
    if callback:
        callback("🚀 Stage 1: створення всіх проектів...")

    with ThreadPoolExecutor(max_workers=max_workers) as executor:
        futures = {
            executor.submit(
                prepare_project,
                domain,
                zip_path,
                callback
            ): domain
            for domain in domains
        }

        for future in as_completed(futures):
            domain = futures[future]

            try:
                result = future.result()
                prepared.append(result)

            except Exception as e:
                final_results.append({
                    "domain": domain,
                    "error": str(e)
                })

    # ---------------------------------
    # STAGE 2
    # ---------------------------------
    if callback:
        callback("🌐 Stage 2: очікування SSL / DNS...")

    with ThreadPoolExecutor(max_workers=max_workers) as executor:
        futures = {
            executor.submit(
                finalize_project,
                project,
                callback
            ): project["domain"]
            for project in prepared
        }

        for future in as_completed(futures):
            domain = futures[future]

            try:
                result = future.result()
                final_results.append(result)

            except Exception as e:
                final_results.append({
                    "domain": domain,
                    "error": str(e)
                })

    return final_results
