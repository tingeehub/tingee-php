# tingee/sdk-php

> SDK chính thức tích hợp **Tingee Open API** cho PHP 8.0+

[![Packagist](https://img.shields.io/packagist/v/tingee/sdk-php)](https://packagist.org/packages/tingee/sdk-php)
[![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4)](https://www.php.net)
[![License: ISC](https://img.shields.io/badge/License-ISC-yellow)](LICENSE)

---

## Cài đặt

```bash
composer require tingee/sdk-php
```

---

## Bắt đầu nhanh

```php
<?php
require_once 'vendor/autoload.php';

use Tingee\Sdk\TingeeClient;

$client = new TingeeClient(
    secretKey:   $_ENV['TINGEE_SECRET_KEY'],
    clientId:    $_ENV['TINGEE_CLIENT_ID'],
    environment: 'prod',  // 'prod' | 'uat', mặc định 'prod'
    timeout:     90,      // giây, mặc định 90
    // baseUrl: 'https://uat-open-api.tingee.vn', // tùy chọn, ghi đè environment
);

$result = $client->merchant->getPaging(
    filter: null, sorting: null, skipCount: 0, maxResultCount: 10
);

if ($result->isSuccess()) {
    print_r($result->getData());
} else {
    echo "Lỗi {$result->getCode()}: {$result->getMessage()}";
}
```

---

## Cấu hình

| Tham số | Kiểu | Mặc định | Mô tả |
|---|---|---|---|
| `secretKey` | `string` | — | **Bắt buộc.** Secret key từ Tingee Dashboard |
| `clientId` | `string` | — | **Bắt buộc.** Client ID từ Tingee Dashboard |
| `environment` | `string` | `'prod'` | `'prod'` \| `'uat'` |
| `timeout` | `int` | `90` | Timeout (giây) |
| `baseUrl` | `string\|null` | — | Ghi đè URL (bỏ qua `environment`) |

### Laravel

```php
// AppServiceProvider.php
$this->app->singleton(TingeeClient::class, fn () => new TingeeClient(
    secretKey:   config('services.tingee.secret_key'),
    clientId:    config('services.tingee.client_id'),
    environment: config('services.tingee.environment', 'prod'),
));
```

---

## Gọi API

Các phương thức được nhóm theo tính năng (`$client-><group>-><method>()`):

```php
// Merchant — lấy danh sách
$result = $client->merchant->getPaging(
    filter: null, sorting: null, skipCount: 0, maxResultCount: 10
);
if ($result->isSuccess()) {
    foreach ($result->getData()->items as $merchant) echo $merchant->name . PHP_EOL;
}

// Shop — lấy danh sách
$result = $client->shop->getPaging(
    filter: null, sorting: null, skipCount: 0, maxResultCount: 10
);

// Direct Debit
$sub = $client->directDebit->getSubscriptionStatus(
    requestId: 'uuid-here',
    subscriptionId: 'uuid-here',
    tokenRef: 'token-ref'
);
```

> **Lưu ý:** SDK trả về `TingeeApiResponse` với `code` và `message`. Dùng `isSuccess()` hoặc kiểm tra `getCode() === '00'` để xác định thành công — SDK **không tự throw** khi `code !== '00'`.

---

## Xác thực Webhook

```php
// index.php / route handler
$signature = $_SERVER['HTTP_X_SIGNATURE']          ?? '';
$timestamp  = $_SERVER['HTTP_X_REQUEST_TIMESTAMP'] ?? '';
$body       = json_decode(file_get_contents('php://input'), true);

$result = $client->verifyWebhookSignature($signature, $timestamp, $body);

if ($result->isError()) {
    http_response_code(401);
    echo json_encode(['error' => $result->message]);
    exit;
}

// Xử lý giao dịch...
echo json_encode(['received' => true]);
```

```php
// Laravel
Route::post('/webhook/tingee', function (Request $request, TingeeClient $client) {
    $result = $client->verifyWebhookSignature(
        $request->header('x-signature'),
        $request->header('x-request-timestamp'),
        $request->all()
    );
    if ($result->isError()) abort(401, $result->message);
    // Xử lý...
    return response()->json(['received' => true]);
});
```

---

## Bank Constants

```php
use Tingee\Sdk\Types\BankNameEnum;
use Tingee\Sdk\Types\BankConstants;

BankConstants::getBin(BankNameEnum::VIETCOMBANK)       // "970436"
BankConstants::getShortName(BankNameEnum::VIETCOMBANK) // "Vietcombank"
BankConstants::getFullName(BankNameEnum::VIETCOMBANK)  // "Ngân hàng TMCP Ngoại Thương Việt Nam"
```

---

## Xem thêm

- [CHANGELOG](./CHANGELOG.md)
- [Tài liệu Tingee Open API](https://open-api.tingee.vn)
- [Tài liệu Tingee Developer](https://developers.tingee.vn)
- [Trang chủ Tingee](https://tingee.vn)
