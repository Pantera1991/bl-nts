<?php

namespace BaseLinkerNts\Model\Nts;

class ClientSearchParamsType
{

    /**
     * @var string|null $customer_code
     */
    protected ?string $customer_code = null;

    /**
     * @var string|null $customer_card_no
     */
    protected ?string $customer_card_no = null;

    /**
     * @var string|null $customer_external_code
     */
    protected ?string $customer_external_code = null;

    /**
     * @var string|null $customer_fname
     */
    protected ?string $customer_fname = null;

    /**
     * @var string|null $customer_lname
     */
    protected ?string $customer_lname = null;

    /**
     * @var string|null $customer_email
     */
    protected ?string $customer_email = null;

    /**
     * @var string|null $customer_phone
     */
    protected ?string $customer_phone = null;

    /**
     * @var int|null $delta
     */
    protected ?int $delta = null;


    /**
     * @return string
     */
    public function getCustomerCode(): ?string
    {
      return $this->customer_code;
    }

    /**
     * @param string $customer_code
     * @return ClientSearchParamsType
     */
    public function setCustomerCode(string $customer_code): ClientSearchParamsType
    {
      $this->customer_code = $customer_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCardNo(): ?string
    {
      return $this->customer_card_no;
    }

    /**
     * @param string $customer_card_no
     * @return ClientSearchParamsType
     */
    public function setCustomerCardNo(string $customer_card_no): ClientSearchParamsType
    {
      $this->customer_card_no = $customer_card_no;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerExternalCode(): ?string
    {
      return $this->customer_external_code;
    }

    /**
     * @param string $customer_external_code
     * @return ClientSearchParamsType
     */
    public function setCustomerExternalCode(string $customer_external_code): ClientSearchParamsType
    {
      $this->customer_external_code = $customer_external_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerFname(): ?string
    {
      return $this->customer_fname;
    }

    /**
     * @param string $customer_fname
     * @return ClientSearchParamsType
     */
    public function setCustomerFname(string $customer_fname): ClientSearchParamsType
    {
      $this->customer_fname = $customer_fname;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerLname(): ?string
    {
      return $this->customer_lname;
    }

    /**
     * @param string $customer_lname
     * @return ClientSearchParamsType
     */
    public function setCustomerLname(string $customer_lname): ClientSearchParamsType
    {
      $this->customer_lname = $customer_lname;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEmail(): ?string
    {
      return $this->customer_email;
    }

    /**
     * @param string $customer_email
     * @return ClientSearchParamsType
     */
    public function setCustomerEmail(string $customer_email): ClientSearchParamsType
    {
      $this->customer_email = $customer_email;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerPhone(): ?string
    {
      return $this->customer_phone;
    }

    /**
     * @param string $customer_phone
     * @return ClientSearchParamsType
     */
    public function setCustomerPhone(string $customer_phone): ClientSearchParamsType
    {
      $this->customer_phone = $customer_phone;
      return $this;
    }

    /**
     * @return int
     */
    public function getDelta(): ?int
    {
      return $this->delta;
    }

    /**
     * @param int $delta
     * @return ClientSearchParamsType
     */
    public function setDelta(int $delta): ClientSearchParamsType
    {
      $this->delta = $delta;
      return $this;
    }

}
