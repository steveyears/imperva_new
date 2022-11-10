<?php

namespace Container5xIXeiA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChartjs_BuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'chartjs.builder' shared service.
     *
     * @return \Symfony\UX\Chartjs\Builder\ChartBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-chartjs/Builder/ChartBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-chartjs/Builder/ChartBuilder.php';

        return $container->privates['chartjs.builder'] = new \Symfony\UX\Chartjs\Builder\ChartBuilder();
    }
}
