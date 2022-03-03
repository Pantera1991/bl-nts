<?php

namespace BaseLinkerNts\Model\Nts;

class StatusResponse
{

    /**
     * @var string|null $ord_id
     */
    protected ?string $ord_id;

    /**
     * @var int|null $response_code
     */
    protected ?int $response_code;

    /**
     * @var string|null $response_message
     */
    protected ?string $response_message;

    /**
     * @var StatusResultType|null $statusResult
     */
    protected ?StatusResultType $statusResult;

    /**
     * @param string $ord_id
     * @param int $response_code
     * @param string $response_message
     * @param StatusResultType $statusResult
     */
    public function __construct(
        string $ord_id,
        int $response_code,
        string $response_message,
        StatusResultType $statusResult
    ) {
        $this->ord_id = $ord_id;
        $this->response_code = $response_code;
        $this->response_message = $response_message;
        $this->statusResult = $statusResult;
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
     * @return StatusResponse
     */
    public function setOrd_id(string $ord_id): StatusResponse
    {
        $this->ord_id = $ord_id;
        return $this;
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
     * @return StatusResponse
     */
    public function setResponse_code(int $response_code): StatusResponse
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
     * @return StatusResponse
     */
    public function setResponse_message(string $response_message): StatusResponse
    {
        $this->response_message = $response_message;
        return $this;
    }

    /**
     * @return StatusResultType
     */
    public function getStatusResult(): ?StatusResultType
    {
        return $this->statusResult;
    }

    /**
     * @param StatusResultType $statusResult
     * @return StatusResponse
     */
    public function setStatusResult(StatusResultType $statusResult): StatusResponse
    {
        $this->statusResult = $statusResult;
        return $this;
    }

}
