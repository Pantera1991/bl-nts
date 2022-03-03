<?php


namespace BaseLinkerNts\Controller;

use BaseLinkerNts\Enum\NtsResponseCode;
use BaseLinkerNts\Enum\OrderStatus;
use BaseLinkerNts\Exception\NullPointerException;
use BaseLinkerNts\Log\AppLogger;
use BaseLinkerNts\Model\BaseLinker\OrderResponse;
use BaseLinkerNts\Model\Nts\Response;
use Monolog\Logger;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;


abstract class Controller implements ContainerAwareInterface
{
    protected ?ContainerInterface $container;
    protected ?Logger $logger;

    /**
     * @param ContainerInterface|null $container
     */
    public function setContainer(ContainerInterface $container = null): void
    {
        $this->container = $container;
    }

    /**
     * @return ContainerInterface|null
     */
    public function getContainer(): ContainerInterface
    {
        return $this->container;
    }

    /**
     * @param Logger|null $logger
     */
    public function setLogger(Logger $logger = null): void
    {
        $this->logger = $logger;
    }

    /**
     * @param OrderResponse|null $orderResponse
     * @throws NullPointerException
     */
    protected function baseLinkerResponseValidate(?OrderResponse $orderResponse): void
    {
        if (null === $orderResponse) {
            throw new NullPointerException("Variable orderResponse is not initialized.");
        }

        if (OrderStatus::ERROR === $orderResponse->getStatus()) {
            throw new BadRequestHttpException(
                "BaseLinker error: " . $orderResponse->getErrorMessage()
            );
        }
    }

    /**
     * @param Response|null $ntsResponse
     * @param int $baseLinkerId
     * @param string|null $lastSoapRequest
     * @return bool
     */
    protected function ntsResponseValidate(
        ?Response $ntsResponse,
        int $baseLinkerId,
        string $lastSoapRequest = null
    ): bool {
        if (null === $ntsResponse) {
            $this->logger->log(
                AppLogger::ORDER,
                'Variable $ntsResponse is null. blOrderId: ' . $baseLinkerId
            );
            return false;
        }

        if (NtsResponseCode::Success !== $ntsResponse->getResponseCode()) {
            if (null !== $lastSoapRequest && NtsResponseCode::DuplicateOrderId !== $ntsResponse->getResponseCode()) {
                $this->logger->log(AppLogger::REQUEST, $lastSoapRequest);
            }
            $this->logger->log(
                AppLogger::ORDER,
                'Nts error code: ' . $ntsResponse->getResponseCode() . ', message:' . $ntsResponse->getResponseMessage()
            );
            return false;
        }
        return true;
    }
}