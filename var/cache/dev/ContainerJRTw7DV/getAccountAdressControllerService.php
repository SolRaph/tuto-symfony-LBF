<?php

namespace ContainerJRTw7DV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccountAdressControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AccountAdressController' shared autowired service.
     *
     * @return \App\Controller\AccountAdressController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AccountAdressController.php';

        $container->services['App\\Controller\\AccountAdressController'] = $instance = new \App\Controller\AccountAdressController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\AccountAdressController', $container));

        return $instance;
    }
}