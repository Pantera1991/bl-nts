<?php


namespace BaseLinkerNts\Model\BaseLinker;


class OrderResponse
{
    /**
     * @var Order[]
     */
    private array $orders;
    private string $status;
    private string $error_message;
    private string $error_code;

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return Order[]
     */
    public function getOrders(): array
    {
        return $this->orders;
    }

    /**
     * @param Order[] $orders
     */
    public function setOrders(array $orders): void
    {
        $this->orders = $orders;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->error_message;
    }

    /**
     * @param string $error_message
     */
    public function setErrorMessage(string $error_message): void
    {
        $this->error_message = $error_message;
    }

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->error_code;
    }

    /**
     * @param string $error_code
     */
    public function setErrorCode(string $error_code): void
    {
        $this->error_code = $error_code;
    }
}