<?php

namespace App\Controller;

use App\Entity\Animal;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnimalController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
      $repository = $this->getDoctrine()->getRepository(Animal::class);
      $animaux = $repository->findAll();
        return $this->render('animal/index.html.twig', [
        "animaux" => $animaux,
        ]);
    }
    #[Route('/animal', name: 'animals')]
    public function animal(): Response
    {
        return $this->render('animal/index.html.twig', [
        
        ]);
    }
}
