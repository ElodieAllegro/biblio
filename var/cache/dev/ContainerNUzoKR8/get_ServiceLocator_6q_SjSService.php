<?php

namespace ContainerNUzoKR8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6q_SjSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6q.sj_S' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6q.sj_S'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartService' => ['privates', 'App\\Service\\CartService', 'getCartServiceService', true],
            'transportersRepository' => ['privates', 'App\\Repository\\TransportersRepository', 'getTransportersRepositoryService', true],
            'usersRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'cartService' => 'App\\Service\\CartService',
            'transportersRepository' => 'App\\Repository\\TransportersRepository',
            'usersRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}