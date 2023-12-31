<?php

namespace ContainerMEsv1Qw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoansControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\User\LoansController' shared autowired service.
     *
     * @return \App\Controller\User\LoansController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/User/LoansController.php';

        $container->services['App\\Controller\\User\\LoansController'] = $instance = new \App\Controller\User\LoansController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\User\\LoansController', $container));

        return $instance;
    }
}
