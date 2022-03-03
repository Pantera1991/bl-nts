<?php

namespace BaseLinkerNts\Model\Nts;

class AddVoucherInfo
{

    /**
     * @var string|null $customer_code
     */
    protected ?string $customer_code;

    /**
     * @var string|null $pin
     */
    protected ?string $pin;

    /**
     * @var VoucherInformationType|null $vouinfo
     */
    protected ?VoucherInformationType $vouinfo;

    /**
     * @param string $customer_code
     * @param string $pin
     * @param VoucherInformationType $vouinfo
     */
    public function __construct(string $customer_code, string $pin, VoucherInformationType $vouinfo)
    {
      $this->customer_code = $customer_code;
      $this->pin = $pin;
      $this->vouinfo = $vouinfo;
    }

    /**
     * @return string
     */
    public function getCustomer_code(): ?string
    {
      return $this->customer_code;
    }

    /**
     * @param string $customer_code
     * @return AddVoucherInfo
     */
    public function setCustomer_code(string $customer_code): AddVoucherInfo
    {
      $this->customer_code = $customer_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getPin(): ?string
    {
      return $this->pin;
    }

    /**
     * @param string $pin
     * @return AddVoucherInfo
     */
    public function setPin(string $pin): AddVoucherInfo
    {
      $this->pin = $pin;
      return $this;
    }

    /**
     * @return VoucherInformationType
     */
    public function getVouinfo(): ?VoucherInformationType
    {
      return $this->vouinfo;
    }

    /**
     * @param VoucherInformationType $vouinfo
     * @return AddVoucherInfo
     */
    public function setVouinfo(VoucherInformationType $vouinfo): AddVoucherInfo
    {
      $this->vouinfo = $vouinfo;
      return $this;
    }

}
