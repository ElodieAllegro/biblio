<?php

namespace ContainerNUzoKR8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F4QRhRKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.F4QRhRK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.F4QRhRK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'image' => ['privates', '.errored..service_locator.F4QRhRK.App\\Entity\\Images', NULL, 'Cannot autowire service ".service_locator.F4QRhRK": it needs an instance of "App\\Entity\\Images" but this type has been excluded in "config/services.yaml".'],
            'pictureService' => ['privates', 'App\\Service\\PictureService', 'getPictureServiceService', true],
        ], [
            'em' => '?',
            'image' => 'App\\Entity\\Images',
            'pictureService' => 'App\\Service\\PictureService',
        ]);
    }
}
