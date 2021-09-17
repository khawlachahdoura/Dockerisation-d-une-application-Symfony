<?php

namespace ContainerDxdnnhm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientsTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ClientsType' shared autowired service.
     *
     * @return \App\Form\ClientsType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ClientsType.php';

        return $container->privates['App\\Form\\ClientsType'] = new \App\Form\ClientsType();
    }
}