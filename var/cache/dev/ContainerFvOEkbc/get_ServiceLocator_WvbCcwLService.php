<?php

namespace ContainerFvOEkbc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WvbCcwLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wvbCcwL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wvbCcwL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'assets' => ['privates', '.errored..service_locator.wvbCcwL.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets', NULL, 'Cannot autowire service ".service_locator.wvbCcwL": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets" but no such service exists.'],
        ], [
            'assets' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets',
        ]);
    }
}
