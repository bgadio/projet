<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BintaController extends AbstractController
{
    #[Route('/binta', name: 'app_binta')]
    public function index(): Response
    {
        return $this->render('binta/index.html.twig', [
            'controller_name' => 'BintaController',
        ]);
    }
}
