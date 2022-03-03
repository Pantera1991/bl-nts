<?php


namespace BaseLinkerNts\Log;


use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class AppLogger extends Logger
{
    public const ORDER = 700;
    public const REQUEST = 701;

    /**
     * AppLogger constructor.
     * @param string $channelName
     */
    public function __construct(string $channelName)
    {
        parent::__construct($channelName);
        Logger::$levels[self::ORDER] = 'ORDER';
        Logger::$levels[self::REQUEST] = 'REQUEST';

        $formatter = new LineFormatter(null, null, false, true);

        $errorHandler = new StreamHandler(__DIR__ . '/../../var/log/error.log', Logger::ERROR);
        $errorHandler->setFormatter($formatter);

        $infoHandler = new StreamHandler(__DIR__ . '/../../var/log/info.log', Logger::INFO);
        $infoHandler->setFormatter($formatter);

        $notSendOrderHandler = new StreamHandler(__DIR__ . '/../../var/log/not_send_orders.log', self::ORDER);
        $notSendOrderHandler->setFormatter($formatter);

        $ntsRequest = new StreamHandler(__DIR__ . '/../../var/log/nts_request.log', self::REQUEST);
        $ntsRequest->setFormatter($formatter);

        $this->pushHandler($errorHandler);
        $this->pushHandler($notSendOrderHandler);
        $this->pushHandler($infoHandler);
        $this->pushHandler($ntsRequest);
        $this->setTimezone(new \DateTimeZone("Europe/Warsaw"));
    }
}