<?php

namespace ContainerPdJPjG4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMatiereRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\MatiereRepository' shared autowired service.
     *
     * @return \App\Repository\MatiereRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\MatiereRepository'] = new \App\Repository\MatiereRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
