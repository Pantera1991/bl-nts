<?php


namespace BaseLinkerNts\Service\BaseLinker;

use BaseLinkerNts\Utils\JsonDecoder;
use GuzzleHttp\Client;

use Monolog\Logger;

abstract class AbstractBaseLinkerService
{
    protected const BASE_URL = 'https://api.baselinker.com/connector.php';
    protected string $token;
    protected ?Logger $logger;
    protected Client $httpClient;
    protected JsonDecoder $jsonDecoder;
    protected array $defaultHeaders = [
        'Content-type' => 'application/x-www-form-urlencoded'
    ];

    /**
     * AbstractOrderLinkerService constructor.
     * @param string $token
     * @param Logger|null $logger
     */
    public function __construct(string $token = "", Logger $logger = null)
    {
        $this->logger = $logger;
        $this->token = $token;
        $this->httpClient = new Client();
        $this->jsonDecoder = new JsonDecoder();
    }

    /**
     * @param string $methodName
     * @param array $parameters
     * @return array
     */
    protected function generateOptions(string $methodName, array $parameters): array
    {
        return [
            'headers' => $this->defaultHeaders,
            'form_params' => [
                'token' => $this->token,
                'method' => $methodName,
                'parameters' => $this->jsonDecoder->serialize($parameters)
            ]
        ];
    }

    protected function setToken(string $token): void
    {
        $this->token = $token;
    }

}