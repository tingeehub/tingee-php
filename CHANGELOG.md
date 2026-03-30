# Changelog — tingee/sdk-php

## [0.1.1] — 2026-03-30

### Added
- E-Invoice API support: account management, invoice creation, template listing, invoice download, and email sending
- New types: `EInvoiceProviderEnum`, `EInvoiceAccount`, `CreateOrUpdateEInvoiceAccountDto`, `DeleteEInvoiceAccountDto`, `GetPagingEInvoiceAccountInputDto`, `GetPagingEInvoiceAccountOutputDto`, `EInvoiceProviderDto`, `CreateInvoiceDto`, `InvoiceItemDto`, `InvoiceModuleConfigDto`, `InvoiceTemplateOutputDto`, `InvoiceTemplateQueryDto`, `DownloadInvoiceOutputDto`, `DownloadInvoiceQueryDto`, `SendInvoiceEmailDto`

### Changed
- Updated OpenAPI spec with latest API definitions
- Regenerated SDK client and DTO classes

## [0.1.0] — 2026-03-06

### Added
- Initial SDK release
- API client implementation
- Request signing
- Basic error handling
