<?php

namespace ZoomAPIClientBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;


class KeycloakAPIClientExtension extends Extension
{

    /**
     * this function loads the services form the xml file and provides it the symfony service container.
     * @param array $configs
     * @param ContainerBuilder $container
     * @return void
     * @throws \Exception when the services are not found
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configLoader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config/'));
        $configLoader->load('services.xml');
    }
}