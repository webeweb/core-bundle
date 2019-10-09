<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Yaml\Yaml;

/**
 * Configuration helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\DependencyInjection
 */
class ConfigurationHelper {

    /**
     * Get a root node.
     *
     * @param TreeBuilder $treeBuilder The tree builder.
     * @param string $nodeName The node name.
     * @return ArrayNodeDefinition|NodeDefinition Returns the root node.
     */
    public static function getRootNode(TreeBuilder $treeBuilder, $nodeName) {

        $method = "getRootNode";
        if (true === method_exists($treeBuilder, $method)) {
            return $treeBuilder->$method();
        } else {
            $method = "root";
        }

        return $treeBuilder->$method($nodeName);
    }

    /**
     * Load a YAML configuration.
     *
     * @param string $directory The directory.
     * @param string $filename The filename.
     * @return array Returns the YAML configuration.
     */
    public static function loadYamlConfig($directory, $filename) {

        $pathname = realpath($directory . "/../Resources/config/" . $filename . ".yml");
        if (false === $pathname) {
            return [];
        }

        return Yaml::parse(file_get_contents($pathname));
    }

    /**
     * Register a container parameter.
     *
     * @param Container $container The container.
     * @param array $config The configuration.
     * @param string $alias The alias.
     * @param string $key The key.
     * @return void
     */
    public static function registerContainerParameter(Container $container, array $config, $alias, $key) {
        if (false === array_key_exists($key, $config)) {
            return;
        }
        $container->setParameter(implode(".", [$alias, $key]), $config[$key]);
    }

    /**
     * Register the container parameters.
     *
     * @param Container $container The container.
     * @param array $config The configuration.
     * @return void
     */
    public static function registerContainerParameters(Container $container, array $config) {
        foreach ($config as $k => $v) {
            $container->setParameter($k, $v);
        }
    }
}
