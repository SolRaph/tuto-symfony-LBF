<?php

namespace ContainerIdINeeL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductsControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ProductsController' shared autowired service.
     *
     * @return \App\Controller\ProductsController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ProductsController'] = $instance = new \App\Controller\ProductsController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\ProductsController', $container));

        return $instance;
    }
}
