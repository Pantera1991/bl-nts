<?php

namespace BaseLinkerNts\Model\Nts;

class InvoiceDataType
{

    /**
     * @var string $customer_fname
     */
    protected string $customer_fname;

    /**
     * @var string $customer_lname
     */
    protected string $customer_lname;

    /**
     * @var CustomerAddressType $invoiceAddress
     */
    protected CustomerAddressType $invoiceAddress;

    /**
     * @var CompanyDataType $companyData
     */
    protected CompanyDataType $companyData;

    /**
     * @return string
     */
    public function getCustomerFname(): string
    {
        return $this->customer_fname;
    }

    /**
     * @param string $customer_fname
     */
    public function setCustomerFname(string $customer_fname): void
    {
        $this->customer_fname = $customer_fname;
    }

    /**
     * @return string
     */
    public function getCustomerLname(): string
    {
        return $this->customer_lname;
    }

    /**
     * @param string $customer_lname
     */
    public function setCustomerLname(string $customer_lname): void
    {
        $this->customer_lname = $customer_lname;
    }

    /**
     * @return CustomerAddressType
     */
    public function getInvoiceAddress(): CustomerAddressType
    {
        return $this->invoiceAddress;
    }

    /**
     * @param CustomerAddressType $invoiceAddress
     */
    public function setInvoiceAddress(CustomerAddressType $invoiceAddress): void
    {
        $this->invoiceAddress = $invoiceAddress;
    }

    /**
     * @return CompanyDataType
     */
    public function getCompanyData(): CompanyDataType
    {
        return $this->companyData;
    }

    /**
     * @param CompanyDataType $companyData
     */
    public function setCompanyData(CompanyDataType $companyData): void
    {
        $this->companyData = $companyData;
    }
}
