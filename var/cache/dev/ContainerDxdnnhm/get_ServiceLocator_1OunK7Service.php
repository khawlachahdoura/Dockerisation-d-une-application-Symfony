<?php

namespace ContainerDxdnnhm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1OunK7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1OunK_7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1OunK_7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'server' => ['privates', '.errored..service_locator.1OunK_7.App\\Entity\\Servers', NULL, 'Cannot autowire service ".service_locator.1OunK_7": it references class "App\\Entity\\Servers" but no such service exists.'],
        ], [
            'server' => 'App\\Entity\\Servers',
        ]);
    }
}
