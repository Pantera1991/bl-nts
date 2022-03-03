<?php

namespace BaseLinkerNts\Model\Nts;

class DeliveryAddressType
{

    /**
     * @var string $delivery_fname
     */
    protected string $delivery_fname;

    /**
     * @var string $delivery_lname
     */
    protected string $delivery_lname;

    /**
     * @var CustomerAddressType $deliveryAddress
     */
    protected CustomerAddressType $deliveryAddress;

    /**
     * @var string $pickup_no
     */
    protected string $pickup_no;

    /**
     * @var string $pickup_name
     */
    protected string $pickup_name;

    /**
     * @return string
     */
    public function getDeliveryFname(): string
    {
        return $this->delivery_fname;
    }

    /**
     * @param string $delivery_fname
     */
    public function setDeliveryFname(string $delivery_fname): void
    {
        $this->delivery_fname = $delivery_fname;
    }

    /**
     * @return string
     */
    public function getDeliveryLname(): string
    {
        return $this->delivery_lname;
    }

    /**
     * @param string $delivery_lname
     */
    public function setDeliveryLname(string $delivery_lname): void
    {
        $this->delivery_lname = $delivery_lname;
    }

    /**
     * @return CustomerAddressType
     */
    public function getDeliveryAddress(): CustomerAddressType
    {
        return $this->deliveryAddress;
    }

    /**
     * @param CustomerAddressType $deliveryAddress
     */
    public function setDeliveryAddress(CustomerAddressType $deliveryAddress): void
    {
        $this->deliveryAddress = $deliveryAddress;
    }

    /**
     * @return string
     */
    public function getPickupNo(): string
    {
        return $this->pickup_no;
    }

    /**
     * @param string $pickup_no
     */
    public function setPickupNo(string $pickup_no): void
    {
        $this->pickup_no = $pickup_no;
    }

    /**
     * @return string
     */
    public function getPickupName(): string
    {
        return $this->pickup_name;
    }

    /**
     * @param string $pickup_name
     */
    public function setPickupName(string $pickup_name): void
    {
        $this->pickup_name = $pickup_name;
    }

}
