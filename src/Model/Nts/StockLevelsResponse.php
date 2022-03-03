<?php

namespace BaseLinkerNts\Model\Nts;

class StockLevelsResponse
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
     * @var StockLevel|null $item
     */
    protected ?StockLevel $item;

    /**
     * @param int $response_code
     * @param string $response_message
     * @param StockLevel $item
     */
    public function __construct(int $response_code, string $response_message, StockLevel $item)
    {
      $this->response_code = $response_code;
      $this->response_message = $response_message;
      $this->item = $item;
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
     * @return StockLevelsResponse
     */
    public function setResponse_code(int $response_code): StockLevelsResponse
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
     * @return StockLevelsResponse
     */
    public function setResponse_message(string $response_message): StockLevelsResponse
    {
      $this->response_message = $response_message;
      return $this;
    }

    /**
     * @return StockLevel
     */
    public function getItem(): ?StockLevel
    {
      return $this->item;
    }

    /**
     * @param StockLevel $item
     * @return StockLevelsResponse
     */
    public function setItem(StockLevel $item): StockLevelsResponse
    {
      $this->item = $item;
      return $this;
    }

}
