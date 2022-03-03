<?php

namespace BaseLinkerNts\Model\Nts;

class ShopLevelsResponse
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
     * @var ShopLevelItem|null $item
     */
    protected ?ShopLevelItem $item;

    /**
     * @param int $response_code
     * @param string $response_message
     * @param ShopLevelItem $item
     */
    public function __construct(int $response_code, string $response_message, ShopLevelItem $item)
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
     * @return ShopLevelsResponse
     */
    public function setResponse_code(int $response_code): ShopLevelsResponse
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
     * @return ShopLevelsResponse
     */
    public function setResponse_message(string $response_message): ShopLevelsResponse
    {
      $this->response_message = $response_message;
      return $this;
    }

    /**
     * @return ShopLevelItem
     */
    public function getItem(): ?ShopLevelItem
    {
      return $this->item;
    }

    /**
     * @param ShopLevelItem $item
     * @return ShopLevelsResponse
     */
    public function setItem(ShopLevelItem $item): ShopLevelsResponse
    {
      $this->item = $item;
      return $this;
    }

}
