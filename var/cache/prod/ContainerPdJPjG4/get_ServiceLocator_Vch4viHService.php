<?php

namespace ContainerPdJPjG4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vch4viHService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Vch4viH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Vch4viH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'chuteRepository' => ['privates', 'App\\Repository\\ChuteRepository', 'getChuteRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'matiereRepository' => ['privates', 'App\\Repository\\MatiereRepository', 'getMatiereRepositoryService', true],
        ], [
            'chuteRepository' => 'App\\Repository\\ChuteRepository',
            'manager' => '?',
            'matiereRepository' => 'App\\Repository\\MatiereRepository',
        ]);
    }
}
