<?php

namespace ContainerMEsv1Qw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X4QVtQaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.X4QVtQa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.X4QVtQa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'transporter' => ['privates', '.errored..service_locator.X4QVtQa.App\\Entity\\Transporters', NULL, 'Cannot autowire service ".service_locator.X4QVtQa": it needs an instance of "App\\Entity\\Transporters" but this type has been excluded in "config/services.yaml".'],
        ], [
            'em' => '?',
            'transporter' => 'App\\Entity\\Transporters',
        ]);
    }
}
