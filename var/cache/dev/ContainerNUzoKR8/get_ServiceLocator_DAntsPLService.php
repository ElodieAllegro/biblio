<?php

namespace ContainerNUzoKR8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DAntsPLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dAntsPL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dAntsPL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'transporter' => ['privates', '.errored..service_locator.dAntsPL.App\\Entity\\Transporters', NULL, 'Cannot autowire service ".service_locator.dAntsPL": it needs an instance of "App\\Entity\\Transporters" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'transporter' => 'App\\Entity\\Transporters',
        ]);
    }
}
