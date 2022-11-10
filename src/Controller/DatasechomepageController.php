<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DatasechomepageController extends AbstractController
{
    #[Route('/datasechomepage', name: 'datasechomepage')]
    public function index(): Response
    {
        return $this->render('datasechomepage/index.html.twig', [
            'controller_name' => 'DatasechomepageController',
        ]);
    }
}
