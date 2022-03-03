<?php

namespace BaseLinkerNts\Model\Nts;

class CompanyDataType
{

    /**
     * @var string $company_country_code
     */
    protected string $company_country_code;

    /**
     * @var string $company_name
     */
    protected string $company_name;

    /**
     * @var string $company_nip
     */
    protected string $company_nip;

    /**
     * @return string
     */
    public function getCompanyCountryCode(): string
    {
        return $this->company_country_code;
    }

    /**
     * @param string $company_country_code
     */
    public function setCompanyCountryCode(string $company_country_code): void
    {
        $this->company_country_code = $company_country_code;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->company_name;
    }

    /**
     * @param string $company_name
     */
    public function setCompanyName(string $company_name): void
    {
        $this->company_name = $company_name;
    }

    /**
     * @return string
     */
    public function getCompanyNip(): string
    {
        return $this->company_nip;
    }

    /**
     * @param string $company_nip
     */
    public function setCompanyNip(string $company_nip): void
    {
        $this->company_nip = $company_nip;
    }

}
