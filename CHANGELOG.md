# Changelog — tingee/sdk-php

## [0.3.0] — 2026-08-06

### Added
- Bank V1 API additions:
  - `createDebit`: `POST /v1/bank/create-debit` (tạo VA ghi nợ)
  - `createBatchVaOnOff`: `POST /v1/bank/create-batch-va-on-off` (tạo/bật/tắt VA hàng loạt)
  - `webhookNotification`: `POST /v1/bank/webhook-notification` (cập nhật cấu hình nhận webhook notification)
  - `createBankLinkSession`: `POST /v1/bank/create-bank-link-session` (tạo phiên liên kết tài khoản ngân hàng)
  - `onVa` / `offVa`: `POST /v1/bank/on-va`, `POST /v1/bank/off-va` (bật/tắt Virtual Account)
  - `confirmRegisterNotify`: `POST /v1/bank/confirm-register-notify` (xác nhận đăng ký nhận thông báo biến động)
- Payment Gateway API support (`/v1/payment-gateway/*`):
  - `createPaymentLink`: `POST /v1/payment-gateway/create-payment-link` (tạo link thanh toán)
- Webhook & transaction status enum values: `delete-va-success`, `delete-va-failed`, `bank-link-success`, `bank-link-failed`

### Changed & Improved
- Optimized DTO `use` imports in `TingeeClientGenerated.php` to include only DTOs directly used by Client API methods
- Linked `samples/php` directly to local `bindings/php` package via path repository for instant dev testing

### Fixed
- Standardized HTTP request header keys to lowercase (`x-client-id`, `x-signature`, `x-request-timestamp`) for consistent API gateway verification
- Fixed signature generation mismatch when request body is empty (coerced `null` to empty object `{}` to align with other SDKs)

## [0.2.4] — 2026-06-18

### Changed
- Updated OpenAPI spec with latest API definitions
- Regenerated SDK client and DTO classes

## [0.2.2] [DEPRECATED] — 2026-04-08

> **⚠️ Deprecated** — Phiên bản này không còn được hỗ trợ. Vui lòng nâng cấp lên `>=0.2.4`.

### Changed
- Updated OpenAPI spec with latest API definitions
- Regenerated SDK client and DTO classes

## [0.2.1] [DEPRECATED] — 2026-03-31

> **⚠️ Deprecated** — Phiên bản này không còn được hỗ trợ. Vui lòng nâng cấp lên `>=0.2.4`.

### Changed
- Updated OpenAPI spec with latest API definitions
- Regenerated SDK client and DTO classes

## [0.2.0] [DEPRECATED] — 2026-03-30

> **⚠️ Deprecated** — Phiên bản này không còn được hỗ trợ. Vui lòng nâng cấp lên `>=0.2.4`.

### Added
- E-Invoice API support: account management, invoice creation, template listing, invoice download, and email sending

### Changed
- Updated OpenAPI spec with latest API definitions
- Regenerated SDK client and DTO classes

## [0.1.0] [DEPRECATED] — 2026-03-06

> **⚠️ Deprecated** — Phiên bản này không còn được hỗ trợ. Vui lòng nâng cấp lên `>=0.2.4`.

### Added
- Initial SDK release
- API client implementation
- Request signing
- Basic error handling
