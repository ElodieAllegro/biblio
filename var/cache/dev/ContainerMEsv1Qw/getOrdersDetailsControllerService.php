<?php

namespace ContainerMEsv1Qw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrdersDetailsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\OrdersDetailsController' shared autowired service.
     *
     * @return \App\Controller\OrdersDetailsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/OrdersDetailsController.php';

        $container->services['App\\Controller\\OrdersDetailsController'] = $instance = new \App\Controller\OrdersDetailsController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\OrdersDetailsController', $container));

        return $instance;
    }
}
