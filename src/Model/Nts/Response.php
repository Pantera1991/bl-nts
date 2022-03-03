<?php

namespace BaseLinkerNts\Model\Nts;

class Response
{

    /**
     * @var string $ord_id
     */
    protected string $ord_id;

    /**
     * @var int $response_code
     */
    protected int $response_code;

    /**
     * @var string $response_message
     */
    protected string $response_message;

    /**
     * @var ResultType $result
     */
    protected ResultType $result;

    /**
     * @return string
     */
    public function getOrdId(): string
    {
        return $this->ord_id;
    }

    /**
     * @param string $ord_id
     */
    public function setOrdId(string $ord_id): void
    {
        $this->ord_id = $ord_id;
    }

    /**
     * @return int
     */
    public function getResponseCode(): int
    {
        return $this->response_code;
    }

    /**
     * @param int $response_code
     */
    public function setResponseCode(int $response_code): void
    {
        $this->response_code = $response_code;
    }

    /**
     * @return string
     */
    public function getResponseMessage(): string
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
     * @return ResultType
     */
    public function getResult(): ResultType
    {
        return $this->result;
    }

    /**
     * @param ResultType $result
     */
    public function setResult(ResultType $result): void
    {
        $this->result = $result;
    }
}
