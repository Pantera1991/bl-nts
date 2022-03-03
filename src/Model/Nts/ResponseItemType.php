<?php

namespace BaseLinkerNts\Model\Nts;

class ResponseItemType
{

    /**
     * @var string|null $item_code
     */
    protected ?string $item_code;

    /**
     * @var int|null $item_error_code
     */
    protected ?int $item_error_code;

    /**
     * @var string|null $item_error_message
     */
    protected ?string $item_error_message;


    /**
     * @return string
     */
    public function getItem_code(): ?string
    {
      return $this->item_code;
    }

    /**
     * @param string $item_code
     * @return ResponseItemType
     */
    public function setItem_code(string $item_code): ResponseItemType
    {
      $this->item_code = $item_code;
      return $this;
    }

    /**
     * @return int
     */
    public function getItem_error_code(): ?int
    {
      return $this->item_error_code;
    }

    /**
     * @param int $item_error_code
     * @return ResponseItemType
     */
    public function setItem_error_code(int $item_error_code): ResponseItemType
    {
      $this->item_error_code = $item_error_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getItem_error_message(): ?string
    {
      return $this->item_error_message;
    }

    /**
     * @param string $item_error_message
     * @return ResponseItemType
     */
    public function setItem_error_message(string $item_error_message): ResponseItemType
    {
      $this->item_error_message = $item_error_message;
      return $this;
    }

}
