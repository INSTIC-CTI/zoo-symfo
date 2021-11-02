<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('animal/index.html.twig', [
        
        ]);
    }
    #[Route('/animal', name: 'animals')]
    public function animal(): Response
    {
        return $this->render('animal/index.html.twig', [
        
        ]);
    }
}
