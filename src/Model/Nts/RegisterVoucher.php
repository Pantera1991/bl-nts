<?php

namespace BaseLinkerNts\Model\Nts;

use DateTime;

class RegisterVoucher
{

    /**
     * @var string|null $customer_code
     */
    protected ?string $customer_code;

    /**
     * @var string|null $pin
     */
    protected ?string $pin = null;

    /**
     * @var string|null $date
     */
    protected ?string $date;

    /**
     * @param string $customer_code
     * @param string $pin
     * @param DateTime $date
     */
    public function __construct(string $customer_code, string $pin, DateTime $date)
    {
        $this->customer_code = $customer_code;
        $this->pin = $pin;
        $this->date = $date->format(DateTime::ATOM);
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
     * @return RegisterVoucher
     */
    public function setCustomer_code(string $customer_code): RegisterVoucher
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
     * @return RegisterVoucher
     */
    public function setPin(string $pin): RegisterVoucher
    {
        $this->pin = $pin;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate(): ?DateTime
    {
        if ($this->date == null) {
            return null;
        }

        try {
            return new DateTime($this->date);
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * @param DateTime $date
     * @return RegisterVoucher
     */
    public function setDate(DateTime $date): RegisterVoucher
    {
        $this->date = $date->format(DateTime::ATOM);
        return $this;
    }

}
