<?php

namespace ContainerNUzoKR8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMainController3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\User\MainController' shared autowired service.
     *
     * @return \App\Controller\User\MainController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/User/MainController.php';

        $container->services['App\\Controller\\User\\MainController'] = $instance = new \App\Controller\User\MainController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\User\\MainController', $container));

        return $instance;
    }
}
