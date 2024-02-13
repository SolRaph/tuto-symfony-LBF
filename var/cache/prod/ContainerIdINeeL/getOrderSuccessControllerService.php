<?php

namespace ContainerIdINeeL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderSuccessControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\OrderSuccessController' shared autowired service.
     *
     * @return \App\Controller\OrderSuccessController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\OrderSuccessController'] = $instance = new \App\Controller\OrderSuccessController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\OrderSuccessController', $container));

        return $instance;
    }
}