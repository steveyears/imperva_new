<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CdsLandingpageController extends AbstractController
{
    #[Route('/cds/landingpage', name: 'app_cds_landingpage')]
    public function index(): Response
    {
        return $this->render('cds_landingpage/index.html.twig', [
            'controller_name' => 'CdsLandingpageController',
        ]);
    }
}
