<?php

namespace BaseLinkerNts\Model\Nts;

class SalesOrderConfirm
{

    /**
     * @var string|null $shop_no
     */
    protected ?string $shop_no;

    /**
     * @var string|null $ord_id
     */
    protected ?string $ord_id;

    /**
     * @var string|null $confirm_note
     */
    protected ?string $confirm_note;

    /**
     * @var string|null $ord_pin
     */
    protected ?string $ord_pin;

    /**
     * @var string|null $ord_payment_confirmed
     */
    protected ?string $ord_payment_confirmed;

    /**
     * @param string $shop_no
     * @param string $ord_id
     * @param string $confirm_note
     * @param string $ord_pin
     * @param string $ord_payment_confirmed
     */
    public function __construct(
        string $shop_no,
        string $ord_id,
        string $confirm_note,
        string $ord_pin,
        string $ord_payment_confirmed
    ) {
        $this->shop_no = $shop_no;
        $this->ord_id = $ord_id;
        $this->confirm_note = $confirm_note;
        $this->ord_pin = $ord_pin;
        $this->ord_payment_confirmed = $ord_payment_confirmed;
    }

    /**
     * @return string
     */
    public function getShop_no(): ?string
    {
        return $this->shop_no;
    }

    /**
     * @param string $shop_no
     * @return SalesOrderConfirm
     */
    public function setShop_no(string $shop_no): SalesOrderConfirm
    {
        $this->shop_no = $shop_no;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrd_id(): ?string
    {
        return $this->ord_id;
    }

    /**
     * @param string $ord_id
     * @return SalesOrderConfirm
     */
    public function setOrd_id(string $ord_id): SalesOrderConfirm
    {
        $this->ord_id = $ord_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getConfirm_note(): ?string
    {
        return $this->confirm_note;
    }

    /**
     * @param string $confirm_note
     * @return SalesOrderConfirm
     */
    public function setConfirm_note(string $confirm_note): SalesOrderConfirm
    {
        $this->confirm_note = $confirm_note;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrd_pin(): ?string
    {
        return $this->ord_pin;
    }

    /**
     * @param string $ord_pin
     * @return SalesOrderConfirm
     */
    public function setOrd_pin(string $ord_pin): SalesOrderConfirm
    {
        $this->ord_pin = $ord_pin;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrd_payment_confirmed(): ?string
    {
        return $this->ord_payment_confirmed;
    }

    /**
     * @param string $ord_payment_confirmed
     * @return SalesOrderConfirm
     */
    public function setOrd_payment_confirmed(string $ord_payment_confirmed): SalesOrderConfirm
    {
        $this->ord_payment_confirmed = $ord_payment_confirmed;
        return $this;
    }

}
