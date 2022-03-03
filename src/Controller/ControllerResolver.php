<?php


namespace BaseLinkerNts\Controller;

use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolver as BaseControllerResolver;


class ControllerResolver extends BaseControllerResolver
{
    protected ContainerInterface $container;
    protected ?Logger $logger;
    /**
     * ControllerResolver constructor.
     * @param ContainerInterface $container
     * @param LoggerInterface|null $logger
     */
    public function __construct(ContainerInterface $container, LoggerInterface $logger = null)
    {
        parent::__construct($logger);
        $this->container = $container;
        $this->logger = $logger;
    }

    protected function instantiateController(string $class)
    {
        $instanceController = parent::instantiateController($class);
        if ($instanceController instanceof Controller && null !== $this->container) {
            $instanceController->setContainer($this->container);
            $instanceController->setLogger($this->logger);
        }
        return $instanceController;
    }

}