<?php

namespace BaseLinkerNts\Model\Nts;

class CustomerInformationType
{

    /**
     * @var string $customer_code
     */
    protected string $customer_code;

    /**
     * @var string $customer_fname
     */
    protected string $customer_fname;

    /**
     * @var string $customer_lname
     */
    protected string $customer_lname;

    /**
     * @var string $customer_note
     */
    protected string $customer_note;

    /**
     * @var string $customer_card_no
     */
    protected string $customer_card_no;

    /**
     * @var string $customer_external_code
     */
    protected string $customer_external_code;

    /**
     * @var float $discount_val
     */
    protected float $discount_val;

    /**
     * @var DynamicFieldsType $dynamic_fields
     */
    protected DynamicFieldsType $dynamic_fields;

    /**
     * @return string
     */
    public function getCustomerCode(): string
    {
        return $this->customer_code;
    }

    /**
     * @param string $customer_code
     */
    public function setCustomerCode(string $customer_code): void
    {
        $this->customer_code = $customer_code;
    }

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
     * @return string
     */
    public function getCustomerNote(): string
    {
        return $this->customer_note;
    }

    /**
     * @param string $customer_note
     */
    public function setCustomerNote(string $customer_note): void
    {
        $this->customer_note = $customer_note;
    }

    /**
     * @return string
     */
    public function getCustomerCardNo(): string
    {
        return $this->customer_card_no;
    }

    /**
     * @param string $customer_card_no
     */
    public function setCustomerCardNo(string $customer_card_no): void
    {
        $this->customer_card_no = $customer_card_no;
    }

    /**
     * @return string
     */
    public function getCustomerExternalCode(): string
    {
        return $this->customer_external_code;
    }

    /**
     * @param string $customer_external_code
     */
    public function setCustomerExternalCode(string $customer_external_code): void
    {
        $this->customer_external_code = $customer_external_code;
    }

    /**
     * @return float
     */
    public function getDiscountVal(): float
    {
        return $this->discount_val;
    }

    /**
     * @param float $discount_val
     */
    public function setDiscountVal(float $discount_val): void
    {
        $this->discount_val = $discount_val;
    }

    /**
     * @return DynamicFieldsType
     */
    public function getDynamicFields(): DynamicFieldsType
    {
        return $this->dynamic_fields;
    }

    /**
     * @param DynamicFieldsType $dynamic_fields
     */
    public function setDynamicFields(DynamicFieldsType $dynamic_fields): void
    {
        $this->dynamic_fields = $dynamic_fields;
    }

}
