<?php


namespace BaseLinkerNts\Model\BaseLinker;


trait ErrorResponse
{
    private string $error_code;
    private string $error_message;

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
}
