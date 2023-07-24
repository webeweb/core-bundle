<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use WBW\Bundle\CoreBundle\Config\ConfigurationHelper;

/**
 * Core extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\DependencyInjection
 */
class WBWCoreExtension extends Extension {

    /**
     * Extension alias.
     *
     * @var string
     */
    const EXTENSION_ALIAS = "wbw_core";

    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container): void {

        $fileLocator = new FileLocator(__DIR__ . "/../Resources/config");

        $serviceLoader = new YamlFileLoader($container, $fileLocator);
        $serviceLoader->load("colors.yml");
        $serviceLoader->load("commands.yml");
        $serviceLoader->load("controllers.yml");
        $serviceLoader->load("event_listeners.yml");
        $serviceLoader->load("managers.yml");
        $serviceLoader->load("providers.yml");
        $serviceLoader->load("services.yml");
        $serviceLoader->load("twig.yml");

        /** @var ConfigurationInterface $configuration */
        $configuration = $this->getConfiguration($configs, $container);

        $config = $this->processConfiguration($configuration, $configs);

        if (true === $config["security"]) {
            $serviceLoader->load("security.yml");
        }

        if (true === $config["quote"]["worlds_wisdom"]) {
            $serviceLoader->load("quote/worlds_wisdom.yml");
        }

        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "security");
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "quote");
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "plugins");
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "locales");
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "themes");
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "brushes");

        $assets = ConfigurationHelper::loadYamlConfig(__DIR__, "assets");
        ConfigurationHelper::registerContainerParameters($container, $assets["assets"]);
    }
}
