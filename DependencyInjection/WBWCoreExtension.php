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

/**
 * Core extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\DependencyInjection
 */
class WBWCoreExtension extends Extension {

    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container) {

        $fileLocator = new FileLocator(__DIR__ . "/../Resources/config");

        $serviceLoader = new YamlFileLoader($container, $fileLocator);
        $serviceLoader->load("services.yml");

        /** @var ConfigurationInterface $configuration */
        $configuration = $this->getConfiguration($configs, $container);

        $config = $this->processConfiguration($configuration, $configs);

        if (true === $config["commands"]) {
            $container->setParameter(implode(".", [$this->getAlias(), "commands"]), $config["commands"]);
            $serviceLoader->load("commands.yml");
        }

        if (true === $config["event_listeners"]) {
            $container->setParameter(implode(".", [$this->getAlias(), "event_listeners"]), $config["event_listeners"]);
            $serviceLoader->load("event_listeners.yml");
        }

        if (true === $config["providers"]) {
            $container->setParameter(implode(".", [$this->getAlias(), "providers"]), $config["providers"]);
            $serviceLoader->load("providers.yml");
        }

        if (true === $config["security_event_listener"]) {
            $container->setParameter(implode(".", [$this->getAlias(), "security_event_listener"]), $config["security_event_listener"]);
            $serviceLoader->load("services/security_event_listener.yml");
        }

        if (true === $config["twig"]) {
            $container->setParameter(implode(".", [$this->getAlias(), "twig"]), $config["twig"]);
            $serviceLoader->load("twig.yml");
        }

        if (true === $config["quote_providers"]["worlds_wisdom"]) {
            $container->setParameter(implode(".", [$this->getAlias(), "quote_providers", "worlds_wisdom"]), $config["quote_providers"]["worlds_wisdom"]);
            $serviceLoader->load("services/worlds_wisdom_quote_provider.yml");
        }
    }
}
