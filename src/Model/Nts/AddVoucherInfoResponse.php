<?php

namespace BaseLinkerNts\Model\Nts;

class AddVoucherInfoResponse
{

    /**
     * @var int|null $response_code
     */
    protected ?int $response_code;

    /**
     * @var string|null $response_message
     */
    protected ?string $response_message;

    /**
     * @param int $response_code
     * @param string $response_message
     */
    public function __construct(int $response_code, string $response_message)
    {
      $this->response_code = $response_code;
      $this->response_message = $response_message;
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
     * @return AddVoucherInfoResponse
     */
    public function setResponse_code(int $response_code): AddVoucherInfoResponse
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
     * @return AddVoucherInfoResponse
     */
    public function setResponse_message(string $response_message): AddVoucherInfoResponse
    {
      $this->response_message = $response_message;
      return $this;
    }

}
