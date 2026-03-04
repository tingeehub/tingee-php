<?php
// Auto-generated from openapi/sdk.json
// DO NOT EDIT MANUALLY

namespace Tingee\Sdk\Types\Dtos;

use Tingee\Sdk\Types\BankNameEnum;

class OpenApiOuputDto implements \JsonSerializable
{
    public string $code = '';
    public string $message = '';
    public $data = null;

    public function jsonSerialize(): array
    {
        return [
            'code' => $this->code,
            'message' => $this->message,
            'data' => $this->data,
        ];
    }
}

class GenerateVietQROuputDto implements \JsonSerializable
{
    public string $qrCode = '';
    public string $qrCodeImage = '';
    public string $qrAccount = '';
    public string $referenceLabelCode = '';

    public function jsonSerialize(): array
    {
        return [
            'qrCode' => $this->qrCode,
            'qrCodeImage' => $this->qrCodeImage,
            'qrAccount' => $this->qrAccount,
            'referenceLabelCode' => $this->referenceLabelCode,
        ];
    }
}

class OpenApiGenerateVietQRInputDto implements \JsonSerializable
{
    public string $bankBin = '';
    public ?string $bankName = null;
    public string $accountNumber = '';
    public float $amount = 0.0;
    public string $content = '';

    public function jsonSerialize(): array
    {
        return [
            'bankBin' => $this->bankBin,
            'bankName' => $this->bankName,
            'accountNumber' => $this->accountNumber,
            'amount' => $this->amount,
            'content' => $this->content,
        ];
    }
}

class GenerateDynamicQROuputDto implements \JsonSerializable
{
    public string $qrCode = '';
    public string $qrAccount = '';
    public string $billId = '';

    public function jsonSerialize(): array
    {
        return [
            'qrCode' => $this->qrCode,
            'qrAccount' => $this->qrAccount,
            'billId' => $this->billId,
        ];
    }
}

class GenerateDynamicQRInputDto implements \JsonSerializable
{
    public float $merchantId = 0.0;
    public string $vaAccountNumber = '';
    public string $qrCodeType = '';
    public string $bankBin = '';
    public ?string $bankName = null;
    public float $amount = 0.0;
    public string $purpose = '';
    public ?string $extraInfo = null;

    public function jsonSerialize(): array
    {
        return [
            'merchantId' => $this->merchantId,
            'vaAccountNumber' => $this->vaAccountNumber,
            'qrCodeType' => $this->qrCodeType,
            'bankBin' => $this->bankBin,
            'bankName' => $this->bankName,
            'amount' => $this->amount,
            'purpose' => $this->purpose,
            'extraInfo' => $this->extraInfo,
        ];
    }
}

class EmptyDto implements \JsonSerializable
{


    public function jsonSerialize(): array
    {
        return [

        ];
    }
}

class OpenApiDeleteDynamicQRInputDto implements \JsonSerializable
{
    public ?float $merchantId = null;
    public string $qrAccount = '';
    public string $billId = '';

    public function jsonSerialize(): array
    {
        return [
            'merchantId' => $this->merchantId,
            'qrAccount' => $this->qrAccount,
            'billId' => $this->billId,
        ];
    }
}

class OpenApiBillInfoDto implements \JsonSerializable
{
    public string $billId = '';
    public string $qrCodeType = '';
    public string $bankBin = '';
    public string $accountNumber = '';
    public string $vaAccountNumber = '';
    public string $qrAccount = '';
    public float $amount = 0.0;
    public string $purpose = '';
    public float $totalAmountPaid = 0.0;
    public float $totalPaymentsCount = 0.0;
    public float $expireInMinute = 0.0;
    public ?string $extraInfo = null;
    public string $status = '';

    public function jsonSerialize(): array
    {
        return [
            'billId' => $this->billId,
            'qrCodeType' => $this->qrCodeType,
            'bankBin' => $this->bankBin,
            'accountNumber' => $this->accountNumber,
            'vaAccountNumber' => $this->vaAccountNumber,
            'qrAccount' => $this->qrAccount,
            'amount' => $this->amount,
            'purpose' => $this->purpose,
            'totalAmountPaid' => $this->totalAmountPaid,
            'totalPaymentsCount' => $this->totalPaymentsCount,
            'expireInMinute' => $this->expireInMinute,
            'extraInfo' => $this->extraInfo,
            'status' => $this->status,
        ];
    }
}

class OpenApiTransactionPagedOuputDto implements \JsonSerializable
{
    public string $transactionId = '';
    public float $merchantId = 0.0;
    public float $shopId = 0.0;
    public ?string $bankBin = null;
    public ?string $cashFlowSource = null;
    public string $code = '';
    public float $amount = 0.0;
    public ?string $type = null;
    public ?string $content = null;
    public ?string $currency = null;
    public string $accountNumber = '';
    public ?string $vaAccountNumber = null;
    public ?string $transactionDate = null;
    public string $billId = '';

    public function jsonSerialize(): array
    {
        return [
            'transactionId' => $this->transactionId,
            'merchantId' => $this->merchantId,
            'shopId' => $this->shopId,
            'bankBin' => $this->bankBin,
            'cashFlowSource' => $this->cashFlowSource,
            'code' => $this->code,
            'amount' => $this->amount,
            'type' => $this->type,
            'content' => $this->content,
            'currency' => $this->currency,
            'accountNumber' => $this->accountNumber,
            'vaAccountNumber' => $this->vaAccountNumber,
            'transactionDate' => $this->transactionDate,
            'billId' => $this->billId,
        ];
    }
}

class OpenApiGetStatusDynamicQROutputDto implements \JsonSerializable
{
    public ?OpenApiBillInfoDto $billInfo = null;
    /** @var OpenApiTransactionPagedOuputDto[]|null */
    public array $transactionInfos = [];

    public function jsonSerialize(): array
    {
        return [
            'billInfo' => $this->billInfo,
            'transactionInfos' => $this->transactionInfos,
        ];
    }
}

class OpenApiGetStatusDynamicQRInputDto implements \JsonSerializable
{
    public ?float $merchantId = null;
    public string $qrAccount = '';
    public string $billId = '';

    public function jsonSerialize(): array
    {
        return [
            'merchantId' => $this->merchantId,
            'qrAccount' => $this->qrAccount,
            'billId' => $this->billId,
        ];
    }
}

class Bank implements \JsonSerializable
{
    public ?string $code = null;
    public ?string $name = null;
    public ?string $shortName = null;
    public ?string $bin = null;
    public ?string $urlLogo = null;
    public $termsAndConditions = null;

    public function jsonSerialize(): array
    {
        return [
            'code' => $this->code,
            'name' => $this->name,
            'shortName' => $this->shortName,
            'bin' => $this->bin,
            'urlLogo' => $this->urlLogo,
            'termsAndConditions' => $this->termsAndConditions,
        ];
    }
}

/**
 * @template T
 */
class PagedResultDto implements \JsonSerializable
{
    public /* ?float */ $totalCount = null;
    /** @var array<T> */
    public array $items = [];

    public function jsonSerialize(): array
    {
        return [
            'totalCount' => $this->totalCount,
            'items' => $this->items,
        ];
    }
}

class OpenApiGetVAPagedOuputDto implements \JsonSerializable
{
    public string $bankName = '';
    public string $bankBin = '';
    public string $accountType = '';
    public ?string $accountName = null;
    public string $accountNumber = '';
    public ?string $vaAccountNumber = null;
    public float $shopId = 0.0;
    public string $status = '';
    public string $creationTime = '';

    public function jsonSerialize(): array
    {
        return [
            'bankName' => $this->bankName,
            'bankBin' => $this->bankBin,
            'accountType' => $this->accountType,
            'accountName' => $this->accountName,
            'accountNumber' => $this->accountNumber,
            'vaAccountNumber' => $this->vaAccountNumber,
            'shopId' => $this->shopId,
            'status' => $this->status,
            'creationTime' => $this->creationTime,
        ];
    }
}

class OpenApiGetVAPagedInputDto implements \JsonSerializable
{
    public ?string $filter = null;
    public ?string $sorting = null;
    public float $skipCount = 0.0;
    public float $maxResultCount = 0.0;
    public ?string $startTime = null;
    public ?string $endTime = null;
    public float $merchantId = 0.0;
    public ?float $shopId = null;
    public string $accountType = '';
    public ?float $agentId = null;
    public string $dataAccess = '';
    public string $bankBin = '';
    public string $bankName = '';

    public function jsonSerialize(): array
    {
        return [
            'filter' => $this->filter,
            'sorting' => $this->sorting,
            'skipCount' => $this->skipCount,
            'maxResultCount' => $this->maxResultCount,
            'startTime' => $this->startTime,
            'endTime' => $this->endTime,
            'merchantId' => $this->merchantId,
            'shopId' => $this->shopId,
            'accountType' => $this->accountType,
            'agentId' => $this->agentId,
            'dataAccess' => $this->dataAccess,
            'bankBin' => $this->bankBin,
            'bankName' => $this->bankName,
        ];
    }
}

class OpenApiGenerateVietQROuputDto implements \JsonSerializable
{
    public string $bankBin = '';
    public string $accountNumber = '';
    public string $amount = '';
    public string $purpose = '';
    public string $vaPrefix = '';
    public string $vaSuffix = '';

    public function jsonSerialize(): array
    {
        return [
            'bankBin' => $this->bankBin,
            'accountNumber' => $this->accountNumber,
            'amount' => $this->amount,
            'purpose' => $this->purpose,
            'vaPrefix' => $this->vaPrefix,
            'vaSuffix' => $this->vaSuffix,
        ];
    }
}

class BankCreateVAOuputDto implements \JsonSerializable
{
    public string $bankName = '';
    public float $merchantAccountNumberId = 0.0;
    public float $shopId = 0.0;
    public string $status = '';
    public ?string $confirmId = null;
    public ?string $vaAccountNumber = null;
    public ?string $deepLink = null;
    public string $otpMethod = '';

    public function jsonSerialize(): array
    {
        return [
            'bankName' => $this->bankName,
            'merchantAccountNumberId' => $this->merchantAccountNumberId,
            'shopId' => $this->shopId,
            'status' => $this->status,
            'confirmId' => $this->confirmId,
            'vaAccountNumber' => $this->vaAccountNumber,
            'deepLink' => $this->deepLink,
            'otpMethod' => $this->otpMethod,
        ];
    }
}

class OpenApiCreateVAInpuDto implements \JsonSerializable
{
    public ?string $name = null;
    public ?string $cashFlowSource = null;
    public string $accountType = '';
    public string $accountNumber = '';
    public string $accountName = '';
    public string $identity = '';
    public string $mobile = '';
    public ?float $masterMerchantId = null;
    public ?float $shopId = null;
    public ?string $vaPrefix = null;
    public ?string $vaSuffix = null;
    public ?string $merchantName = null;
    public ?string $merchantAddress = null;
    public ?float $serviceId = null;
    public ?bool $isCreateNonOtp = null;
    public ?string $code = null;
    public ?string $taxCode = null;
    public ?string $softposUserName = null;
    public ?string $softposDeveloperId = null;
    public ?string $softposTid = null;
    public ?string $softposMid = null;
    public ?string $authorizationCode = null;
    public ?string $sessionLogin = null;
    public bool $isNotifyAccountNumber = false;
    public string $appType = '';
    public string $linkType = '';
    public ?string $vaAccountNumber = null;
    public ?string $acbUserId = null;
    public string $bankBin = '';
    public ?string $bankName = null;
    public ?float $merchantId = null;
    public string $redirectUrl = '';
    public string $webhookUrl = '';

    public function jsonSerialize(): array
    {
        return [
            'name' => $this->name,
            'cashFlowSource' => $this->cashFlowSource,
            'accountType' => $this->accountType,
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'identity' => $this->identity,
            'mobile' => $this->mobile,
            'masterMerchantId' => $this->masterMerchantId,
            'shopId' => $this->shopId,
            'vaPrefix' => $this->vaPrefix,
            'vaSuffix' => $this->vaSuffix,
            'merchantName' => $this->merchantName,
            'merchantAddress' => $this->merchantAddress,
            'serviceId' => $this->serviceId,
            'isCreateNonOtp' => $this->isCreateNonOtp,
            'code' => $this->code,
            'taxCode' => $this->taxCode,
            'softposUserName' => $this->softposUserName,
            'softposDeveloperId' => $this->softposDeveloperId,
            'softposTid' => $this->softposTid,
            'softposMid' => $this->softposMid,
            'authorizationCode' => $this->authorizationCode,
            'sessionLogin' => $this->sessionLogin,
            'isNotifyAccountNumber' => $this->isNotifyAccountNumber,
            'appType' => $this->appType,
            'linkType' => $this->linkType,
            'vaAccountNumber' => $this->vaAccountNumber,
            'acbUserId' => $this->acbUserId,
            'bankBin' => $this->bankBin,
            'bankName' => $this->bankName,
            'merchantId' => $this->merchantId,
            'redirectUrl' => $this->redirectUrl,
            'webhookUrl' => $this->webhookUrl,
        ];
    }
}

class OpenApiConfirmVAOuputDto implements \JsonSerializable
{
    public string $accountType = '';
    public string $bankName = '';
    public string $accountNumber = '';
    public string $vaAccountNumber = '';

    public function jsonSerialize(): array
    {
        return [
            'accountType' => $this->accountType,
            'bankName' => $this->bankName,
            'accountNumber' => $this->accountNumber,
            'vaAccountNumber' => $this->vaAccountNumber,
        ];
    }
}

class OpenApiBankConfirmVAInputDto implements \JsonSerializable
{
    public float $merchantId = 0.0;
    public string $confirmId = '';
    public string $otpNumber = '';
    public string $bankName = '';
    public string $bankBin = '';

    public function jsonSerialize(): array
    {
        return [
            'merchantId' => $this->merchantId,
            'confirmId' => $this->confirmId,
            'otpNumber' => $this->otpNumber,
            'bankName' => $this->bankName,
            'bankBin' => $this->bankBin,
        ];
    }
}

class BankDeleteVAOutputDto implements \JsonSerializable
{
    public ?string $confirmId = null;

    public function jsonSerialize(): array
    {
        return [
            'confirmId' => $this->confirmId,
        ];
    }
}

class OpenApiRegisterNotifyDto implements \JsonSerializable
{
    public ?float $merchantId = null;
    public string $vaAccountNumber = '';
    public string $bankBin = '';
    public ?string $bankName = null;

    public function jsonSerialize(): array
    {
        return [
            'merchantId' => $this->merchantId,
            'vaAccountNumber' => $this->vaAccountNumber,
            'bankBin' => $this->bankBin,
            'bankName' => $this->bankName,
        ];
    }
}

class OpenApiRefundDto implements \JsonSerializable
{
    public ?float $merchantId = null;
    public string $transactionCode = '';
    public string $bankBin = '';
    public ?string $bankName = null;

    public function jsonSerialize(): array
    {
        return [
            'merchantId' => $this->merchantId,
            'transactionCode' => $this->transactionCode,
            'bankBin' => $this->bankBin,
            'bankName' => $this->bankName,
        ];
    }
}

class OpenApiReadSecurityCodeDto implements \JsonSerializable
{
    public ?float $merchantId = null;
    public string $uuid = '';

    public function jsonSerialize(): array
    {
        return [
            'merchantId' => $this->merchantId,
            'uuid' => $this->uuid,
        ];
    }
}

class OpenApiReadPartnerSecurityCodeDto implements \JsonSerializable
{
    public ?float $merchantId = null;
    public string $uuid = '';
    public string $securityCode = '';

    public function jsonSerialize(): array
    {
        return [
            'merchantId' => $this->merchantId,
            'uuid' => $this->uuid,
            'securityCode' => $this->securityCode,
        ];
    }
}

class SendNotifyTingeeBoxDto implements \JsonSerializable
{
    public string $type = '';
    public string $uuid = '';

    public function jsonSerialize(): array
    {
        return [
            'type' => $this->type,
            'uuid' => $this->uuid,
        ];
    }
}

class OpenApiAddDeviceToShop implements \JsonSerializable
{
    public string $uuid = '';
    public string $securityCode = '';
    public string $appType = '';
    public ?float $masterMerchantId = null;
    public ?float $merchantId = null;
    public array $vaAccountNumbers = [];
    public ?array $shopIds = null;

    public function jsonSerialize(): array
    {
        return [
            'uuid' => $this->uuid,
            'securityCode' => $this->securityCode,
            'appType' => $this->appType,
            'masterMerchantId' => $this->masterMerchantId,
            'merchantId' => $this->merchantId,
            'vaAccountNumbers' => $this->vaAccountNumbers,
            'shopIds' => $this->shopIds,
        ];
    }
}

class OpenApiShopLinkToDeviceDto implements \JsonSerializable
{
    public string $shopName = '';
    public float $shopId = 0.0;
    public bool $isLinkToDevice = false;
    public string $fullAddress = '';
    public string $vaAccountNumber = '';

    public function jsonSerialize(): array
    {
        return [
            'shopName' => $this->shopName,
            'shopId' => $this->shopId,
            'isLinkToDevice' => $this->isLinkToDevice,
            'fullAddress' => $this->fullAddress,
            'vaAccountNumber' => $this->vaAccountNumber,
        ];
    }
}

class OpenApiUpdateShopDeviceLinkDto implements \JsonSerializable
{
    public string $uuid = '';
    public string $type = '';
    public string $appType = '';
    /** @var OpenApiShopLinkToDeviceDto[]|null */
    public array $shopsLinkToDeviceDtos = [];
    public ?float $merchantId = null;

    public function jsonSerialize(): array
    {
        return [
            'uuid' => $this->uuid,
            'type' => $this->type,
            'appType' => $this->appType,
            'shopsLinkToDeviceDtos' => $this->shopsLinkToDeviceDtos,
            'merchantId' => $this->merchantId,
        ];
    }
}

class BIDVOpenApiReadAmountDto implements \JsonSerializable
{
    public string $uuid = '';
    public string $transactionId = '';
    public float $amount = 0.0;
    public string $bankBin = '';
    public string $firstDisplayText = '';
    public string $secondDisplayText = '';
    public string $thirdDisplayText = '';
    public bool $playSound = false;

    public function jsonSerialize(): array
    {
        return [
            'uuid' => $this->uuid,
            'transactionId' => $this->transactionId,
            'amount' => $this->amount,
            'bankBin' => $this->bankBin,
            'firstDisplayText' => $this->firstDisplayText,
            'secondDisplayText' => $this->secondDisplayText,
            'thirdDisplayText' => $this->thirdDisplayText,
            'playSound' => $this->playSound,
        ];
    }
}

class OpenApiReadAmountDto implements \JsonSerializable
{
    public ?float $merchantId = null;
    public string $uuid = '';
    public string $transactionId = '';
    public float $amount = 0.0;
    public string $bankBin = '';
    public string $firstDisplayText = '';
    public string $secondDisplayText = '';
    public string $thirdDisplayText = '';
    public bool $playSound = false;

    public function jsonSerialize(): array
    {
        return [
            'merchantId' => $this->merchantId,
            'uuid' => $this->uuid,
            'transactionId' => $this->transactionId,
            'amount' => $this->amount,
            'bankBin' => $this->bankBin,
            'firstDisplayText' => $this->firstDisplayText,
            'secondDisplayText' => $this->secondDisplayText,
            'thirdDisplayText' => $this->thirdDisplayText,
            'playSound' => $this->playSound,
        ];
    }
}

class OpenApiShowQRCodeDto implements \JsonSerializable
{
    public ?float $merchantId = null;
    public string $uuid = '';
    public string $vaAccountNumber = '';
    public float $amount = 0.0;
    public string $qrCode = '';
    public string $bankBin = '';
    public ?string $bankName = null;
    public ?string $deviceType = null;
    public string $firstText = '';
    public string $secondText = '';
    public string $thirdText = '';
    public float $showTime = 0.0;
    public bool $isStaticQr = false;
    public bool $playSound = false;

    public function jsonSerialize(): array
    {
        return [
            'merchantId' => $this->merchantId,
            'uuid' => $this->uuid,
            'vaAccountNumber' => $this->vaAccountNumber,
            'amount' => $this->amount,
            'qrCode' => $this->qrCode,
            'bankBin' => $this->bankBin,
            'bankName' => $this->bankName,
            'deviceType' => $this->deviceType,
            'firstText' => $this->firstText,
            'secondText' => $this->secondText,
            'thirdText' => $this->thirdText,
            'showTime' => $this->showTime,
            'isStaticQr' => $this->isStaticQr,
            'playSound' => $this->playSound,
        ];
    }
}

class OpenApiGetDevicesLinkToShopOrVA implements \JsonSerializable
{
    public ?float $merchantId = null;
    public string $vaAccountNumber = '';
    public ?float $shopId = null;

    public function jsonSerialize(): array
    {
        return [
            'merchantId' => $this->merchantId,
            'vaAccountNumber' => $this->vaAccountNumber,
            'shopId' => $this->shopId,
        ];
    }
}

class DeviceInfoDto implements \JsonSerializable
{


    public function jsonSerialize(): array
    {
        return [

        ];
    }
}

class ShopInfoDto implements \JsonSerializable
{
    public string $name = '';
    public float $id = 0.0;

    public function jsonSerialize(): array
    {
        return [
            'name' => $this->name,
            'id' => $this->id,
        ];
    }
}

class DeviceDto implements \JsonSerializable
{
    public ?float $id = null;
    public string $creationTime = '';
    public ?float $creatorUserId = null;
    public string $lastModificationTime = '';
    public ?float $lastModifierUserId = null;
    public ?float $deleterUserId = null;
    public string $type = '';
    public string $uuid = '';
    public string $name = '';
    public ?string $system = null;
    public ?string $systemVersion = null;
    public ?float $merchantId = null;
    public ?float $assignedAgentId = null;
    public ?string $merchantPhoneNumber = null;
    public ?string $employeeName = null;
    public ?string $firebaseToken = null;
    public string $status = '';
    public ?DeviceInfoDto $deviceInfoDto = null;
    public ?string $useDate = null;
    public ?string $securityCode = null;
    /** @var BankNameEnum[]|null */
    public array $selectedBankNames = [];
    public ?string $userReferralAncestorIds = null;
    public ?float $userReferralLevel = null;
    public ?string $deviceDistributorAncestorIds = null;
    public ?float $deviceDistributorLevel = null;
    public float $masterMerchantId = 0.0;
    public ?string $merchantName = null;
    /** @var ShopInfoDto[]|null */
    public ?array $shopDtos = null;
    public ?string $agentName = null;
    public ?float $agentId = null;

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'creationTime' => $this->creationTime,
            'creatorUserId' => $this->creatorUserId,
            'lastModificationTime' => $this->lastModificationTime,
            'lastModifierUserId' => $this->lastModifierUserId,
            'deleterUserId' => $this->deleterUserId,
            'type' => $this->type,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'system' => $this->system,
            'systemVersion' => $this->systemVersion,
            'merchantId' => $this->merchantId,
            'assignedAgentId' => $this->assignedAgentId,
            'merchantPhoneNumber' => $this->merchantPhoneNumber,
            'employeeName' => $this->employeeName,
            'firebaseToken' => $this->firebaseToken,
            'status' => $this->status,
            'deviceInfoDto' => $this->deviceInfoDto,
            'useDate' => $this->useDate,
            'securityCode' => $this->securityCode,
            'selectedBankNames' => $this->selectedBankNames,
            'userReferralAncestorIds' => $this->userReferralAncestorIds,
            'userReferralLevel' => $this->userReferralLevel,
            'deviceDistributorAncestorIds' => $this->deviceDistributorAncestorIds,
            'deviceDistributorLevel' => $this->deviceDistributorLevel,
            'masterMerchantId' => $this->masterMerchantId,
            'merchantName' => $this->merchantName,
            'shopDtos' => $this->shopDtos,
            'agentName' => $this->agentName,
            'agentId' => $this->agentId,
        ];
    }
}

class OpenApiGetPagingDeviceInputDto implements \JsonSerializable
{
    public ?string $filter = null;
    public ?string $sorting = null;
    public float $skipCount = 0.0;
    public float $maxResultCount = 0.0;
    public float $merchantId = 0.0;
    public ?string $type = null;

    public function jsonSerialize(): array
    {
        return [
            'filter' => $this->filter,
            'sorting' => $this->sorting,
            'skipCount' => $this->skipCount,
            'maxResultCount' => $this->maxResultCount,
            'merchantId' => $this->merchantId,
            'type' => $this->type,
        ];
    }
}

class String implements \JsonSerializable
{


    public function jsonSerialize(): array
    {
        return [

        ];
    }
}

class OpenApiVerifyReferralCodeResponseDto implements \JsonSerializable
{
    public bool $isValid = false;
    public ?bool $canConnectAllBanks = null;
    public ?array $bankBins = null;

    public function jsonSerialize(): array
    {
        return [
            'isValid' => $this->isValid,
            'canConnectAllBanks' => $this->canConnectAllBanks,
            'bankBins' => $this->bankBins,
        ];
    }
}

class OpenApiCreateOrUpdateShopOutputDto implements \JsonSerializable
{
    public float $shopId = 0.0;

    public function jsonSerialize(): array
    {
        return [
            'shopId' => $this->shopId,
        ];
    }
}

class SendNotifyTelegramDto implements \JsonSerializable
{
    public float $chatId = 0.0;

    public function jsonSerialize(): array
    {
        return [
            'chatId' => $this->chatId,
        ];
    }
}

class SendNotifyLarkDto implements \JsonSerializable
{
    public string $urlWebhook = '';

    public function jsonSerialize(): array
    {
        return [
            'urlWebhook' => $this->urlWebhook,
        ];
    }
}

class SendNotifyZaloDto implements \JsonSerializable
{
    public string $type = '';
    public string $name = '';

    public function jsonSerialize(): array
    {
        return [
            'type' => $this->type,
            'name' => $this->name,
        ];
    }
}

class SendNotifyPlatformDto implements \JsonSerializable
{
    /** @var SendNotifyTelegramDto[]|null */
    public array $telegramDtos = [];
    /** @var SendNotifyLarkDto[]|null */
    public array $larkDtos = [];
    /** @var SendNotifyZaloDto[]|null */
    public array $zaloDtos = [];
    /** @var SendNotifyTingeeBoxDto[]|null */
    public array $tingeeBoxDtos = [];

    public function jsonSerialize(): array
    {
        return [
            'telegramDtos' => $this->telegramDtos,
            'larkDtos' => $this->larkDtos,
            'zaloDtos' => $this->zaloDtos,
            'tingeeBoxDtos' => $this->tingeeBoxDtos,
        ];
    }
}

class OpenApiCreateOrUpdateShopDto implements \JsonSerializable
{
    public ?float $id = null;
    public string $name = '';
    public ?string $email = null;
    public string $phoneNumber = '';
    public ?string $provinceId = null;
    public ?string $districtId = null;
    public ?string $communeId = null;
    public ?string $address = null;
    public ?string $fullAddress = null;
    public ?SendNotifyPlatformDto $sendNotifyPlatformDto = null;
    public bool $isActive = false;
    public ?string $status = null;
    public ?string $userReferralAncestorIds = null;
    public ?float $userReferralLevel = null;
    public ?string $deviceDistributorAncestorMap = null;
    public ?float $merchantId = null;

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber,
            'provinceId' => $this->provinceId,
            'districtId' => $this->districtId,
            'communeId' => $this->communeId,
            'address' => $this->address,
            'fullAddress' => $this->fullAddress,
            'sendNotifyPlatformDto' => $this->sendNotifyPlatformDto,
            'isActive' => $this->isActive,
            'status' => $this->status,
            'userReferralAncestorIds' => $this->userReferralAncestorIds,
            'userReferralLevel' => $this->userReferralLevel,
            'deviceDistributorAncestorMap' => $this->deviceDistributorAncestorMap,
            'merchantId' => $this->merchantId,
        ];
    }
}

class OpenApiGetShopPagedOuputDto implements \JsonSerializable
{
    public float $id = 0.0;
    public bool $isActive = false;
    public float $name = 0.0;
    public ?string $address = null;

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'isActive' => $this->isActive,
            'name' => $this->name,
            'address' => $this->address,
        ];
    }
}

class OpenApiGetShopPagedInputDto implements \JsonSerializable
{
    public ?string $filter = null;
    public ?string $sorting = null;
    public float $skipCount = 0.0;
    public float $maxResultCount = 0.0;
    public ?float $merchantId = null;

    public function jsonSerialize(): array
    {
        return [
            'filter' => $this->filter,
            'sorting' => $this->sorting,
            'skipCount' => $this->skipCount,
            'maxResultCount' => $this->maxResultCount,
            'merchantId' => $this->merchantId,
        ];
    }
}

class GoogleModuleConfigDto implements \JsonSerializable
{
    public ?bool $enable = null;
    public ?float $position = null;
    public ?string $placeId = null;
    public ?string $title = null;

    public function jsonSerialize(): array
    {
        return [
            'enable' => $this->enable,
            'position' => $this->position,
            'placeId' => $this->placeId,
            'title' => $this->title,
        ];
    }
}

class HotlineModuleConfigDto implements \JsonSerializable
{
    public ?bool $enable = null;
    public ?float $position = null;
    public ?string $phoneNumber = null;
    public ?string $title = null;

    public function jsonSerialize(): array
    {
        return [
            'enable' => $this->enable,
            'position' => $this->position,
            'phoneNumber' => $this->phoneNumber,
            'title' => $this->title,
        ];
    }
}

class EmailModuleConfigDto implements \JsonSerializable
{
    public ?bool $enable = null;
    public ?float $position = null;
    public ?string $email = null;
    public ?string $title = null;

    public function jsonSerialize(): array
    {
        return [
            'enable' => $this->enable,
            'position' => $this->position,
            'email' => $this->email,
            'title' => $this->title,
        ];
    }
}

class ZaloModuleConfigDto implements \JsonSerializable
{
    public ?bool $enable = null;
    public ?float $position = null;
    public ?string $zaloId = null;
    public ?string $title = null;

    public function jsonSerialize(): array
    {
        return [
            'enable' => $this->enable,
            'position' => $this->position,
            'zaloId' => $this->zaloId,
            'title' => $this->title,
        ];
    }
}

class MessengerModuleConfigDto implements \JsonSerializable
{
    public ?bool $enable = null;
    public ?float $position = null;
    public ?string $pageId = null;
    public ?string $title = null;

    public function jsonSerialize(): array
    {
        return [
            'enable' => $this->enable,
            'position' => $this->position,
            'pageId' => $this->pageId,
            'title' => $this->title,
        ];
    }
}

class PaymentModuleConfigDto implements \JsonSerializable
{
    public ?bool $enable = null;
    public ?float $position = null;
    public ?array $accountNumberIds = null;
    public ?string $title = null;
    public ?string $description = null;

    public function jsonSerialize(): array
    {
        return [
            'enable' => $this->enable,
            'position' => $this->position,
            'accountNumberIds' => $this->accountNumberIds,
            'title' => $this->title,
            'description' => $this->description,
        ];
    }
}

class InvoiceModuleConfigDto implements \JsonSerializable
{
    public ?bool $enable = null;
    public ?float $position = null;
    public ?string $title = null;
    public ?string $description = null;
    public ?string $webhook = null;

    public function jsonSerialize(): array
    {
        return [
            'enable' => $this->enable,
            'position' => $this->position,
            'title' => $this->title,
            'description' => $this->description,
            'webhook' => $this->webhook,
        ];
    }
}

class ShopNfcModuleItemDto implements \JsonSerializable
{
    public ?GoogleModuleConfigDto $googleConfig = null;
    public ?HotlineModuleConfigDto $hotlineConfig = null;
    public ?EmailModuleConfigDto $emailConfig = null;
    public ?ZaloModuleConfigDto $zaloConfig = null;
    public ?MessengerModuleConfigDto $messengerConfig = null;
    public ?PaymentModuleConfigDto $paymentConfig = null;
    public ?InvoiceModuleConfigDto $invoiceConfig = null;

    public function jsonSerialize(): array
    {
        return [
            'googleConfig' => $this->googleConfig,
            'hotlineConfig' => $this->hotlineConfig,
            'emailConfig' => $this->emailConfig,
            'zaloConfig' => $this->zaloConfig,
            'messengerConfig' => $this->messengerConfig,
            'paymentConfig' => $this->paymentConfig,
            'invoiceConfig' => $this->invoiceConfig,
        ];
    }
}

class OpenApiShopNFCConfigDto implements \JsonSerializable
{
    public ?float $merchantId = null;
    public float $shopId = 0.0;
    public string $displayName = '';
    public string $color = '';
    public string $address = '';
    public string $title = '';
    public string $description = '';
    public string $logo = '';
    public string $avatar = '';
    public bool $isActive = false;
    public ?ShopNfcModuleItemDto $modules = null;

    public function jsonSerialize(): array
    {
        return [
            'merchantId' => $this->merchantId,
            'shopId' => $this->shopId,
            'displayName' => $this->displayName,
            'color' => $this->color,
            'address' => $this->address,
            'title' => $this->title,
            'description' => $this->description,
            'logo' => $this->logo,
            'avatar' => $this->avatar,
            'isActive' => $this->isActive,
            'modules' => $this->modules,
        ];
    }
}

class OpenApiLinkOrUnlinkNfcShopDto implements \JsonSerializable
{
    public string $nfcId = '';
    public float $shopId = 0.0;
    public bool $isLink = false;
    public ?float $merchantId = null;

    public function jsonSerialize(): array
    {
        return [
            'nfcId' => $this->nfcId,
            'shopId' => $this->shopId,
            'isLink' => $this->isLink,
            'merchantId' => $this->merchantId,
        ];
    }
}

class OpenApiDeepLinkDto implements \JsonSerializable
{
    public ?float $merchantId = null;
    public string $type = '';
    public string $qrCode = '';
    public string $redirectUrl = '';
    public string $callbackUrl = '';
    public string $bankBin = '';
    public string $destinationBankBin = '';
    public string $accountName = '';
    public string $accountNumber = '';
    public float $amount = 0.0;
    public string $content = '';
    public string $billNumber = '';

    public function jsonSerialize(): array
    {
        return [
            'merchantId' => $this->merchantId,
            'type' => $this->type,
            'qrCode' => $this->qrCode,
            'redirectUrl' => $this->redirectUrl,
            'callbackUrl' => $this->callbackUrl,
            'bankBin' => $this->bankBin,
            'destinationBankBin' => $this->destinationBankBin,
            'accountName' => $this->accountName,
            'accountNumber' => $this->accountNumber,
            'amount' => $this->amount,
            'content' => $this->content,
            'billNumber' => $this->billNumber,
        ];
    }
}

class OCBInfoDto implements \JsonSerializable
{
    public ?string $vaPrefix = null;
    public ?string $identificationNumber = null;
    public ?string $accountName = null;
    public ?string $accountNumber = null;
    public ?string $registerDate = null;
    public ?string $vaAccountNumber = null;
    public ?string $merchantName = null;
    public ?string $merchantAddress = null;
    public ?string $mobilePhone = null;
    public ?string $email = null;

    public function jsonSerialize(): array
    {
        return [
            'vaPrefix' => $this->vaPrefix,
            'identificationNumber' => $this->identificationNumber,
            'accountName' => $this->accountName,
            'accountNumber' => $this->accountNumber,
            'registerDate' => $this->registerDate,
            'vaAccountNumber' => $this->vaAccountNumber,
            'merchantName' => $this->merchantName,
            'merchantAddress' => $this->merchantAddress,
            'mobilePhone' => $this->mobilePhone,
            'email' => $this->email,
        ];
    }
}

class TPBInfoDto implements \JsonSerializable
{
    public ?string $accountName = null;

    public function jsonSerialize(): array
    {
        return [
            'accountName' => $this->accountName,
        ];
    }
}

class BIDVInfoDto implements \JsonSerializable
{
    public ?string $vaPrefix = null;
    public ?string $merchantName = null;
    public ?string $merchantAddress = null;
    public ?string $accountNo = null;
    public ?string $accountName = null;
    public ?string $identity = null;
    public ?string $mobile = null;
    public ?string $email = null;

    public function jsonSerialize(): array
    {
        return [
            'vaPrefix' => $this->vaPrefix,
            'merchantName' => $this->merchantName,
            'merchantAddress' => $this->merchantAddress,
            'accountNo' => $this->accountNo,
            'accountName' => $this->accountName,
            'identity' => $this->identity,
            'mobile' => $this->mobile,
            'email' => $this->email,
        ];
    }
}

class MBBInfoDto implements \JsonSerializable
{
    public ?string $merchantName = null;
    public ?string $merchantAddress = null;
    public ?string $accountNumber = null;
    public ?string $accountName = null;
    public ?string $identity = null;
    public ?string $mobile = null;
    public ?string $email = null;

    public function jsonSerialize(): array
    {
        return [
            'merchantName' => $this->merchantName,
            'merchantAddress' => $this->merchantAddress,
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'identity' => $this->identity,
            'mobile' => $this->mobile,
            'email' => $this->email,
        ];
    }
}

class ACBInfoDto implements \JsonSerializable
{
    public ?string $vaPrefix = null;
    public ?string $merchantName = null;
    public ?string $merchantAddress = null;
    public ?string $accountNumber = null;
    public ?string $accountName = null;
    public ?string $mobile = null;
    public ?string $email = null;
    public ?string $acbUserId = null;

    public function jsonSerialize(): array
    {
        return [
            'vaPrefix' => $this->vaPrefix,
            'merchantName' => $this->merchantName,
            'merchantAddress' => $this->merchantAddress,
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'acbUserId' => $this->acbUserId,
        ];
    }
}

class VPBInfoDto implements \JsonSerializable
{
    public ?string $accountNumber = null;
    public ?string $accountName = null;
    public ?string $identity = null;
    public ?string $registerId = null;
    public ?string $bankRegisterId = null;
    public ?bool $isWaitingForApproveDelete = null;
    public ?string $softposUserName = null;
    public ?string $softposDeveloperId = null;
    public ?string $softposTid = null;
    public ?string $softposMid = null;

    public function jsonSerialize(): array
    {
        return [
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'identity' => $this->identity,
            'registerId' => $this->registerId,
            'bankRegisterId' => $this->bankRegisterId,
            'isWaitingForApproveDelete' => $this->isWaitingForApproveDelete,
            'softposUserName' => $this->softposUserName,
            'softposDeveloperId' => $this->softposDeveloperId,
            'softposTid' => $this->softposTid,
            'softposMid' => $this->softposMid,
        ];
    }
}

class ShinhanInfoDto implements \JsonSerializable
{
    public ?string $vaPrefix = null;
    public ?string $accountNumber = null;
    public ?string $merchantName = null;

    public function jsonSerialize(): array
    {
        return [
            'vaPrefix' => $this->vaPrefix,
            'accountNumber' => $this->accountNumber,
            'merchantName' => $this->merchantName,
        ];
    }
}

class PGBInfoDto implements \JsonSerializable
{
    public ?string $accountName = null;
    public ?string $accountNumber = null;
    public ?string $identity = null;
    public ?string $mobile = null;

    public function jsonSerialize(): array
    {
        return [
            'accountName' => $this->accountName,
            'accountNumber' => $this->accountNumber,
            'identity' => $this->identity,
            'mobile' => $this->mobile,
        ];
    }
}

class VIBInfoDto implements \JsonSerializable
{
    public ?string $vaPrefix = null;
    public ?string $merchantName = null;
    public ?string $accountNumber = null;
    public ?string $accountName = null;
    public ?string $identity = null;
    public ?string $mobile = null;
    public ?string $email = null;
    public ?string $contractId = null;
    public ?string $custId = null;

    public function jsonSerialize(): array
    {
        return [
            'vaPrefix' => $this->vaPrefix,
            'merchantName' => $this->merchantName,
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'identity' => $this->identity,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'contractId' => $this->contractId,
            'custId' => $this->custId,
        ];
    }
}

class CTGInfoDto implements \JsonSerializable
{
    public ?string $vaPrefix = null;
    public ?string $merchantName = null;
    public ?string $accountNumber = null;
    public ?string $accountName = null;
    public ?string $identity = null;
    public ?string $mobile = null;

    public function jsonSerialize(): array
    {
        return [
            'vaPrefix' => $this->vaPrefix,
            'merchantName' => $this->merchantName,
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'identity' => $this->identity,
            'mobile' => $this->mobile,
        ];
    }
}

class STBInfoDto implements \JsonSerializable
{
    public ?string $merchantName = null;
    public ?string $accountNumber = null;
    public ?string $accountName = null;
    public ?string $identity = null;
    public ?string $mobile = null;
    public ?string $merchantId = null;
    public ?string $storeId = null;

    public function jsonSerialize(): array
    {
        return [
            'merchantName' => $this->merchantName,
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'identity' => $this->identity,
            'mobile' => $this->mobile,
            'merchantId' => $this->merchantId,
            'storeId' => $this->storeId,
        ];
    }
}

class AgribankInfoDto implements \JsonSerializable
{
    public ?string $accountNumber = null;
    public ?string $accountName = null;
    public ?string $identity = null;
    public ?string $mobile = null;
    public ?string $taxCode = null;
    public ?string $agribankVaId = null;

    public function jsonSerialize(): array
    {
        return [
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'identity' => $this->identity,
            'mobile' => $this->mobile,
            'taxCode' => $this->taxCode,
            'agribankVaId' => $this->agribankVaId,
        ];
    }
}

class VCBBaasDto implements \JsonSerializable
{
    public ?string $requestId = null;
    public ?string $redirectUrl = null;
    public ?string $webhookUrl = null;

    public function jsonSerialize(): array
    {
        return [
            'requestId' => $this->requestId,
            'redirectUrl' => $this->redirectUrl,
            'webhookUrl' => $this->webhookUrl,
        ];
    }
}

class VCBInfoDto implements \JsonSerializable
{
    public ?string $accountName = null;
    public ?string $accountNumber = null;
    public ?string $mobile = null;
    public ?VCBBaasDto $baasDto = null;

    public function jsonSerialize(): array
    {
        return [
            'accountName' => $this->accountName,
            'accountNumber' => $this->accountNumber,
            'mobile' => $this->mobile,
            'baasDto' => $this->baasDto,
        ];
    }
}

class COBInfoDto implements \JsonSerializable
{
    public ?string $accountName = null;
    public ?string $accountNumber = null;
    public ?string $identity = null;
    public ?string $mobile = null;
    public ?string $merchantName = null;

    public function jsonSerialize(): array
    {
        return [
            'accountName' => $this->accountName,
            'accountNumber' => $this->accountNumber,
            'identity' => $this->identity,
            'mobile' => $this->mobile,
            'merchantName' => $this->merchantName,
        ];
    }
}

class BankInfoDto implements \JsonSerializable
{
    public ?OCBInfoDto $ocbInfoDto = null;
    public ?TPBInfoDto $tpbInfoDto = null;
    public ?BIDVInfoDto $bidvInfoDto = null;
    public ?MBBInfoDto $mbbInfoDto = null;
    public ?ACBInfoDto $acbInfoDto = null;
    public ?VPBInfoDto $vpbInfoDto = null;
    public ?ShinhanInfoDto $shinhanInfoDto = null;
    public ?PGBInfoDto $pgbInfoDto = null;
    public ?VIBInfoDto $vibInfoDto = null;
    public ?CTGInfoDto $ctgInfoDto = null;
    public ?STBInfoDto $stbInfoDto = null;
    public ?AgribankInfoDto $agribankInfoDto = null;
    public ?VCBInfoDto $vcbInfoDto = null;
    public ?COBInfoDto $cobInfoDto = null;

    public function jsonSerialize(): array
    {
        return [
            'ocbInfoDto' => $this->ocbInfoDto,
            'tpbInfoDto' => $this->tpbInfoDto,
            'bidvInfoDto' => $this->bidvInfoDto,
            'mbbInfoDto' => $this->mbbInfoDto,
            'acbInfoDto' => $this->acbInfoDto,
            'vpbInfoDto' => $this->vpbInfoDto,
            'shinhanInfoDto' => $this->shinhanInfoDto,
            'pgbInfoDto' => $this->pgbInfoDto,
            'vibInfoDto' => $this->vibInfoDto,
            'ctgInfoDto' => $this->ctgInfoDto,
            'stbInfoDto' => $this->stbInfoDto,
            'agribankInfoDto' => $this->agribankInfoDto,
            'vcbInfoDto' => $this->vcbInfoDto,
            'cobInfoDto' => $this->cobInfoDto,
        ];
    }
}

class V2AccountNumberDDLDto implements \JsonSerializable
{
    public float $id = 0.0;
    public string $name = '';
    public float $merchantId = 0.0;
    public string $bankBin = '';
    public string $bankName = '';
    public string $accountNumber = '';
    public ?string $vaAccountNumber = null;
    public ?string $realVANumber = null;
    public ?BankInfoDto $bankInfoDto = null;
    public float $shopId = 0.0;
    public string $shopName = '';

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'merchantId' => $this->merchantId,
            'bankBin' => $this->bankBin,
            'bankName' => $this->bankName,
            'accountNumber' => $this->accountNumber,
            'vaAccountNumber' => $this->vaAccountNumber,
            'realVANumber' => $this->realVANumber,
            'bankInfoDto' => $this->bankInfoDto,
            'shopId' => $this->shopId,
            'shopName' => $this->shopName,
        ];
    }
}

class OpenApiAccountNumberDDLPagedInputDto implements \JsonSerializable
{
    public ?string $filter = null;
    public ?string $sorting = null;
    public float $skipCount = 0.0;
    public float $maxResultCount = 0.0;
    public ?float $merchantId = null;
    public ?array $merchantAccountNumberIds = null;
    public ?array $shopIds = null;
    public ?array $realVANumbers = null;
    public ?bool $isGetMerchantCashAccountsNumber = null;
    public array $bankBins = [];
    /** @var BankNameEnum[]|null */
    public ?array $bankNames = null;

    public function jsonSerialize(): array
    {
        return [
            'filter' => $this->filter,
            'sorting' => $this->sorting,
            'skipCount' => $this->skipCount,
            'maxResultCount' => $this->maxResultCount,
            'merchantId' => $this->merchantId,
            'merchantAccountNumberIds' => $this->merchantAccountNumberIds,
            'shopIds' => $this->shopIds,
            'realVANumbers' => $this->realVANumbers,
            'isGetMerchantCashAccountsNumber' => $this->isGetMerchantCashAccountsNumber,
            'bankBins' => $this->bankBins,
            'bankNames' => $this->bankNames,
        ];
    }
}

class OpenApiTransactionPagedInputDto implements \JsonSerializable
{
    public ?string $filter = null;
    public ?string $sorting = null;
    public float $skipCount = 0.0;
    public float $maxResultCount = 0.0;
    public float $merchantId = 0.0;
    public array $shopIds = [];
    public array $vaAccountNumbers = [];
    public ?string $bankBin = null;
    public string $billId = '';
    public ?string $startTime = null;
    public ?string $endTime = null;

    public function jsonSerialize(): array
    {
        return [
            'filter' => $this->filter,
            'sorting' => $this->sorting,
            'skipCount' => $this->skipCount,
            'maxResultCount' => $this->maxResultCount,
            'merchantId' => $this->merchantId,
            'shopIds' => $this->shopIds,
            'vaAccountNumbers' => $this->vaAccountNumbers,
            'bankBin' => $this->bankBin,
            'billId' => $this->billId,
            'startTime' => $this->startTime,
            'endTime' => $this->endTime,
        ];
    }
}

class MerchantBankConfigPagedOutputDto implements \JsonSerializable
{
    public float $id = 0.0;
    public string $creationTime = '';
    public ?float $creatorUserId = null;
    public string $lastModificationTime = '';
    public ?float $lastModifierUserId = null;
    public ?float $deleterUserId = null;
    public float $merchantId = 0.0;
    public string $accountType = '';
    public $configDto = null;
    public string $bankBin = '';
    public ?string $bankName = null;

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'creationTime' => $this->creationTime,
            'creatorUserId' => $this->creatorUserId,
            'lastModificationTime' => $this->lastModificationTime,
            'lastModifierUserId' => $this->lastModifierUserId,
            'deleterUserId' => $this->deleterUserId,
            'merchantId' => $this->merchantId,
            'accountType' => $this->accountType,
            'configDto' => $this->configDto,
            'bankBin' => $this->bankBin,
            'bankName' => $this->bankName,
        ];
    }
}

class OpenApiMerchantBankConfigPagedInputDto implements \JsonSerializable
{
    public ?string $filter = null;
    public ?string $sorting = null;
    public float $skipCount = 0.0;
    public float $maxResultCount = 0.0;
    public string $accountType = '';
    public float $merchantId = 0.0;
    public string $bankBin = '';
    public ?string $bankName = null;

    public function jsonSerialize(): array
    {
        return [
            'filter' => $this->filter,
            'sorting' => $this->sorting,
            'skipCount' => $this->skipCount,
            'maxResultCount' => $this->maxResultCount,
            'accountType' => $this->accountType,
            'merchantId' => $this->merchantId,
            'bankBin' => $this->bankBin,
            'bankName' => $this->bankName,
        ];
    }
}

class Number implements \JsonSerializable
{


    public function jsonSerialize(): array
    {
        return [

        ];
    }
}

class BIDVConfigDto implements \JsonSerializable
{
    public string $vaPrefix = '';
    public string $bankPartnerId = '';
    public string $accountNumber = '';
    public string $accountName = '';

    public function jsonSerialize(): array
    {
        return [
            'vaPrefix' => $this->vaPrefix,
            'bankPartnerId' => $this->bankPartnerId,
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
        ];
    }
}

class CTGConfigDto implements \JsonSerializable
{
    public string $accountNumber = '';
    public string $accountName = '';
    public string $vaPrefix = '';

    public function jsonSerialize(): array
    {
        return [
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'vaPrefix' => $this->vaPrefix,
        ];
    }
}

class ACBConfigBusinessDto implements \JsonSerializable
{
    public string $accountNumber = '';
    public string $accountName = '';
    public string $vaPrefix = '';
    public string $mobile = '';
    public string $acbUserId = '';

    public function jsonSerialize(): array
    {
        return [
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'vaPrefix' => $this->vaPrefix,
            'mobile' => $this->mobile,
            'acbUserId' => $this->acbUserId,
        ];
    }
}

class OpenApiBankCreateOrUpdateConfigDto implements \JsonSerializable
{
    public ?BIDVConfigDto $bidvConfigDto = null;
    public ?CTGConfigDto $ctgConfigDto = null;
    public ?ACBConfigBusinessDto $acbConfigDto = null;
    public string $accountType = '';
    public float $id = 0.0;
    public ?string $otpNumber = null;
    public ?string $confirmId = null;
    public string $bankBin = '';
    public ?string $bankName = null;
    public ?float $merchantId = null;

    public function jsonSerialize(): array
    {
        return [
            'bidvConfigDto' => $this->bidvConfigDto,
            'ctgConfigDto' => $this->ctgConfigDto,
            'acbConfigDto' => $this->acbConfigDto,
            'accountType' => $this->accountType,
            'id' => $this->id,
            'otpNumber' => $this->otpNumber,
            'confirmId' => $this->confirmId,
            'bankBin' => $this->bankBin,
            'bankName' => $this->bankName,
            'merchantId' => $this->merchantId,
        ];
    }
}

class OpenApiDeleteConfigDto implements \JsonSerializable
{
    public ?string $otpNumber = null;
    public ?string $confirmId = null;
    public float $id = 0.0;
    public ?float $merchantId = null;

    public function jsonSerialize(): array
    {
        return [
            'otpNumber' => $this->otpNumber,
            'confirmId' => $this->confirmId,
            'id' => $this->id,
            'merchantId' => $this->merchantId,
        ];
    }
}

class OpenApiCreateBankVAOutputDto implements \JsonSerializable
{
    public ?string $confirmId = null;

    public function jsonSerialize(): array
    {
        return [
            'confirmId' => $this->confirmId,
        ];
    }
}

class OpenApiConfigAccountBusinessDto implements \JsonSerializable
{
    public ?string $bankName = null;
    public string $accountNumber = '';
    public string $accountName = '';
    public string $mobile = '';
    public ?string $vaPrefix = null;
    public float $merchantId = 0.0;
    public string $acbUserId = '';
    public string $bankBin = '';

    public function jsonSerialize(): array
    {
        return [
            'bankName' => $this->bankName,
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'mobile' => $this->mobile,
            'vaPrefix' => $this->vaPrefix,
            'merchantId' => $this->merchantId,
            'acbUserId' => $this->acbUserId,
            'bankBin' => $this->bankBin,
        ];
    }
}

class OpenApiDeleteConfigBusinessDto implements \JsonSerializable
{
    public string $accountType = '';
    public ?ACBConfigBusinessDto $configRemove = null;
    public ?float $merchantId = null;
    public string $bankBin = '';
    public ?string $bankName = null;

    public function jsonSerialize(): array
    {
        return [
            'accountType' => $this->accountType,
            'configRemove' => $this->configRemove,
            'merchantId' => $this->merchantId,
            'bankBin' => $this->bankBin,
            'bankName' => $this->bankName,
        ];
    }
}

class EventUrlItemDto implements \JsonSerializable
{
    public string $url = '';
    public string $type = '';
    public ?array $ids = null;

    public function jsonSerialize(): array
    {
        return [
            'url' => $this->url,
            'type' => $this->type,
            'ids' => $this->ids,
        ];
    }
}

class OpenApiCreateMerchantDto implements \JsonSerializable
{
    public ?float $id = null;
    public ?string $code = null;
    public string $name = '';
    public ?string $email = null;
    public string $phoneNumber = '';
    public ?string $website = null;
    public ?array $businessSectorIds = null;
    public ?string $provinceId = null;
    public ?string $districtId = null;
    public ?string $communeId = null;
    public ?string $address = null;
    public ?string $fullAddress = null;
    public ?string $eventUrl = null;
    /** @var EventUrlItemDto[]|null */
    public ?array $eventUrls = null;
    public ?bool $isLockEvent = null;
    public ?bool $isOrganizationUnit = null;
    public ?string $referralCode = null;
    public ?string $userReferralAncestorIds = null;
    public ?float $userReferralLevel = null;
    public ?string $deviceDistributorAncestorMap = null;
    public ?bool $isMasterMerchant = null;
    public string $password = '';
    public string $appType = '';
    public ?bool $isMultipleRole = null;
    public ?float $userReferrerId = null;

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber,
            'website' => $this->website,
            'businessSectorIds' => $this->businessSectorIds,
            'provinceId' => $this->provinceId,
            'districtId' => $this->districtId,
            'communeId' => $this->communeId,
            'address' => $this->address,
            'fullAddress' => $this->fullAddress,
            'eventUrl' => $this->eventUrl,
            'eventUrls' => $this->eventUrls,
            'isLockEvent' => $this->isLockEvent,
            'isOrganizationUnit' => $this->isOrganizationUnit,
            'referralCode' => $this->referralCode,
            'userReferralAncestorIds' => $this->userReferralAncestorIds,
            'userReferralLevel' => $this->userReferralLevel,
            'deviceDistributorAncestorMap' => $this->deviceDistributorAncestorMap,
            'isMasterMerchant' => $this->isMasterMerchant,
            'password' => $this->password,
            'appType' => $this->appType,
            'isMultipleRole' => $this->isMultipleRole,
            'userReferrerId' => $this->userReferrerId,
        ];
    }
}

class FileUploadDto implements \JsonSerializable
{
    public string $fileLogId = '';
    public string $path = '';

    public function jsonSerialize(): array
    {
        return [
            'fileLogId' => $this->fileLogId,
            'path' => $this->path,
        ];
    }
}

class OCBConfigDto implements \JsonSerializable
{
    public string $clientId = '';
    public ?string $clientSecret = null;
    public ?FileUploadDto $pathCertKey = null;
    public ?FileUploadDto $pathPrivateKey = null;
    public string $userName = '';
    public ?string $password = null;
    public ?string $vaPrefix = null;
    public ?string $vaPrefixForDynamicQR = null;
    public ?array $accountNumbers = null;

    public function jsonSerialize(): array
    {
        return [
            'clientId' => $this->clientId,
            'clientSecret' => $this->clientSecret,
            'pathCertKey' => $this->pathCertKey,
            'pathPrivateKey' => $this->pathPrivateKey,
            'userName' => $this->userName,
            'password' => $this->password,
            'vaPrefix' => $this->vaPrefix,
            'vaPrefixForDynamicQR' => $this->vaPrefixForDynamicQR,
            'accountNumbers' => $this->accountNumbers,
        ];
    }
}

class MBBConfigDto implements \JsonSerializable
{
    public string $accountNumber = '';
    public string $accountName = '';
    public string $identity = '';
    public string $mobile = '';

    public function jsonSerialize(): array
    {
        return [
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'identity' => $this->identity,
            'mobile' => $this->mobile,
        ];
    }
}

class ShinhanConfigDto implements \JsonSerializable
{
    public string $vaPrefix = '';
    public string $clientId = '';
    public ?string $clientSecret = null;
    public ?FileUploadDto $pathPublicKey = null;
    public ?FileUploadDto $pathPrivateKey = null;
    public string $accountNumber = '';
    public string $accountName = '';

    public function jsonSerialize(): array
    {
        return [
            'vaPrefix' => $this->vaPrefix,
            'clientId' => $this->clientId,
            'clientSecret' => $this->clientSecret,
            'pathPublicKey' => $this->pathPublicKey,
            'pathPrivateKey' => $this->pathPrivateKey,
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
        ];
    }
}

class VIBConfigDto implements \JsonSerializable
{
    public string $vaPrefix = '';
    public ?FileUploadDto $pathPublicKey = null;
    public ?FileUploadDto $pathPrivateKey = null;
    public string $basicAuthToken = '';
    public string $cif = '';
    public string $clientId = '';
    public string $clientSecret = '';
    public string $accountNumber = '';
    public float $vaCharactersNumber = 0.0;

    public function jsonSerialize(): array
    {
        return [
            'vaPrefix' => $this->vaPrefix,
            'pathPublicKey' => $this->pathPublicKey,
            'pathPrivateKey' => $this->pathPrivateKey,
            'basicAuthToken' => $this->basicAuthToken,
            'cif' => $this->cif,
            'clientId' => $this->clientId,
            'clientSecret' => $this->clientSecret,
            'accountNumber' => $this->accountNumber,
            'vaCharactersNumber' => $this->vaCharactersNumber,
        ];
    }
}

class ACBConfigDto implements \JsonSerializable
{
    /** @var ACBConfigBusinessDto[]|null */
    public ?array $businessAccounts = null;
    /** @var ACBConfigBusinessDto[]|null */
    public ?array $businessHouseholdAccounts = null;

    public function jsonSerialize(): array
    {
        return [
            'businessAccounts' => $this->businessAccounts,
            'businessHouseholdAccounts' => $this->businessHouseholdAccounts,
        ];
    }
}

class VPBConfigBusinessDto implements \JsonSerializable
{
    public string $accountNumber = '';
    public string $accountName = '';
    public string $merchantId = '';
    public string $terminalId = '';

    public function jsonSerialize(): array
    {
        return [
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'merchantId' => $this->merchantId,
            'terminalId' => $this->terminalId,
        ];
    }
}

class VPBConfigDto implements \JsonSerializable
{
    /** @var VPBConfigBusinessDto[]|null */
    public ?array $businessAccounts = null;
    /** @var VPBConfigBusinessDto[]|null */
    public ?array $businessHouseholdAccounts = null;

    public function jsonSerialize(): array
    {
        return [
            'businessAccounts' => $this->businessAccounts,
            'businessHouseholdAccounts' => $this->businessHouseholdAccounts,
        ];
    }
}

class VCBConfigBusinessDto implements \JsonSerializable
{
    public string $accountNumber = '';
    public string $accountName = '';
    public string $merchantId = '';
    public string $terminalId = '';

    public function jsonSerialize(): array
    {
        return [
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'merchantId' => $this->merchantId,
            'terminalId' => $this->terminalId,
        ];
    }
}

class VCBConfigDto implements \JsonSerializable
{
    /** @var VCBConfigBusinessDto[]|null */
    public ?array $businessAccounts = null;
    /** @var VCBConfigBusinessDto[]|null */
    public ?array $businessHouseholdAccounts = null;

    public function jsonSerialize(): array
    {
        return [
            'businessAccounts' => $this->businessAccounts,
            'businessHouseholdAccounts' => $this->businessHouseholdAccounts,
        ];
    }
}

class BankConfigDto implements \JsonSerializable
{
    /** @var OCBConfigDto[]|null */
    public ?array $ocbConfigDtos = null;
    /** @var MBBConfigDto[]|null */
    public ?array $mbbConfigDtos = null;
    /** @var BIDVConfigDto[]|null */
    public ?array $bidvConfigDtos = null;
    /** @var ShinhanConfigDto[]|null */
    public ?array $shinhanConfigDtos = null;
    /** @var VIBConfigDto[]|null */
    public ?array $vibConfigDtos = null;
    /** @var CTGConfigDto[]|null */
    public ?array $ctgConfigDtos = null;
    public ?ACBConfigDto $acbConfigDto = null;
    public ?VPBConfigDto $vpbConfigDto = null;
    public ?VCBConfigDto $vcbConfigDto = null;

    public function jsonSerialize(): array
    {
        return [
            'ocbConfigDtos' => $this->ocbConfigDtos,
            'mbbConfigDtos' => $this->mbbConfigDtos,
            'bidvConfigDtos' => $this->bidvConfigDtos,
            'shinhanConfigDtos' => $this->shinhanConfigDtos,
            'vibConfigDtos' => $this->vibConfigDtos,
            'ctgConfigDtos' => $this->ctgConfigDtos,
            'acbConfigDto' => $this->acbConfigDto,
            'vpbConfigDto' => $this->vpbConfigDto,
            'vcbConfigDto' => $this->vcbConfigDto,
        ];
    }
}

class BaoKimConfigDto implements \JsonSerializable
{
    public string $mid = '';

    public function jsonSerialize(): array
    {
        return [
            'mid' => $this->mid,
        ];
    }
}

class BNPLConfigDto implements \JsonSerializable
{
    public ?BaoKimConfigDto $baokimConfigDto = null;

    public function jsonSerialize(): array
    {
        return [
            'baokimConfigDto' => $this->baokimConfigDto,
        ];
    }
}

class OnePayConfigDto implements \JsonSerializable
{
    public string $merchantId = '';
    public string $signingKey = '';
    public string $verifyKey = '';
    public string $accessCode = '';
    public string $hashCode = '';
    public string $callbackUrl = '';

    public function jsonSerialize(): array
    {
        return [
            'merchantId' => $this->merchantId,
            'signingKey' => $this->signingKey,
            'verifyKey' => $this->verifyKey,
            'accessCode' => $this->accessCode,
            'hashCode' => $this->hashCode,
            'callbackUrl' => $this->callbackUrl,
        ];
    }
}

class DirectDebitConfigDto implements \JsonSerializable
{
    public ?OnePayConfigDto $onePayConfigDto = null;

    public function jsonSerialize(): array
    {
        return [
            'onePayConfigDto' => $this->onePayConfigDto,
        ];
    }
}

class MerchantPackageInfo implements \JsonSerializable
{
    public ?string $packageName = null;
    public ?string $expirationDate = null;

    public function jsonSerialize(): array
    {
        return [
            'packageName' => $this->packageName,
            'expirationDate' => $this->expirationDate,
        ];
    }
}

class MerchantDto implements \JsonSerializable
{
    public float $id = 0.0;
    public string $creationTime = '';
    public ?float $creatorUserId = null;
    public string $lastModificationTime = '';
    public ?float $lastModifierUserId = null;
    public ?float $deleterUserId = null;
    public ?string $code = null;
    public string $name = '';
    public ?string $email = null;
    public string $phoneNumber = '';
    public ?string $website = null;
    public ?array $businessSectorIds = null;
    public ?string $provinceId = null;
    public ?string $districtId = null;
    public ?string $communeId = null;
    public ?string $address = null;
    public ?string $fullAddress = null;
    public ?string $clientId = null;
    public ?string $secretToken = null;
    public ?string $eventUrl = null;
    /** @var EventUrlItemDto[]|null */
    public ?array $eventUrls = null;
    public ?bool $isLockEvent = null;
    public ?BankConfigDto $bankConfigDto = null;
    public ?BNPLConfigDto $bnplConfigDto = null;
    public ?DirectDebitConfigDto $directDebitConfigDto = null;
    public ?SendNotifyPlatformDto $sendNotifyPlatformDto = null;
    public ?bool $isOrganizationUnit = null;
    public ?string $referralCode = null;
    public ?string $userReferralAncestorIds = null;
    public ?float $userReferralLevel = null;
    public ?string $deviceDistributorAncestorMap = null;
    public ?bool $isMasterMerchant = null;
    /** @var MerchantPackageInfo[]|null */
    public ?array $merchantPackages = null;

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'creationTime' => $this->creationTime,
            'creatorUserId' => $this->creatorUserId,
            'lastModificationTime' => $this->lastModificationTime,
            'lastModifierUserId' => $this->lastModifierUserId,
            'deleterUserId' => $this->deleterUserId,
            'code' => $this->code,
            'name' => $this->name,
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber,
            'website' => $this->website,
            'businessSectorIds' => $this->businessSectorIds,
            'provinceId' => $this->provinceId,
            'districtId' => $this->districtId,
            'communeId' => $this->communeId,
            'address' => $this->address,
            'fullAddress' => $this->fullAddress,
            'clientId' => $this->clientId,
            'secretToken' => $this->secretToken,
            'eventUrl' => $this->eventUrl,
            'eventUrls' => $this->eventUrls,
            'isLockEvent' => $this->isLockEvent,
            'bankConfigDto' => $this->bankConfigDto,
            'bnplConfigDto' => $this->bnplConfigDto,
            'directDebitConfigDto' => $this->directDebitConfigDto,
            'sendNotifyPlatformDto' => $this->sendNotifyPlatformDto,
            'isOrganizationUnit' => $this->isOrganizationUnit,
            'referralCode' => $this->referralCode,
            'userReferralAncestorIds' => $this->userReferralAncestorIds,
            'userReferralLevel' => $this->userReferralLevel,
            'deviceDistributorAncestorMap' => $this->deviceDistributorAncestorMap,
            'isMasterMerchant' => $this->isMasterMerchant,
            'merchantPackages' => $this->merchantPackages,
        ];
    }
}

class OpenApiGetPagingMerchantsDto implements \JsonSerializable
{
    public ?string $filter = null;
    public ?string $sorting = null;
    public float $skipCount = 0.0;
    public float $maxResultCount = 0.0;

    public function jsonSerialize(): array
    {
        return [
            'filter' => $this->filter,
            'sorting' => $this->sorting,
            'skipCount' => $this->skipCount,
            'maxResultCount' => $this->maxResultCount,
        ];
    }
}

class OpenApiRegisterDto implements \JsonSerializable
{
    public string $requestId = '';
    public string $bankBin = '';
    public string $accountName = '';
    public string $phone = '';
    public string $returnUrl = '';

    public function jsonSerialize(): array
    {
        return [
            'requestId' => $this->requestId,
            'bankBin' => $this->bankBin,
            'accountName' => $this->accountName,
            'phone' => $this->phone,
            'returnUrl' => $this->returnUrl,
        ];
    }
}

class PaymentBillResponseDto implements \JsonSerializable
{
    public string $code = '';
    public string $status = '';
    public string $transactionCode = '';
    public bool $isSentConfirmEmail = false;
    public bool $isSentConfirmZalo = false;
    public string $returnUrl = '';

    public function jsonSerialize(): array
    {
        return [
            'code' => $this->code,
            'status' => $this->status,
            'transactionCode' => $this->transactionCode,
            'isSentConfirmEmail' => $this->isSentConfirmEmail,
            'isSentConfirmZalo' => $this->isSentConfirmZalo,
            'returnUrl' => $this->returnUrl,
        ];
    }
}

class OpenApiPaymentBillDto implements \JsonSerializable
{
    public string $requestId = '';
    public string $clientId = '';
    public string $subscriptionId = '';
    public string $amount = '';
    public string $description = '';
    public string $expirationTime = '';
    public string $signature = '';
    public string $token = '';
    public $additionalData = null;
    public string $tokenRef = '';
    public string $partnerCode = '';
    public string $accountNumber = '';
    public string $serviceProviderName = '';
    public string $returnUrl = '';

    public function jsonSerialize(): array
    {
        return [
            'requestId' => $this->requestId,
            'clientId' => $this->clientId,
            'subscriptionId' => $this->subscriptionId,
            'amount' => $this->amount,
            'description' => $this->description,
            'expirationTime' => $this->expirationTime,
            'signature' => $this->signature,
            'token' => $this->token,
            'additionalData' => $this->additionalData,
            'tokenRef' => $this->tokenRef,
            'partnerCode' => $this->partnerCode,
            'accountNumber' => $this->accountNumber,
            'serviceProviderName' => $this->serviceProviderName,
            'returnUrl' => $this->returnUrl,
        ];
    }
}

class DeleteSubscriptionOutputDto implements \JsonSerializable
{
    public string $confirmUrl = '';
    public string $code = '';

    public function jsonSerialize(): array
    {
        return [
            'confirmUrl' => $this->confirmUrl,
            'code' => $this->code,
        ];
    }
}

class OpenApiDeleteSubscriptionDto implements \JsonSerializable
{
    public string $requestId = '';
    public string $returnUrl = '';
    public string $subscriptionId = '';
    public string $tokenRef = '';

    public function jsonSerialize(): array
    {
        return [
            'requestId' => $this->requestId,
            'returnUrl' => $this->returnUrl,
            'subscriptionId' => $this->subscriptionId,
            'tokenRef' => $this->tokenRef,
        ];
    }
}

class RefundOutputDto implements \JsonSerializable
{
    public float $refundAmount = 0.0;
    public string $transactionId = '';
    public string $status = '';

    public function jsonSerialize(): array
    {
        return [
            'refundAmount' => $this->refundAmount,
            'transactionId' => $this->transactionId,
            'status' => $this->status,
        ];
    }
}

class OpenApiRefundInputDto implements \JsonSerializable
{
    public string $subscriptionId = '';
    public string $tokenRef = '';
    public string $transactionId = '';
    public float $amount = 0.0;

    public function jsonSerialize(): array
    {
        return [
            'subscriptionId' => $this->subscriptionId,
            'tokenRef' => $this->tokenRef,
            'transactionId' => $this->transactionId,
            'amount' => $this->amount,
        ];
    }
}

class OpenApiEditConfirmBeforePaymentMethodDto implements \JsonSerializable
{
    public string $requestId = '';
    public string $returnUrl = '';
    public string $subscriptionId = '';

    public function jsonSerialize(): array
    {
        return [
            'requestId' => $this->requestId,
            'returnUrl' => $this->returnUrl,
            'subscriptionId' => $this->subscriptionId,
        ];
    }
}

class OpenApiSubscriptionStatusResponseDto implements \JsonSerializable
{
    public string $lastModificationTime = '';
    public ?float $lastModifierUserId = null;
    public ?string $email = null;
    public string $bankName = '';
    public ?string $accountName = null;
    public string $accountNumber = '';
    public string $phone = '';
    public bool $confirmPaymentByEmail = false;
    public ?string $confirmEmail = null;
    public bool $confirmPaymentByZalo = false;
    public string $confirmPhoneNumber = '';
    public string $tokenRef = '';
    public string $status = '';
    public string $subscriptionId = '';
    public string $bankBin = '';

    public function jsonSerialize(): array
    {
        return [
            'lastModificationTime' => $this->lastModificationTime,
            'lastModifierUserId' => $this->lastModifierUserId,
            'email' => $this->email,
            'bankName' => $this->bankName,
            'accountName' => $this->accountName,
            'accountNumber' => $this->accountNumber,
            'phone' => $this->phone,
            'confirmPaymentByEmail' => $this->confirmPaymentByEmail,
            'confirmEmail' => $this->confirmEmail,
            'confirmPaymentByZalo' => $this->confirmPaymentByZalo,
            'confirmPhoneNumber' => $this->confirmPhoneNumber,
            'tokenRef' => $this->tokenRef,
            'status' => $this->status,
            'subscriptionId' => $this->subscriptionId,
            'bankBin' => $this->bankBin,
        ];
    }
}

class CustomerInfoDto implements \JsonSerializable
{
    public string $onepayAccountId = '';
    public string $name = '';
    public string $phone = '';
    public string $email = '';

    public function jsonSerialize(): array
    {
        return [
            'onepayAccountId' => $this->onepayAccountId,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
        ];
    }
}

class OpenApiPaymentTransactionStatusResponseDto implements \JsonSerializable
{
    public string $transactionId = '';
    public string $subscriptionId = '';
    public string $tokenRef = '';
    public string $bankBin = '';
    public ?CustomerInfoDto $customer = null;
    public string $accountNumber = '';
    public string $accountName = '';
    public string $code = '';
    public float $amount = 0.0;
    public string $currency = '';
    public string $content = '';
    public string $transactionDate = '';
    public string $status = '';

    public function jsonSerialize(): array
    {
        return [
            'transactionId' => $this->transactionId,
            'subscriptionId' => $this->subscriptionId,
            'tokenRef' => $this->tokenRef,
            'bankBin' => $this->bankBin,
            'customer' => $this->customer,
            'accountNumber' => $this->accountNumber,
            'accountName' => $this->accountName,
            'code' => $this->code,
            'amount' => $this->amount,
            'currency' => $this->currency,
            'content' => $this->content,
            'transactionDate' => $this->transactionDate,
            'status' => $this->status,
        ];
    }
}

class OpenApiPaymentTransactionsPagedOutputDto implements \JsonSerializable
{
    public string $transactionId = '';
    public string $code = '';
    public string $bankName = '';
    public string $bankBin = '';
    public string $amount = '';
    public string $content = '';
    public string $accountNumber = '';
    public string $transactionDate = '';
    public string $subscriptionId = '';
    public string $tokenRef = '';
    public string $status = '';
    public $additionalData = null;

    public function jsonSerialize(): array
    {
        return [
            'transactionId' => $this->transactionId,
            'code' => $this->code,
            'bankName' => $this->bankName,
            'bankBin' => $this->bankBin,
            'amount' => $this->amount,
            'content' => $this->content,
            'accountNumber' => $this->accountNumber,
            'transactionDate' => $this->transactionDate,
            'subscriptionId' => $this->subscriptionId,
            'tokenRef' => $this->tokenRef,
            'status' => $this->status,
            'additionalData' => $this->additionalData,
        ];
    }
}
