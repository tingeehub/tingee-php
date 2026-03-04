<?php
// Auto-generated from openapi/sdk.json
// DO NOT EDIT MANUALLY

namespace Tingee\Sdk\Client;

use Tingee\Sdk\Http\TingeeHttpClient;
use Tingee\Sdk\Http\TingeeHttpException;
use Tingee\Sdk\Types\TingeeApiResponse;
use Tingee\Sdk\Types\Dtos\OpenApiOuputDto;
use Tingee\Sdk\Types\Dtos\GenerateVietQROuputDto;
use Tingee\Sdk\Types\Dtos\OpenApiGenerateVietQRInputDto;
use Tingee\Sdk\Types\Dtos\GenerateDynamicQROuputDto;
use Tingee\Sdk\Types\Dtos\GenerateDynamicQRInputDto;
use Tingee\Sdk\Types\Dtos\EmptyDto;
use Tingee\Sdk\Types\Dtos\OpenApiDeleteDynamicQRInputDto;
use Tingee\Sdk\Types\Dtos\OpenApiBillInfoDto;
use Tingee\Sdk\Types\Dtos\OpenApiTransactionPagedOuputDto;
use Tingee\Sdk\Types\Dtos\OpenApiGetStatusDynamicQROutputDto;
use Tingee\Sdk\Types\Dtos\OpenApiGetStatusDynamicQRInputDto;
use Tingee\Sdk\Types\Dtos\Bank;
use Tingee\Sdk\Types\Dtos\PagedResultDto;
use Tingee\Sdk\Types\Dtos\OpenApiGetVAPagedOuputDto;
use Tingee\Sdk\Types\Dtos\OpenApiGetVAPagedInputDto;
use Tingee\Sdk\Types\Dtos\OpenApiGenerateVietQROuputDto;
use Tingee\Sdk\Types\Dtos\BankCreateVAOuputDto;
use Tingee\Sdk\Types\Dtos\OpenApiCreateVAInpuDto;
use Tingee\Sdk\Types\Dtos\OpenApiConfirmVAOuputDto;
use Tingee\Sdk\Types\Dtos\OpenApiBankConfirmVAInputDto;
use Tingee\Sdk\Types\Dtos\BankDeleteVAOutputDto;
use Tingee\Sdk\Types\Dtos\OpenApiRegisterNotifyDto;
use Tingee\Sdk\Types\Dtos\OpenApiRefundDto;
use Tingee\Sdk\Types\Dtos\OpenApiReadSecurityCodeDto;
use Tingee\Sdk\Types\Dtos\OpenApiReadPartnerSecurityCodeDto;
use Tingee\Sdk\Types\Dtos\SendNotifyTingeeBoxDto;
use Tingee\Sdk\Types\Dtos\OpenApiAddDeviceToShop;
use Tingee\Sdk\Types\Dtos\OpenApiShopLinkToDeviceDto;
use Tingee\Sdk\Types\Dtos\OpenApiUpdateShopDeviceLinkDto;
use Tingee\Sdk\Types\Dtos\BIDVOpenApiReadAmountDto;
use Tingee\Sdk\Types\Dtos\OpenApiReadAmountDto;
use Tingee\Sdk\Types\Dtos\OpenApiShowQRCodeDto;
use Tingee\Sdk\Types\Dtos\OpenApiGetDevicesLinkToShopOrVA;
use Tingee\Sdk\Types\Dtos\DeviceInfoDto;
use Tingee\Sdk\Types\Dtos\ShopInfoDto;
use Tingee\Sdk\Types\Dtos\DeviceDto;
use Tingee\Sdk\Types\Dtos\OpenApiGetPagingDeviceInputDto;
use Tingee\Sdk\Types\Dtos\String;
use Tingee\Sdk\Types\Dtos\OpenApiVerifyReferralCodeResponseDto;
use Tingee\Sdk\Types\Dtos\OpenApiCreateOrUpdateShopOutputDto;
use Tingee\Sdk\Types\Dtos\SendNotifyTelegramDto;
use Tingee\Sdk\Types\Dtos\SendNotifyLarkDto;
use Tingee\Sdk\Types\Dtos\SendNotifyZaloDto;
use Tingee\Sdk\Types\Dtos\SendNotifyPlatformDto;
use Tingee\Sdk\Types\Dtos\OpenApiCreateOrUpdateShopDto;
use Tingee\Sdk\Types\Dtos\OpenApiGetShopPagedOuputDto;
use Tingee\Sdk\Types\Dtos\OpenApiGetShopPagedInputDto;
use Tingee\Sdk\Types\Dtos\GoogleModuleConfigDto;
use Tingee\Sdk\Types\Dtos\HotlineModuleConfigDto;
use Tingee\Sdk\Types\Dtos\EmailModuleConfigDto;
use Tingee\Sdk\Types\Dtos\ZaloModuleConfigDto;
use Tingee\Sdk\Types\Dtos\MessengerModuleConfigDto;
use Tingee\Sdk\Types\Dtos\PaymentModuleConfigDto;
use Tingee\Sdk\Types\Dtos\InvoiceModuleConfigDto;
use Tingee\Sdk\Types\Dtos\ShopNfcModuleItemDto;
use Tingee\Sdk\Types\Dtos\OpenApiShopNFCConfigDto;
use Tingee\Sdk\Types\Dtos\OpenApiLinkOrUnlinkNfcShopDto;
use Tingee\Sdk\Types\Dtos\OpenApiDeepLinkDto;
use Tingee\Sdk\Types\Dtos\OCBInfoDto;
use Tingee\Sdk\Types\Dtos\TPBInfoDto;
use Tingee\Sdk\Types\Dtos\BIDVInfoDto;
use Tingee\Sdk\Types\Dtos\MBBInfoDto;
use Tingee\Sdk\Types\Dtos\ACBInfoDto;
use Tingee\Sdk\Types\Dtos\VPBInfoDto;
use Tingee\Sdk\Types\Dtos\ShinhanInfoDto;
use Tingee\Sdk\Types\Dtos\PGBInfoDto;
use Tingee\Sdk\Types\Dtos\VIBInfoDto;
use Tingee\Sdk\Types\Dtos\CTGInfoDto;
use Tingee\Sdk\Types\Dtos\STBInfoDto;
use Tingee\Sdk\Types\Dtos\AgribankInfoDto;
use Tingee\Sdk\Types\Dtos\VCBBaasDto;
use Tingee\Sdk\Types\Dtos\VCBInfoDto;
use Tingee\Sdk\Types\Dtos\COBInfoDto;
use Tingee\Sdk\Types\Dtos\BankInfoDto;
use Tingee\Sdk\Types\Dtos\V2AccountNumberDDLDto;
use Tingee\Sdk\Types\Dtos\OpenApiAccountNumberDDLPagedInputDto;
use Tingee\Sdk\Types\Dtos\OpenApiTransactionPagedInputDto;
use Tingee\Sdk\Types\Dtos\MerchantBankConfigPagedOutputDto;
use Tingee\Sdk\Types\Dtos\OpenApiMerchantBankConfigPagedInputDto;
use Tingee\Sdk\Types\Dtos\Number;
use Tingee\Sdk\Types\Dtos\BIDVConfigDto;
use Tingee\Sdk\Types\Dtos\CTGConfigDto;
use Tingee\Sdk\Types\Dtos\ACBConfigBusinessDto;
use Tingee\Sdk\Types\Dtos\OpenApiBankCreateOrUpdateConfigDto;
use Tingee\Sdk\Types\Dtos\OpenApiDeleteConfigDto;
use Tingee\Sdk\Types\Dtos\OpenApiCreateBankVAOutputDto;
use Tingee\Sdk\Types\Dtos\OpenApiConfigAccountBusinessDto;
use Tingee\Sdk\Types\Dtos\OpenApiDeleteConfigBusinessDto;
use Tingee\Sdk\Types\Dtos\EventUrlItemDto;
use Tingee\Sdk\Types\Dtos\OpenApiCreateMerchantDto;
use Tingee\Sdk\Types\Dtos\FileUploadDto;
use Tingee\Sdk\Types\Dtos\OCBConfigDto;
use Tingee\Sdk\Types\Dtos\MBBConfigDto;
use Tingee\Sdk\Types\Dtos\ShinhanConfigDto;
use Tingee\Sdk\Types\Dtos\VIBConfigDto;
use Tingee\Sdk\Types\Dtos\ACBConfigDto;
use Tingee\Sdk\Types\Dtos\VPBConfigBusinessDto;
use Tingee\Sdk\Types\Dtos\VPBConfigDto;
use Tingee\Sdk\Types\Dtos\VCBConfigBusinessDto;
use Tingee\Sdk\Types\Dtos\VCBConfigDto;
use Tingee\Sdk\Types\Dtos\BankConfigDto;
use Tingee\Sdk\Types\Dtos\BaoKimConfigDto;
use Tingee\Sdk\Types\Dtos\BNPLConfigDto;
use Tingee\Sdk\Types\Dtos\OnePayConfigDto;
use Tingee\Sdk\Types\Dtos\DirectDebitConfigDto;
use Tingee\Sdk\Types\Dtos\MerchantPackageInfo;
use Tingee\Sdk\Types\Dtos\MerchantDto;
use Tingee\Sdk\Types\Dtos\OpenApiGetPagingMerchantsDto;
use Tingee\Sdk\Types\Dtos\OpenApiRegisterDto;
use Tingee\Sdk\Types\Dtos\PaymentBillResponseDto;
use Tingee\Sdk\Types\Dtos\OpenApiPaymentBillDto;
use Tingee\Sdk\Types\Dtos\DeleteSubscriptionOutputDto;
use Tingee\Sdk\Types\Dtos\OpenApiDeleteSubscriptionDto;
use Tingee\Sdk\Types\Dtos\RefundOutputDto;
use Tingee\Sdk\Types\Dtos\OpenApiRefundInputDto;
use Tingee\Sdk\Types\Dtos\OpenApiEditConfirmBeforePaymentMethodDto;
use Tingee\Sdk\Types\Dtos\OpenApiSubscriptionStatusResponseDto;
use Tingee\Sdk\Types\Dtos\CustomerInfoDto;
use Tingee\Sdk\Types\Dtos\OpenApiPaymentTransactionStatusResponseDto;
use Tingee\Sdk\Types\Dtos\OpenApiPaymentTransactionsPagedOutputDto;

class TingeeV1Methods
{
    private TingeeHttpClient $httpClient;

    public function __construct(TingeeHttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * POST /v1/generate-viet-qr
     *
     * @return TingeeApiResponse<GenerateVietQROuputDto>
     * @throws TingeeHttpException
     */
    public function generateVietQr(OpenApiGenerateVietQRInputDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/generate-viet-qr',
            $body,
            [],
            GenerateVietQROuputDto::class
        );
        /** @var TingeeApiResponse<GenerateVietQROuputDto> $response */
        return $response;
    }

    /**
     * POST /v1/generate-dynamic-qr
     *
     * @return TingeeApiResponse<GenerateDynamicQROuputDto>
     * @throws TingeeHttpException
     */
    public function generateDynamicQr(GenerateDynamicQRInputDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/generate-dynamic-qr',
            $body,
            [],
            GenerateDynamicQROuputDto::class
        );
        /** @var TingeeApiResponse<GenerateDynamicQROuputDto> $response */
        return $response;
    }

    /**
     * POST /v1/delete-dynamic-qr
     *
     * @return TingeeApiResponse<EmptyDto>
     * @throws TingeeHttpException
     */
    public function deleteDynamicQr(OpenApiDeleteDynamicQRInputDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/delete-dynamic-qr',
            $body,
            [],
            EmptyDto::class
        );
        /** @var TingeeApiResponse<EmptyDto> $response */
        return $response;
    }

    /**
     * POST /v1/get-status-dynamic-qr
     *
     * @return TingeeApiResponse<OpenApiGetStatusDynamicQROutputDto>
     * @throws TingeeHttpException
     */
    public function getStatusDynamicQr(OpenApiGetStatusDynamicQRInputDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/get-status-dynamic-qr',
            $body,
            [],
            OpenApiGetStatusDynamicQROutputDto::class
        );
        /** @var TingeeApiResponse<OpenApiGetStatusDynamicQROutputDto> $response */
        return $response;
    }

    /**
     * GET /v1/get-banks
     *
     * @return TingeeApiResponse<Bank[]>
     * @throws TingeeHttpException
     */
    public function getBanks(): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'GET',
            '/v1/get-banks',
            null,
            [],
            'Tingee\Sdk\Types\Dtos\Bank[]'
        );
        /** @var TingeeApiResponse<Bank[]> $response */
        return $response;
    }

    /**
     * POST /v1/get-va-paging
     *
     * @return TingeeApiResponse<PagedResultDto<OpenApiGetVAPagedOuputDto>>
     * @throws TingeeHttpException
     */
    public function getVaPaging(OpenApiGetVAPagedInputDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/get-va-paging',
            $body,
            [],
            PagedResultDto::class, OpenApiGetVAPagedOuputDto::class
        );
        /** @var TingeeApiResponse<PagedResultDto<OpenApiGetVAPagedOuputDto>> $response */
        return $response;
    }

    /**
     * POST /v1/get-account-number-info-by-qr-code
     *
     * @return TingeeApiResponse<PagedResultDto<OpenApiGenerateVietQROuputDto>>
     * @throws TingeeHttpException
     */
    public function getAccountNumberInfoByQrCode(string $qrCode): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/get-account-number-info-by-qr-code',
            null,
            [
            'qrCode' => $qrCode
        ],
            PagedResultDto::class, OpenApiGenerateVietQROuputDto::class
        );
        /** @var TingeeApiResponse<PagedResultDto<OpenApiGenerateVietQROuputDto>> $response */
        return $response;
    }

    /**
     * POST /v1/create-va
     *
     * @return TingeeApiResponse<BankCreateVAOuputDto>
     * @throws TingeeHttpException
     */
    public function createVa(OpenApiCreateVAInpuDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/create-va',
            $body,
            [],
            BankCreateVAOuputDto::class
        );
        /** @var TingeeApiResponse<BankCreateVAOuputDto> $response */
        return $response;
    }

    /**
     * POST /v1/create-va-advanced
     *
     * @return TingeeApiResponse<BankCreateVAOuputDto>
     * @throws TingeeHttpException
     */
    public function createVaAdvanced(OpenApiCreateVAInpuDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/create-va-advanced',
            $body,
            [],
            BankCreateVAOuputDto::class
        );
        /** @var TingeeApiResponse<BankCreateVAOuputDto> $response */
        return $response;
    }

    /**
     * POST /v1/confirm-va
     *
     * @return TingeeApiResponse<OpenApiConfirmVAOuputDto>
     * @throws TingeeHttpException
     */
    public function confirmVa(OpenApiBankConfirmVAInputDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/confirm-va',
            $body,
            [],
            OpenApiConfirmVAOuputDto::class
        );
        /** @var TingeeApiResponse<OpenApiConfirmVAOuputDto> $response */
        return $response;
    }

    /**
     * POST /v1/delete-va
     *
     * @return TingeeApiResponse<BankDeleteVAOutputDto>
     * @throws TingeeHttpException
     */
    public function deleteVa(string $bankBin, ?string $bankName = null, string $vaAccountNumber, ?float $merchantId = null): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/delete-va',
            null,
            [
            'bankBin' => $bankBin,
            'bankName' => $bankName,
            'vaAccountNumber' => $vaAccountNumber,
            'merchantId' => $merchantId
        ],
            BankDeleteVAOutputDto::class
        );
        /** @var TingeeApiResponse<BankDeleteVAOutputDto> $response */
        return $response;
    }

    /**
     * POST /v1/confirm-delete-va
     *
     * @return TingeeApiResponse<EmptyDto>
     * @throws TingeeHttpException
     */
    public function confirmDeleteVa(OpenApiBankConfirmVAInputDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/confirm-delete-va',
            $body,
            [],
            EmptyDto::class
        );
        /** @var TingeeApiResponse<EmptyDto> $response */
        return $response;
    }

    /**
     * POST /v1/register-notify
     *
     * @return TingeeApiResponse<BankDeleteVAOutputDto>
     * @throws TingeeHttpException
     */
    public function registerNotify(OpenApiRegisterNotifyDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/register-notify',
            $body,
            [],
            BankDeleteVAOutputDto::class
        );
        /** @var TingeeApiResponse<BankDeleteVAOutputDto> $response */
        return $response;
    }

    /**
     * POST /v1/confirm-register-notify
     *
     * @return TingeeApiResponse<BankDeleteVAOutputDto>
     * @throws TingeeHttpException
     */
    public function confirmRegisterNotify(OpenApiBankConfirmVAInputDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/confirm-register-notify',
            $body,
            [],
            BankDeleteVAOutputDto::class
        );
        /** @var TingeeApiResponse<BankDeleteVAOutputDto> $response */
        return $response;
    }

    /**
     * POST /v1/refund
     *
     * @return TingeeApiResponse<EmptyDto>
     * @throws TingeeHttpException
     */
    public function refund(OpenApiRefundDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/refund',
            $body,
            [],
            EmptyDto::class
        );
        /** @var TingeeApiResponse<EmptyDto> $response */
        return $response;
    }

    /**
     * POST /v1/device/read-security-code
     *
     * @return TingeeApiResponse<EmptyDto>
     * @throws TingeeHttpException
     */
    public function deviceReadSecurityCode(OpenApiReadSecurityCodeDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/device/read-security-code',
            $body,
            [],
            EmptyDto::class
        );
        /** @var TingeeApiResponse<EmptyDto> $response */
        return $response;
    }

    /**
     * POST /v1/device/read-partner-security-code
     *
     * @return TingeeApiResponse<EmptyDto>
     * @throws TingeeHttpException
     */
    public function deviceReadPartnerSecurityCode(OpenApiReadPartnerSecurityCodeDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/device/read-partner-security-code',
            $body,
            [],
            EmptyDto::class
        );
        /** @var TingeeApiResponse<EmptyDto> $response */
        return $response;
    }

    /**
     * POST /v1/device/add-device-to-shop
     *
     * @return TingeeApiResponse<array>
     * @throws TingeeHttpException
     */
    public function deviceAddDeviceToShop(OpenApiAddDeviceToShop $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/device/add-device-to-shop',
            $body,
            [],
            ''
        );
        /** @var TingeeApiResponse<array> $response */
        return $response;
    }

    /**
     * POST /v1/device/update-shop-device-link-status
     *
     * @return TingeeApiResponse<EmptyDto>
     * @throws TingeeHttpException
     */
    public function deviceUpdateShopDeviceLinkStatus(OpenApiUpdateShopDeviceLinkDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/device/update-shop-device-link-status',
            $body,
            [],
            EmptyDto::class
        );
        /** @var TingeeApiResponse<EmptyDto> $response */
        return $response;
    }

    /**
     * POST /v1/device/read-amount
     *
     * @return TingeeApiResponse<EmptyDto>
     * @throws TingeeHttpException
     */
    public function deviceReadAmount(BIDVOpenApiReadAmountDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/device/read-amount',
            $body,
            [],
            EmptyDto::class
        );
        /** @var TingeeApiResponse<EmptyDto> $response */
        return $response;
    }

    /**
     * POST /v1/device/read-amount-link-to-merchant
     *
     * @return TingeeApiResponse<EmptyDto>
     * @throws TingeeHttpException
     */
    public function deviceReadAmountLinkToMerchant(OpenApiReadAmountDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/device/read-amount-link-to-merchant',
            $body,
            [],
            EmptyDto::class
        );
        /** @var TingeeApiResponse<EmptyDto> $response */
        return $response;
    }

    /**
     * POST /v1/device/show-qr-code
     *
     * @return TingeeApiResponse<EmptyDto>
     * @throws TingeeHttpException
     */
    public function deviceShowQrCode(OpenApiShowQRCodeDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/device/show-qr-code',
            $body,
            [],
            EmptyDto::class
        );
        /** @var TingeeApiResponse<EmptyDto> $response */
        return $response;
    }

    /**
     * POST /v1/device/show-dynamic-qr-code
     *
     * @return TingeeApiResponse<EmptyDto>
     * @throws TingeeHttpException
     */
    public function deviceShowDynamicQrCode(OpenApiShowQRCodeDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/device/show-dynamic-qr-code',
            $body,
            [],
            EmptyDto::class
        );
        /** @var TingeeApiResponse<EmptyDto> $response */
        return $response;
    }

    /**
     * POST /v1/device/show-static-qr-code
     *
     * @return TingeeApiResponse<EmptyDto>
     * @throws TingeeHttpException
     */
    public function deviceShowStaticQrCode(OpenApiShowQRCodeDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/device/show-static-qr-code',
            $body,
            [],
            EmptyDto::class
        );
        /** @var TingeeApiResponse<EmptyDto> $response */
        return $response;
    }

    /**
     * POST /v1/device/get-devices-link-to-shop-or-va
     *
     * @return TingeeApiResponse<array>
     * @throws TingeeHttpException
     */
    public function deviceGetDevicesLinkToShopOrVa(OpenApiGetDevicesLinkToShopOrVA $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/device/get-devices-link-to-shop-or-va',
            $body,
            [],
            ''
        );
        /** @var TingeeApiResponse<array> $response */
        return $response;
    }

    /**
     * POST /v1/device/get-paging
     *
     * @return TingeeApiResponse<PagedResultDto<DeviceDto>>
     * @throws TingeeHttpException
     */
    public function deviceGetPaging(OpenApiGetPagingDeviceInputDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/device/get-paging',
            $body,
            [],
            PagedResultDto::class, DeviceDto::class
        );
        /** @var TingeeApiResponse<PagedResultDto<DeviceDto>> $response */
        return $response;
    }

    /**
     * DELETE /v1/device/reset
     *
     * @return TingeeApiResponse<String>
     * @throws TingeeHttpException
     */
    public function deviceReset(string $uuid): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'DELETE',
            '/v1/device/reset',
            null,
            [
            'uuid' => $uuid
        ],
            ''
        );
        /** @var TingeeApiResponse<string> $response */
        return $response;
    }

    /**
     * POST /v1/user/verify-referral-code
     *
     * @return TingeeApiResponse<OpenApiVerifyReferralCodeResponseDto>
     * @throws TingeeHttpException
     */
    public function userVerifyReferralCode(string $referralCode): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/user/verify-referral-code',
            null,
            [
            'referralCode' => $referralCode
        ],
            OpenApiVerifyReferralCodeResponseDto::class
        );
        /** @var TingeeApiResponse<OpenApiVerifyReferralCodeResponseDto> $response */
        return $response;
    }

    /**
     * POST /v1/shop/create-or-update
     *
     * @return TingeeApiResponse<OpenApiCreateOrUpdateShopOutputDto>
     * @throws TingeeHttpException
     */
    public function shopCreateOrUpdate(OpenApiCreateOrUpdateShopDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/shop/create-or-update',
            $body,
            [],
            OpenApiCreateOrUpdateShopOutputDto::class
        );
        /** @var TingeeApiResponse<OpenApiCreateOrUpdateShopOutputDto> $response */
        return $response;
    }

    /**
     * POST /v1/shop/get-paging
     *
     * @return TingeeApiResponse<PagedResultDto<OpenApiGetShopPagedOuputDto>>
     * @throws TingeeHttpException
     */
    public function shopGetPaging(OpenApiGetShopPagedInputDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/shop/get-paging',
            $body,
            [],
            PagedResultDto::class, OpenApiGetShopPagedOuputDto::class
        );
        /** @var TingeeApiResponse<PagedResultDto<OpenApiGetShopPagedOuputDto>> $response */
        return $response;
    }

    /**
     * POST /v1/deep-link/generate
     *
     * @return TingeeApiResponse<String>
     * @throws TingeeHttpException
     */
    public function deepLinkGenerate(OpenApiDeepLinkDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/deep-link/generate',
            $body,
            [],
            ''
        );
        /** @var TingeeApiResponse<string> $response */
        return $response;
    }

    /**
     * POST /v1/account-number/get-all-ddl
     *
     * @return TingeeApiResponse<array>
     * @throws TingeeHttpException
     */
    public function accountNumberGetAllDdl(OpenApiAccountNumberDDLPagedInputDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/account-number/get-all-ddl',
            $body,
            [],
            ''
        );
        /** @var TingeeApiResponse<array> $response */
        return $response;
    }

    /**
     * POST /v1/transaction/get-paging
     *
     * @return TingeeApiResponse<PagedResultDto<OpenApiTransactionPagedOuputDto>>
     * @throws TingeeHttpException
     */
    public function transactionGetPaging(OpenApiTransactionPagedInputDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/transaction/get-paging',
            $body,
            [],
            PagedResultDto::class, OpenApiTransactionPagedOuputDto::class
        );
        /** @var TingeeApiResponse<PagedResultDto<OpenApiTransactionPagedOuputDto>> $response */
        return $response;
    }

    /**
     * POST /v1/merchant/get-paging-config
     *
     * @return TingeeApiResponse<PagedResultDto<MerchantBankConfigPagedOutputDto>>
     * @throws TingeeHttpException
     */
    public function merchantGetPagingConfig(OpenApiMerchantBankConfigPagedInputDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/merchant/get-paging-config',
            $body,
            [],
            PagedResultDto::class, MerchantBankConfigPagedOutputDto::class
        );
        /** @var TingeeApiResponse<PagedResultDto<MerchantBankConfigPagedOutputDto>> $response */
        return $response;
    }

    /**
     * POST /v1/merchant/create-or-update-config
     *
     * @return TingeeApiResponse<Number>
     * @throws TingeeHttpException
     */
    public function merchantCreateOrUpdateConfig(OpenApiBankCreateOrUpdateConfigDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/merchant/create-or-update-config',
            $body,
            [],
            ''
        );
        /** @var TingeeApiResponse<int|float> $response */
        return $response;
    }

    /**
     * POST /v1/merchant/delete-config
     *
     * @return TingeeApiResponse<Number>
     * @throws TingeeHttpException
     */
    public function merchantDeleteConfig(OpenApiDeleteConfigDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/merchant/delete-config',
            $body,
            [],
            ''
        );
        /** @var TingeeApiResponse<int|float> $response */
        return $response;
    }

    /**
     * POST /v1/merchant/config-account-business
     *
     * @return TingeeApiResponse<OpenApiCreateBankVAOutputDto>
     * @throws TingeeHttpException
     */
    public function merchantConfigAccountBusiness(OpenApiConfigAccountBusinessDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/merchant/config-account-business',
            $body,
            [],
            OpenApiCreateBankVAOutputDto::class
        );
        /** @var TingeeApiResponse<OpenApiCreateBankVAOutputDto> $response */
        return $response;
    }

    /**
     * POST /v1/merchant/delete-config-account-business
     *
     * @return TingeeApiResponse<mixed>
     * @throws TingeeHttpException
     */
    public function merchantDeleteConfigAccountBusiness(OpenApiDeleteConfigBusinessDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/merchant/delete-config-account-business',
            $body,
            [],
            ''
        );
        return $response;
    }

    /**
     * POST /v1/merchant/create
     *
     * @return TingeeApiResponse<Number>
     * @throws TingeeHttpException
     */
    public function merchantCreate(OpenApiCreateMerchantDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/merchant/create',
            $body,
            [],
            ''
        );
        /** @var TingeeApiResponse<int|float> $response */
        return $response;
    }

    /**
     * POST /v1/merchant/get-paging
     *
     * @return TingeeApiResponse<PagedResultDto<MerchantDto>>
     * @throws TingeeHttpException
     */
    public function merchantGetPaging(OpenApiGetPagingMerchantsDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/merchant/get-paging',
            $body,
            [],
            PagedResultDto::class, MerchantDto::class
        );
        /** @var TingeeApiResponse<PagedResultDto<MerchantDto>> $response */
        return $response;
    }

    /**
     * DELETE /v1/merchant/delete
     *
     * @return TingeeApiResponse<EmptyDto>
     * @throws TingeeHttpException
     */
    public function merchantDelete(float $merchantId): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'DELETE',
            '/v1/merchant/delete',
            null,
            [
            'merchantId' => $merchantId
        ],
            EmptyDto::class
        );
        /** @var TingeeApiResponse<EmptyDto> $response */
        return $response;
    }

    /**
     * POST /v1/direct-debit/register
     *
     * @return TingeeApiResponse<String>
     * @throws TingeeHttpException
     */
    public function directDebitRegister(OpenApiRegisterDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/direct-debit/register',
            $body,
            [],
            ''
        );
        /** @var TingeeApiResponse<string> $response */
        return $response;
    }

    /**
     * POST /v1/direct-debit/payment-bill
     *
     * @return TingeeApiResponse<PaymentBillResponseDto>
     * @throws TingeeHttpException
     */
    public function directDebitPaymentBill(OpenApiPaymentBillDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/direct-debit/payment-bill',
            $body,
            [],
            PaymentBillResponseDto::class
        );
        /** @var TingeeApiResponse<PaymentBillResponseDto> $response */
        return $response;
    }

    /**
     * DELETE /v1/direct-debit/delete-subscription
     *
     * @return TingeeApiResponse<DeleteSubscriptionOutputDto>
     * @throws TingeeHttpException
     */
    public function directDebitDeleteSubscription(OpenApiDeleteSubscriptionDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'DELETE',
            '/v1/direct-debit/delete-subscription',
            $body,
            [],
            DeleteSubscriptionOutputDto::class
        );
        /** @var TingeeApiResponse<DeleteSubscriptionOutputDto> $response */
        return $response;
    }

    /**
     * POST /v1/direct-debit/refund
     *
     * @return TingeeApiResponse<RefundOutputDto>
     * @throws TingeeHttpException
     */
    public function directDebitRefund(OpenApiRefundInputDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'POST',
            '/v1/direct-debit/refund',
            $body,
            [],
            RefundOutputDto::class
        );
        /** @var TingeeApiResponse<RefundOutputDto> $response */
        return $response;
    }

    /**
     * PUT /v1/direct-debit/edit-confirm-payment-method
     *
     * @return TingeeApiResponse<String>
     * @throws TingeeHttpException
     */
    public function directDebitEditConfirmPaymentMethod(OpenApiEditConfirmBeforePaymentMethodDto $body): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'PUT',
            '/v1/direct-debit/edit-confirm-payment-method',
            $body,
            [],
            ''
        );
        /** @var TingeeApiResponse<string> $response */
        return $response;
    }

    /**
     * GET /v1/direct-debit/get-subscription-status
     *
     * @return TingeeApiResponse<OpenApiSubscriptionStatusResponseDto>
     * @throws TingeeHttpException
     */
    public function directDebitGetSubscriptionStatus(string $requestId, string $subscriptionId, string $tokenRef): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'GET',
            '/v1/direct-debit/get-subscription-status',
            null,
            [
            'requestId' => $requestId,
            'subscriptionId' => $subscriptionId,
            'tokenRef' => $tokenRef
        ],
            OpenApiSubscriptionStatusResponseDto::class
        );
        /** @var TingeeApiResponse<OpenApiSubscriptionStatusResponseDto> $response */
        return $response;
    }

    /**
     * GET /v1/direct-debit/get-transaction-status
     *
     * @return TingeeApiResponse<OpenApiPaymentTransactionStatusResponseDto>
     * @throws TingeeHttpException
     */
    public function directDebitGetTransactionStatus(string $transactionId, string $tokenRef, string $subscriptionId): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'GET',
            '/v1/direct-debit/get-transaction-status',
            null,
            [
            'transactionId' => $transactionId,
            'tokenRef' => $tokenRef,
            'subscriptionId' => $subscriptionId
        ],
            OpenApiPaymentTransactionStatusResponseDto::class
        );
        /** @var TingeeApiResponse<OpenApiPaymentTransactionStatusResponseDto> $response */
        return $response;
    }

    /**
     * GET /v1/direct-debit/get-paging-transactions
     *
     * @return TingeeApiResponse<PagedResultDto<OpenApiPaymentTransactionsPagedOutputDto>>
     * @throws TingeeHttpException
     */
    public function directDebitGetPagingTransactions(string $subscriptionId, string $tokenRef, ?string $startTime = null, ?string $endTime = null, ?float $skipCount = null, ?float $maxResultCount = null): TingeeApiResponse
    {
        $response = $this->httpClient->request(
            'GET',
            '/v1/direct-debit/get-paging-transactions',
            null,
            [
            'subscriptionId' => $subscriptionId,
            'tokenRef' => $tokenRef,
            'startTime' => $startTime,
            'endTime' => $endTime,
            'skipCount' => $skipCount,
            'maxResultCount' => $maxResultCount
        ],
            PagedResultDto::class, OpenApiPaymentTransactionsPagedOutputDto::class
        );
        /** @var TingeeApiResponse<PagedResultDto<OpenApiPaymentTransactionsPagedOutputDto>> $response */
        return $response;
    }
}

trait TingeeClientGenerated
{
    protected TingeeHttpClient $httpClient;

    /** @var TingeeV1Methods */
    public TingeeV1Methods $v1;

    protected function initVersionNamespaces(): void
    {
        $this->v1 = new TingeeV1Methods($this->httpClient);
    }
}
