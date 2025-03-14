<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContinentController extends AbstractController
{
    #[Route('/continent', name: 'app_continent')]
    public function index(): Response
    {
        return $this->render('continent/index.html.twig', [
            'controller_name' => 'ContinentController',
        ]);
    }
}
