<?php


namespace App\MessageHandler;

use App\Message\LogMessage;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class LogMessageHandler implements MessageHandlerInterface
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke(LogMessage $logMessage)
    {
        sleep(5);

        $this->logger->info($logMessage->getMessage());
    }
}