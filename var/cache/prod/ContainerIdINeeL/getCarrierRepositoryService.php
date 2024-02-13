<?php

namespace ContainerIdINeeL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCarrierRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CarrierRepository' shared autowired service.
     *
     * @return \App\Repository\CarrierRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CarrierRepository'] = new \App\Repository\CarrierRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
