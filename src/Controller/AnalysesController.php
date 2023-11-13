<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnalysesController extends AbstractController
{
    #[Route('/analyses', name: 'app_analyses')]
    public function index(): Response
    {
        return $this->render('analyses/index.html.twig', [
            'controller_name' => 'AnalysesController',
        ]);
    }
}
