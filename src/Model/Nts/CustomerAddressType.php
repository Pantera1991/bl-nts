<?php

namespace BaseLinkerNts\Model\Nts;

class CustomerAddressType
{

    /**
     * @var string $country_code
     */
    protected string $country_code;

    /**
     * @var string $city
     */
    protected string $city;

    /**
     * @var string $zip
     */
    protected string $zip;

    /**
     * @var string $street
     */
    protected string $street;

    /**
     * @var string $email
     */
    protected string $email;

    /**
     * @var string $phone
     */
    protected string $phone;

    /**
     * @var string $mobile_phone
     */
    protected string $mobile_phone;

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->country_code;
    }

    /**
     * @param string $country_code
     */
    public function setCountryCode(string $country_code): void
    {
        $this->country_code = $country_code;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     */
    public function setZip(string $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getMobilePhone(): string
    {
        return $this->mobile_phone;
    }

    /**
     * @param string $mobile_phone
     */
    public function setMobilePhone(string $mobile_phone): void
    {
        $this->mobile_phone = $mobile_phone;
    }

}
