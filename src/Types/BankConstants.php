<?php

namespace Tingee\Sdk\Types;

// Hand-crafted constants for Tingee SDK — do NOT auto-generate

abstract class BankNameEnum
{
    const OCB      = 'OCB';
    const BIDV     = 'BIDV';
    const MBB      = 'MBB';
    const ACB      = 'ACB';
    const VPB      = 'VPB';
    const PGB      = 'PGB';
    const VIB      = 'VIB';
    const STB      = 'STB';
    const CTG      = 'CTG';
    const VCB      = 'VCB';
    const AGRIBANK = 'AGRIBANK';
    const SHINHAN  = 'SHINHAN';
    const COB      = 'COB';
    const MSB      = 'MSB';
}

abstract class BankAccountTypeEnum
{
    const PersonalAccount          = 'personal-account';
    const BusinessAccount          = 'business-account';
    const BusinessHouseHoldAccount = 'business-household-account';
}

class BankInfo
{
    public string $code;
    public string $name;
    public string $shortName;
    public string $bin;

    public function __construct(string $code, string $name, string $shortName, string $bin)
    {
        $this->code      = $code;
        $this->name      = $name;
        $this->shortName = $shortName;
        $this->bin       = $bin;
    }
}

class BankConstants
{
    /** @var BankInfo[] */
    private static array $banks = [];

    /** @return BankInfo[] */
    public static function getBanks(): array
    {
        if (!empty(self::$banks)) {
            return self::$banks;
        }

        self::$banks = [
            new BankInfo(BankNameEnum::VCB,      'Ngân hàng TMCP Ngoại Thương Việt Nam',                   'Vietcombank',  '970436'),
            new BankInfo(BankNameEnum::CTG,      'Ngân hàng TMCP Công thương Việt Nam',                     'VietinBank',   '970415'),
            new BankInfo(BankNameEnum::BIDV,     'Ngân hàng TMCP Đầu tư và Phát triển Việt Nam',            'BIDV',         '970418'),
            new BankInfo(BankNameEnum::AGRIBANK, 'Ngân hàng Nông nghiệp và Phát triển Nông thôn Việt Nam',  'Agribank',     '970405'),
            new BankInfo(BankNameEnum::MBB,      'Ngân hàng TMCP Quân đội',                                 'MB Bank',      '970422'),
            new BankInfo(BankNameEnum::ACB,      'Ngân hàng TMCP Á Châu',                                   'ACB',          '970416'),
            new BankInfo(BankNameEnum::OCB,      'Ngân hàng TMCP Phương Đông',                              'OCB Bank',     '970448'),
            new BankInfo(BankNameEnum::VPB,      'Ngân hàng TMCP Việt Nam Thịnh Vượng',                    'VPBank',       '970432'),
            new BankInfo(BankNameEnum::STB,      'Ngân hàng TMCP Sài Gòn Thương Tín',                      'Sacombank',    '970403'),
            new BankInfo(BankNameEnum::VIB,      'Ngân hàng TMCP Quốc tế Việt Nam',                        'VIB',          '970441'),
            new BankInfo(BankNameEnum::PGB,      'Ngân Hàng TMCP Thịnh vượng và Phát triển',               'PGBank',       '970430'),
            new BankInfo(BankNameEnum::SHINHAN,  'Ngân hàng TNHH MTV Shinhan Việt Nam',                     'Shinhan Bank', '970424'),
            new BankInfo(BankNameEnum::COB,      'Ngân hàng Hợp tác Xã Việt Nam',                          'Co-opBank',    '970446'),
        ];

        return self::$banks;
    }

    public static function getBankCode(string $bankBin): ?string
    {
        foreach (self::getBanks() as $bank) {
            if ($bank->bin === $bankBin) {
                return $bank->code;
            }
        }
        return null;
    }

    public static function getBankShortName(string $bankBin): ?string
    {
        foreach (self::getBanks() as $bank) {
            if ($bank->bin === $bankBin) {
                return $bank->shortName;
            }
        }
        return null;
    }

    public static function getBankBin(string $bankName): ?string
    {
        foreach (self::getBanks() as $bank) {
            if ($bank->code === $bankName) {
                return $bank->bin;
            }
        }
        return null;
    }
}
