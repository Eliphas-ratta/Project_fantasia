<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RaceController extends AbstractController
{
    #[Route('/race', name: 'app_race')]
    public function index(): Response
    {
        return $this->render('race/index.html.twig', [
            'controller_name' => 'RaceController',
        ]);
    }
}
