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

use Exception;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use WBW\Bundle\CoreBundle\Component\DependencyInjection\ConfigurationHelper;

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
        $serviceLoader->load("services.yml");

        /** @var ConfigurationInterface $configuration */
        $configuration = $this->getConfiguration($configs, $container);

        $config = $this->processConfiguration($configuration, $configs);

        if (true === $config["commands"]) {
            $serviceLoader->load("commands.yml");
        }

        if (true === $config["event_listeners"]) {
            $serviceLoader->load("event_listeners.yml");
        }

        if (true === $config["providers"]) {
            $serviceLoader->load("providers.yml");
        }

        if (true === $config["security"]) {
            $serviceLoader->load("security.yml");
        }

        if (true === $config["twig"]) {
            $serviceLoader->load("twig.yml");
        }

        if (true === $config["quote"]["worlds_wisdom"]) {
            $serviceLoader->load("quote/worlds_wisdom.yml");
        }

        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "commands");
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "event_listeners");
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "providers");
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "security");
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "twig");
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "user", false);
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "quote");
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "plugins");
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "locales");
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "themes");
        ConfigurationHelper::registerContainerParameter($container, $config, $this->getAlias(), "brushes");

        $assets = ConfigurationHelper::loadYamlConfig(__DIR__, "assets");
        ConfigurationHelper::registerContainerParameters($container, $assets["assets"]);
    }

    /**
     * Load the "change password" services configuration.
     *
     * @param array $config The configuration.
     * @param YamlFileLoader $loader The loader.
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    protected function loadChangePassword(array $config, YamlFileLoader $loader): void {

        if (false === array_key_exists("change_password", $config)) {
            return;
        }

        $loader->load("services/services_change_password.yml");
    }

    /**
     * Load the "group" services configuration.
     *
     * @param array $config The configuration.
     * @param YamlFileLoader $loader The loader.
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    protected function loadGroup(array $config, YamlFileLoader $loader): void {

        if (false === array_key_exists("group", $config)) {
            return;
        }

        $loader->load("services/doctrine_group.yml");
        $loader->load("services/services_group.yml");
    }

    /**
     * Load the "profile" services configuration.
     *
     * @param array $config The configuration.
     * @param YamlFileLoader $loader The loader.
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    protected function loadProfile(array $config, YamlFileLoader $loader): void {

        if (false === array_key_exists("profile", $config)) {
            return;
        }

        $loader->load("services/services_profile.yml");
    }

    /**
     * Load the "registration" services configuration.
     *
     * @param array $config The configuration.
     * @param YamlFileLoader $loader The loader.
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    protected function loadRegistration(array $config, YamlFileLoader $loader): void {

        if (false === array_key_exists("registration", $config)) {
            return;
        }

        $loader->load("services/services_registration.yml");
    }

    /**
     * Load the "resetting" services configuration.
     *
     * @param array $config The configuration.
     * @param YamlFileLoader $loader The loader.
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    protected function loadResetting(array $config, YamlFileLoader $loader): void {

        if (false === array_key_exists("resetting", $config)) {
            return;
        }

        $loader->load("services/services_resetting.yml");
    }
}
