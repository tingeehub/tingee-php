# Changelog — tingee/sdk-php

All notable changes to this package will be documented in this file.
Format: [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)

---

## [0.1.0] — 2026-03-04

### Initial release

#### Added
- `TingeeClient` — main client class:
  ```php
  $client = new \Tingee\Sdk\TingeeClient(
      secretKey:   $_ENV['TINGEE_SECRET_KEY'],
      clientId:    $_ENV['TINGEE_CLIENT_ID'],
      environment: 'uat'
  );
  ```
- `$client->v1->*` — **49 auto-generated V1 API methods** from OpenAPI spec
  - VietQR, Dynamic QR generation
  - Merchant, Shop, Device management
  - Direct Debit / Subscription APIs
  - Bank / VA (Virtual Account) APIs
  - Account info, Notification, Config endpoints
- `TingeeClientCustomV1` trait — hand-written method extension, never overwritten by generator
- `$client->verifyWebhookSignature($signature, $timestamp, $body)` — instance method, uses secretKey already set on client; returns `WebhookVerifyResult`
- `TingeeSigner::verifyWebhookSignature()` — standalone static webhook verifier
- `TingeeHttpClient` — Guzzle-based HTTP client with:
  - Automatic HMAC-SHA512 signature on every request (`X-SIGNATURE`, `X-REQUEST-TIMESTAMP`, `X-CLIENT-ID`)
  - Timestamp forced to **Asia/Ho_Chi_Minh (UTC+7)** to prevent "Request expired" errors
  - Query parameter support for GET endpoints via Guzzle `query` option
  - Configurable timeout (default 30s)
- Deep hydration of response DTOs via `ReflectionClass` — nested objects & `PagedResultDto<T>` items fully typed for IDE autocomplete
- `BankNameEnum`, `BankAccountTypeEnum`, bank metadata (BIN, full name, display name)
- `TingeeApiResponse` with `isSuccess()` / `getCode()` / `getData()` helpers
- Environment: `'uat'` | `'prod'` (maps to UAT / Production base URL)
- PHP 8.0+, Composer; requires `guzzlehttp/guzzle`

#### Design decisions
- HTTP client returns raw `TingeeApiResponse` — callers check `$result->isSuccess()` themselves; no auto-throw on business errors
- Network/HTTP errors throw `TingeeHttpException`
