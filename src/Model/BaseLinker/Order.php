<?php

namespace BaseLinkerNts\Model\BaseLinker;

class Order
{
    private int $order_id;
    private string $shop_order_id;
    private string $external_order_id;
    private string $order_source;
    private string $order_source_id;
    private string $order_source_info;
    private int $order_status_id;
    private int $date_add;
    private int $date_confirmed;
    private int $date_in_status;
    private bool $confirmed;
    private string $user_login;
    private string $currency;
    private string $payment_method;
    private bool $payment_method_cod;
    private float $payment_done;
    private string $user_comments;
    private string $admin_comments;
    private string $email;
    private string $phone;
    private string $delivery_method;
    private float $delivery_price;
    private string $delivery_package_module;
    private string $delivery_package_nr;
    private string $delivery_fullname;
    private string $delivery_company;
    private string $delivery_address;
    private string $delivery_postcode;
    private string $delivery_city;
    private string $delivery_country;
    private string $delivery_country_code;
    private string $delivery_point_id;
    private string $delivery_point_name;
    private string $delivery_point_address;
    private string $delivery_point_postcode;
    private string $delivery_point_city;
    private string $invoice_fullname;
    private string $invoice_company;
    private string $invoice_nip;
    private string $invoice_address;
    private string $invoice_postcode;
    private string $invoice_city;
    private string $invoice_country;
    private string $invoice_country_code;
    private string $want_invoice;
    private string $extra_field_1;
    private string $extra_field_2;
    private string $order_page;
    private int $pick_state;
    private int $pack_state;
    /**
     * @var OrderProduct[]
     */
    private array $products;

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->order_id;
    }

    /**
     * @param int $order_id
     */
    public function setOrderId(int $order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @return string
     */
    public function getShopOrderId(): string
    {
        return $this->shop_order_id;
    }

    /**
     * @param string $shop_order_id
     */
    public function setShopOrderId(string $shop_order_id): void
    {
        $this->shop_order_id = $shop_order_id;
    }

    /**
     * @return string
     */
    public function getExternalOrderId(): string
    {
        return $this->external_order_id;
    }

    /**
     * @param string $external_order_id
     */
    public function setExternalOrderId(string $external_order_id): void
    {
        $this->external_order_id = $external_order_id;
    }

    /**
     * @return string
     */
    public function getOrderSource(): string
    {
        return $this->order_source;
    }

    /**
     * @param string $order_source
     */
    public function setOrderSource(string $order_source): void
    {
        $this->order_source = $order_source;
    }

    /**
     * @return string
     */
    public function getOrderSourceId(): string
    {
        return $this->order_source_id;
    }

    /**
     * @param string $order_source_id
     */
    public function setOrderSourceId(string $order_source_id): void
    {
        $this->order_source_id = $order_source_id;
    }

    /**
     * @return string
     */
    public function getOrderSourceInfo(): string
    {
        return $this->order_source_info;
    }

    /**
     * @param string $order_source_info
     */
    public function setOrderSourceInfo(string $order_source_info): void
    {
        $this->order_source_info = $order_source_info;
    }

    /**
     * @return int
     */
    public function getOrderStatusId(): int
    {
        return $this->order_status_id;
    }

    /**
     * @param int $order_status_id
     */
    public function setOrderStatusId(int $order_status_id): void
    {
        $this->order_status_id = $order_status_id;
    }

    /**
     * @return int
     */
    public function getDateAdd(): int
    {
        return $this->date_add;
    }

    /**
     * @param int $date_add
     */
    public function setDateAdd(int $date_add): void
    {
        $this->date_add = $date_add;
    }

    /**
     * @return int
     */
    public function getDateConfirmed(): int
    {
        return $this->date_confirmed;
    }

    /**
     * @param int $date_confirmed
     */
    public function setDateConfirmed(int $date_confirmed): void
    {
        $this->date_confirmed = $date_confirmed;
    }

    /**
     * @return int
     */
    public function getDateInStatus(): int
    {
        return $this->date_in_status;
    }

    /**
     * @param int $date_in_status
     */
    public function setDateInStatus(int $date_in_status): void
    {
        $this->date_in_status = $date_in_status;
    }

    /**
     * @return bool
     */
    public function isConfirmed(): bool
    {
        return $this->confirmed;
    }

    /**
     * @param bool $confirmed
     */
    public function setConfirmed(bool $confirmed): void
    {
        $this->confirmed = $confirmed;
    }

    /**
     * @return string
     */
    public function getUserLogin(): string
    {
        return $this->user_login;
    }

    /**
     * @param string $user_login
     */
    public function setUserLogin(string $user_login): void
    {
        $this->user_login = $user_login;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getPaymentMethod(): string
    {
        return $this->payment_method;
    }

    /**
     * @param string $payment_method
     */
    public function setPaymentMethod(string $payment_method): void
    {
        $this->payment_method = $payment_method;
    }

    /**
     * @return string
     */
    public function getPaymentMethodCod(): string
    {
        return $this->payment_method_cod;
    }

    /**
     * @param string $payment_method_cod
     */
    public function setPaymentMethodCod(string $payment_method_cod): void
    {
        $this->payment_method_cod = $payment_method_cod;
    }

    /**
     * @return float
     */
    public function getPaymentDone(): float
    {
        return $this->payment_done;
    }

    /**
     * @param float $payment_done
     */
    public function setPaymentDone(float $payment_done): void
    {
        $this->payment_done = $payment_done;
    }

    /**
     * @return string
     */
    public function getUserComments(): string
    {
        return $this->user_comments;
    }

    /**
     * @param string $user_comments
     */
    public function setUserComments(string $user_comments): void
    {
        $this->user_comments = $user_comments;
    }

    /**
     * @return string
     */
    public function getAdminComments(): string
    {
        return $this->admin_comments;
    }

    /**
     * @param string $admin_comments
     */
    public function setAdminComments(string $admin_comments): void
    {
        $this->admin_comments = $admin_comments;
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
    public function getDeliveryMethod(): string
    {
        return $this->delivery_method;
    }

    /**
     * @param string $delivery_method
     */
    public function setDeliveryMethod(string $delivery_method): void
    {
        $this->delivery_method = $delivery_method;
    }

    /**
     * @return float
     */
    public function getDeliveryPrice(): float
    {
        return $this->delivery_price;
    }

    /**
     * @param float $delivery_price
     */
    public function setDeliveryPrice(float $delivery_price): void
    {
        $this->delivery_price = $delivery_price;
    }

    /**
     * @return string
     */
    public function getDeliveryPackageModule(): string
    {
        return $this->delivery_package_module;
    }

    /**
     * @param string $delivery_package_module
     */
    public function setDeliveryPackageModule(string $delivery_package_module): void
    {
        $this->delivery_package_module = $delivery_package_module;
    }

    /**
     * @return string
     */
    public function getDeliveryPackageNr(): string
    {
        return $this->delivery_package_nr;
    }

    /**
     * @param string $delivery_package_nr
     */
    public function setDeliveryPackageNr(string $delivery_package_nr): void
    {
        $this->delivery_package_nr = $delivery_package_nr;
    }

    /**
     * @return string
     */
    public function getDeliveryFullname(): string
    {
        return $this->delivery_fullname;
    }

    /**
     * @param string $delivery_fullname
     */
    public function setDeliveryFullname(string $delivery_fullname): void
    {
        $this->delivery_fullname = $delivery_fullname;
    }

    /**
     * @return string
     */
    public function getDeliveryCompany(): string
    {
        return $this->delivery_company;
    }

    /**
     * @param string $delivery_company
     */
    public function setDeliveryCompany(string $delivery_company): void
    {
        $this->delivery_company = $delivery_company;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress(): string
    {
        return $this->delivery_address;
    }

    /**
     * @param string $delivery_address
     */
    public function setDeliveryAddress(string $delivery_address): void
    {
        $this->delivery_address = $delivery_address;
    }

    /**
     * @return string
     */
    public function getDeliveryPostcode(): string
    {
        return $this->delivery_postcode;
    }

    /**
     * @param string $delivery_postcode
     */
    public function setDeliveryPostcode(string $delivery_postcode): void
    {
        $this->delivery_postcode = $delivery_postcode;
    }

    /**
     * @return string
     */
    public function getDeliveryCity(): string
    {
        return $this->delivery_city;
    }

    /**
     * @param string $delivery_city
     */
    public function setDeliveryCity(string $delivery_city): void
    {
        $this->delivery_city = $delivery_city;
    }

    /**
     * @return string
     */
    public function getDeliveryCountry(): string
    {
        return $this->delivery_country;
    }

    /**
     * @param string $delivery_country
     */
    public function setDeliveryCountry(string $delivery_country): void
    {
        $this->delivery_country = $delivery_country;
    }

    /**
     * @return string
     */
    public function getDeliveryCountryCode(): string
    {
        return $this->delivery_country_code;
    }

    /**
     * @param string $delivery_country_code
     */
    public function setDeliveryCountryCode(string $delivery_country_code): void
    {
        $this->delivery_country_code = $delivery_country_code;
    }

    /**
     * @return string
     */
    public function getDeliveryPointId(): string
    {
        return $this->delivery_point_id;
    }

    /**
     * @param string $delivery_point_id
     */
    public function setDeliveryPointId(string $delivery_point_id): void
    {
        $this->delivery_point_id = $delivery_point_id;
    }

    /**
     * @return string
     */
    public function getDeliveryPointName(): string
    {
        return $this->delivery_point_name;
    }

    /**
     * @param string $delivery_point_name
     */
    public function setDeliveryPointName(string $delivery_point_name): void
    {
        $this->delivery_point_name = $delivery_point_name;
    }

    /**
     * @return string
     */
    public function getDeliveryPointAddress(): string
    {
        return $this->delivery_point_address;
    }

    /**
     * @param string $delivery_point_address
     */
    public function setDeliveryPointAddress(string $delivery_point_address): void
    {
        $this->delivery_point_address = $delivery_point_address;
    }

    /**
     * @return string
     */
    public function getDeliveryPointPostcode(): string
    {
        return $this->delivery_point_postcode;
    }

    /**
     * @param string $delivery_point_postcode
     */
    public function setDeliveryPointPostcode(string $delivery_point_postcode): void
    {
        $this->delivery_point_postcode = $delivery_point_postcode;
    }

    /**
     * @return string
     */
    public function getDeliveryPointCity(): string
    {
        return $this->delivery_point_city;
    }

    /**
     * @param string $delivery_point_city
     */
    public function setDeliveryPointCity(string $delivery_point_city): void
    {
        $this->delivery_point_city = $delivery_point_city;
    }

    /**
     * @return string
     */
    public function getInvoiceFullname(): string
    {
        return $this->invoice_fullname;
    }

    /**
     * @param string $invoice_fullname
     */
    public function setInvoiceFullname(string $invoice_fullname): void
    {
        $this->invoice_fullname = $invoice_fullname;
    }

    /**
     * @return string
     */
    public function getInvoiceCompany(): string
    {
        return $this->invoice_company;
    }

    /**
     * @param string $invoice_company
     */
    public function setInvoiceCompany(string $invoice_company): void
    {
        $this->invoice_company = $invoice_company;
    }

    /**
     * @return string
     */
    public function getInvoiceNip(): string
    {
        return $this->invoice_nip;
    }

    /**
     * @param string $invoice_nip
     */
    public function setInvoiceNip(string $invoice_nip): void
    {
        $this->invoice_nip = $invoice_nip;
    }

    /**
     * @return string
     */
    public function getInvoiceAddress(): string
    {
        return $this->invoice_address;
    }

    /**
     * @param string $invoice_address
     */
    public function setInvoiceAddress(string $invoice_address): void
    {
        $this->invoice_address = $invoice_address;
    }

    /**
     * @return string
     */
    public function getInvoicePostcode(): string
    {
        return $this->invoice_postcode;
    }

    /**
     * @param string $invoice_postcode
     */
    public function setInvoicePostcode(string $invoice_postcode): void
    {
        $this->invoice_postcode = $invoice_postcode;
    }

    /**
     * @return string
     */
    public function getInvoiceCity(): string
    {
        return $this->invoice_city;
    }

    /**
     * @param string $invoice_city
     */
    public function setInvoiceCity(string $invoice_city): void
    {
        $this->invoice_city = $invoice_city;
    }

    /**
     * @return string
     */
    public function getInvoiceCountry(): string
    {
        return $this->invoice_country;
    }

    /**
     * @param string $invoice_country
     */
    public function setInvoiceCountry(string $invoice_country): void
    {
        $this->invoice_country = $invoice_country;
    }

    /**
     * @return string
     */
    public function getInvoiceCountryCode(): string
    {
        return $this->invoice_country_code;
    }

    /**
     * @param string $invoice_country_code
     */
    public function setInvoiceCountryCode(string $invoice_country_code): void
    {
        $this->invoice_country_code = $invoice_country_code;
    }

    /**
     * @return string
     */
    public function getWantInvoice(): string
    {
        return $this->want_invoice;
    }

    /**
     * @param string $want_invoice
     */
    public function setWantInvoice(string $want_invoice): void
    {
        $this->want_invoice = $want_invoice;
    }

    /**
     * @return string
     */
    public function getExtraField1(): string
    {
        return $this->extra_field_1;
    }

    /**
     * @param string $extra_field_1
     */
    public function setExtraField1(string $extra_field_1): void
    {
        $this->extra_field_1 = $extra_field_1;
    }

    /**
     * @return string
     */
    public function getExtraField2(): string
    {
        return $this->extra_field_2;
    }

    /**
     * @param string $extra_field_2
     */
    public function setExtraField2(string $extra_field_2): void
    {
        $this->extra_field_2 = $extra_field_2;
    }

    /**
     * @return string
     */
    public function getOrderPage(): string
    {
        return $this->order_page;
    }

    /**
     * @param string $order_page
     */
    public function setOrderPage(string $order_page): void
    {
        $this->order_page = $order_page;
    }

    /**
     * @return int
     */
    public function getPickState(): int
    {
        return $this->pick_state;
    }

    /**
     * @param int $pick_state
     */
    public function setPickState(int $pick_state): void
    {
        $this->pick_state = $pick_state;
    }

    /**
     * @return int
     */
    public function getPackState(): int
    {
        return $this->pack_state;
    }

    /**
     * @param int $pack_state
     */
    public function setPackState(int $pack_state): void
    {
        $this->pack_state = $pack_state;
    }

    /**
     * @return OrderProduct[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param OrderProduct[] $products
     */
    public function setProducts(array $products): void
    {
        $this->products = $products;
    }

}