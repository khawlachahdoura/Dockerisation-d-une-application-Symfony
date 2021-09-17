<?php

namespace ContainerDxdnnhm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NCyIbkWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NCyIbkW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NCyIbkW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'client' => ['privates', '.errored..service_locator.NCyIbkW.App\\Entity\\Clients', NULL, 'Cannot autowire service ".service_locator.NCyIbkW": it references class "App\\Entity\\Clients" but no such service exists.'],
        ], [
            'client' => 'App\\Entity\\Clients',
        ]);
    }
}
