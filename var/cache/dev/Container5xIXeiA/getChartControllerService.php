<?php

namespace Container5xIXeiA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChartControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ChartController' shared autowired service.
     *
     * @return \App\Controller\ChartController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ChartController.php';

        $container->services['App\\Controller\\ChartController'] = $instance = new \App\Controller\ChartController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ChartController', $container));

        return $instance;
    }
}
