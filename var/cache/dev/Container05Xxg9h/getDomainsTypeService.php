<?php

namespace Container05Xxg9h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDomainsTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\DomainsType' shared autowired service.
     *
     * @return \App\Form\DomainsType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/DomainsType.php';

        return $container->privates['App\\Form\\DomainsType'] = new \App\Form\DomainsType();
    }
}
