<?php

namespace BaseLinkerNts\Model\Nts;

class ClientsUpdateResponse
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
     * @var string|null $customer_code
     */
    protected ?string $customer_code = null;

    /**
     * @param int $response_code
     * @param string $response_message
     * @param string $customer_code
     */
    public function __construct(int $response_code, string $response_message, string $customer_code)
    {
      $this->response_code = $response_code;
      $this->response_message = $response_message;
      $this->customer_code = $customer_code;
    }

    /**
     * @return int
     */
    public function getResponse_code(): ?int
    {
      return $this->response_code;
    }

    /**
     * @param int $response_code
     * @return ClientsUpdateResponse
     */
    public function setResponse_code(int $response_code): ClientsUpdateResponse
    {
      $this->response_code = $response_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponse_message(): ?string
    {
      return $this->response_message;
    }

    /**
     * @param string $response_message
     * @return ClientsUpdateResponse
     */
    public function setResponse_message(string $response_message): ClientsUpdateResponse
    {
      $this->response_message = $response_message;
      return $this;
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
     * @return ClientsUpdateResponse
     */
    public function setCustomer_code(string $customer_code): ClientsUpdateResponse
    {
      $this->customer_code = $customer_code;
      return $this;
    }

}
