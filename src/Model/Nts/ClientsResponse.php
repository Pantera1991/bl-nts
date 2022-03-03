<?php

namespace BaseLinkerNts\Model\Nts;

class ClientsResponse
{

    /**
     * @var int|null $response_code
     */
    protected ?int $response_code = null;

    /**
     * @var string|null $response_message
     */
    protected ?string $response_message = null;

    /**
     * @var CustomerDataType[] $customer
     */
    protected ?array $customer = [];

    /**
     * @param int $response_code
     * @param string $response_message
     * @param CustomerDataType[] $customer
     */
    public function __construct(int $response_code, string $response_message, $customer = [])
    {
        $this->response_code = $response_code;
        $this->response_message = $response_message;
        $this->customer = $customer;
    }

    /**
     * @return int
     */
    public function getResponseCode(): ?int
    {
        return $this->response_code;
    }

    /**
     * @param int $response_code
     * @return ClientsResponse
     */
    public function setResponseCode(int $response_code): ClientsResponse
    {
        $this->response_code = $response_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseMessage(): ?string
    {
        return $this->response_message;
    }

    /**
     * @param string $response_message
     */
    public function setResponseMessage(string $response_message): void
    {
        $this->response_message = $response_message;
    }

    /**
     * @return CustomerDataType[]
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param CustomerDataType[] $customer
     */
    public function setCustomer($customer = []): void
    {
        $this->customer = $customer;
    }

}
