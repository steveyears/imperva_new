<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DatasecurityController extends AbstractController
{
    #[Route('/datasecurity', name: 'datasecurity')]
    public function index(): Response
    {
        return $this->render('datasecurity/index.html.twig', [
            'controller_name' => 'DatasecurityController',
        ]);
    }
}
