<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExpenseController extends AbstractController
{
    #[Route('/expense', name: 'app_expense')]
    public function index(): Response
    {
        return $this->render('expense/index.html.twig', [
            'controller_name' => 'ExpenseController',
        ]);
    }
}
