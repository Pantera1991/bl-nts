<?php

namespace BaseLinkerNts\Model\Nts;

class RegisterVoucherResponse
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
     * @var VoucherType|null $voucher
     */
    protected ?VoucherType $voucher = null;

    /**
     * @param int $response_code
     * @param string $response_message
     * @param VoucherType $voucher
     */
    public function __construct(int $response_code, string $response_message, VoucherType $voucher)
    {
      $this->response_code = $response_code;
      $this->response_message = $response_message;
      $this->voucher = $voucher;
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
     * @return RegisterVoucherResponse
     */
    public function setResponse_code(int $response_code): RegisterVoucherResponse
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
     * @return RegisterVoucherResponse
     */
    public function setResponse_message(string $response_message): RegisterVoucherResponse
    {
      $this->response_message = $response_message;
      return $this;
    }

    /**
     * @return VoucherType
     */
    public function getVoucher(): ?VoucherType
    {
      return $this->voucher;
    }

    /**
     * @param VoucherType $voucher
     * @return RegisterVoucherResponse
     */
    public function setVoucher(VoucherType $voucher): RegisterVoucherResponse
    {
      $this->voucher = $voucher;
      return $this;
    }

}
