<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class ChartController extends AbstractController
{
    #[Route('/chart', name: 'chart')]
    public function index(ChartBuilderInterface $chartBuilder): Response
    {
        $chart = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);

        $chart->setData([
            'datasets' => [
                [
                    'data' => [70, 30],
                    'backgroundColor' => ['#f5730d', '#000000']
                ],
            ],
        ]);

        $chart->setOptions([
            'cutout' => [60],
            'tooltip' => [
                'enabled' => false,
            ],
        ]);

        return $this->render('chart/index.html.twig', [
            'chart' => $chart,
        ]);
    }
}
