<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Psr\Log\LoggerInterface;

class DefaultController extends AbstractController
{

    private $logger;

    public function __construct(LoggerInterface $logger
    ) {
        
        $this->logger = $logger;
    }

    public function index(): Response
    {
        $this->logger->info('I just got the logger');
        // renderizza il template 'home/index.html.twig'
        return $this->render('home/index.html.twig');
    }
}