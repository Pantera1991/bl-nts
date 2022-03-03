<?php


namespace BaseLinkerNts\Exception;


use Exception;
use Throwable;

class NullPointerException extends Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct('NullPointerException: ' . $message, $code, $previous);
    }
}