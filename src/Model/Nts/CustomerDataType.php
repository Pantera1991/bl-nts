<?php

namespace BaseLinkerNts\Model\Nts;

class CustomerDataType
{

    /**
     * @var CustomerInformationType|null $customerInfo
     */
    protected ?CustomerInformationType $customerInfo;

    /**
     * @var CustomerAddressType|null $customerAddress
     */
    protected ?CustomerAddressType $customerAddress;

    /**
     * @var CompanyDataType|null $companyData
     */
    protected ?CompanyDataType $companyData;


    /**
     * @return CustomerInformationType
     */
    public function getCustomerInfo(): ?CustomerInformationType
    {
      return $this->customerInfo;
    }

    /**
     * @param CustomerInformationType $customerInfo
     * @return CustomerDataType
     */
    public function setCustomerInfo(CustomerInformationType $customerInfo): CustomerDataType
    {
      $this->customerInfo = $customerInfo;
      return $this;
    }

    /**
     * @return CustomerAddressType
     */
    public function getCustomerAddress(): ?CustomerAddressType
    {
      return $this->customerAddress;
    }

    /**
     * @param CustomerAddressType $customerAddress
     * @return CustomerDataType
     */
    public function setCustomerAddress(CustomerAddressType $customerAddress): CustomerDataType
    {
      $this->customerAddress = $customerAddress;
      return $this;
    }

    /**
     * @return CompanyDataType
     */
    public function getCompanyData(): ?CompanyDataType
    {
      return $this->companyData;
    }

    /**
     * @param CompanyDataType $companyData
     * @return CustomerDataType
     */
    public function setCompanyData(CompanyDataType $companyData): CustomerDataType
    {
      $this->companyData = $companyData;
      return $this;
    }

}
