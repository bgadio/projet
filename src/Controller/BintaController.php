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
        return $this->render('binta/acceuil.html.twig', [
            'controller_name' => 'BintaController',
        ]);
    }

    #[Route('/index', name: 'Acceuil')]
    public function Acceuil(): Response
    {
        return $this->render('binta/index.html.twig', [
            'controller_name' => 'BintaController',
        ]);
     }

    #[Route('/cv', name: 'cv')]
    public function cv(): Response
    {
        return $this->render('binta/cv.html.twig', [
            'controller_name' => 'BintaController',
        ]);
    }
    
    #[Route('/Portfolio', name: 'Portfolio')]
    public function portfolio(): Response
    {
        return $this->render('binta/Portfolio.html.twig', [
            'controller_name' => 'BintaController',
        ]);
     }

     #[Route('/binta/loisirs', name: 'loisirs')]
     public function loisirs(): Response
     {
         return $this->render('binta/loisirs.html.twig', [
             'controller_name' => 'BintaController',
         ]);
      }
      #[Route('/Formulaire', name: 'Formulaire')]
     public function Formulaire(): Response
     {
         return $this->render('binta/Formulaire.html.twig', [
             'controller_name' => 'BintaController',
         ]);
      }
}
    