<?php

namespace App\Controller;

use App\Message\LogMessage;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(MessageBusInterface $bus): Response
    {

        $message = new LogMessage('Bonjour, je suis un log');

        $bus->dispatch($message);

        $message2 = new LogMessage('Bonjour, je suis le log numéro 2');

        $bus->dispatch($message2);

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
