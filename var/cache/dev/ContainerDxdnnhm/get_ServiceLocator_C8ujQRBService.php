<?php

namespace ContainerDxdnnhm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C8ujQRBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c8ujQRB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.c8ujQRB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'accountsManager' => ['privates', '.errored..service_locator.c8ujQRB.App\\Entity\\AccountsManagers', NULL, 'Cannot autowire service ".service_locator.c8ujQRB": it references class "App\\Entity\\AccountsManagers" but no such service exists.'],
        ], [
            'accountsManager' => 'App\\Entity\\AccountsManagers',
        ]);
    }
}
