<?php

namespace Container05Xxg9h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H1Uin5AService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.h1Uin5A' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.h1Uin5A'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'accountsManagersRepository' => ['privates', 'App\\Repository\\AccountsManagersRepository', 'getAccountsManagersRepositoryService', true],
        ], [
            'accountsManagersRepository' => 'App\\Repository\\AccountsManagersRepository',
        ]);
    }
}
