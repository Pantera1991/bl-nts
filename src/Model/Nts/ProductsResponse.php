<?php

namespace BaseLinkerNts\Model\Nts;

class ProductsResponse
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
     * @var Product|null $product
     */
    protected ?Product $product;

    /**
     * @param int $response_code
     * @param string $response_message
     * @param Product $product
     */
    public function __construct(int $response_code, string $response_message, Product $product)
    {
      $this->response_code = $response_code;
      $this->response_message = $response_message;
      $this->product = $product;
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
     * @return ProductsResponse
     */
    public function setResponse_code(int $response_code): ProductsResponse
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
     * @return ProductsResponse
     */
    public function setResponse_message(string $response_message): ProductsResponse
    {
      $this->response_message = $response_message;
      return $this;
    }

    /**
     * @return Product
     */
    public function getProduct(): ?Product
    {
      return $this->product;
    }

    /**
     * @param Product $product
     * @return ProductsResponse
     */
    public function setProduct(Product $product): ProductsResponse
    {
      $this->product = $product;
      return $this;
    }

}
