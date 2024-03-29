<?php

namespace ContainerDxdnnhm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ULBPYqJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uLBPYqJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uLBPYqJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'serversRepository' => ['privates', 'App\\Repository\\ServersRepository', 'getServersRepositoryService', true],
        ], [
            'serversRepository' => 'App\\Repository\\ServersRepository',
        ]);
    }
}
