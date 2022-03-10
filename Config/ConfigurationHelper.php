<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Config;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Yaml\Yaml;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Configuration helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Config
 */
class ConfigurationHelper {

    /**
     * Get a root node.
     *
     * @param TreeBuilder $treeBuilder The tree builder.
     * @param string $nodeName The node name.
     * @return ArrayNodeDefinition|NodeDefinition Returns the root node.
     */
    public static function getRootNode(TreeBuilder $treeBuilder, string $nodeName): NodeDefinition {
        return $treeBuilder->getRootNode();
    }

    /**
     * Load a YAML configuration.
     *
     * @param string $directory The directory.
     * @param string $filename The filename.
     * @return array Returns the YAML configuration.
     */
    public static function loadYamlConfig(string $directory, string $filename): array {

        $pathname = realpath($directory . "/../Resources/config/" . $filename . ".yml");
        if (false === $pathname) {
            return [];
        }

        return Yaml::parse(file_get_contents($pathname));
    }

    /**
     * Creates a tree builder.
     *
     * @param string $nodeName The node name.
     * @return TreeBuilder Returns the tree builder.
     */
    public static function newTreeBuilder(string $nodeName): TreeBuilder {
        return new TreeBuilder($nodeName);
    }

    /**
     * Register a container parameter.
     *
     * @param Container $container The container.
     * @param array $config The configuration.
     * @param string $alias The alias.
     * @param string $key The key.
     * @param bool $tree Tree ?
     * @return void
     */
    public static function registerContainerParameter(Container $container, array $config, string $alias, string $key, bool $tree = true): void {

        if (false === array_key_exists($key, $config)) {
            return;
        }

        $item = $config[$key];
        $name = "$alias.$key";

        if (true === $tree || false === is_array($item) || false === ArrayHelper::isObject($item)) {
            $container->setParameter($name, $item);
            return;
        }

        foreach ($item as $k => $v) {
            static::registerContainerParameter($container, $item, $name, $k, $tree);
        }
    }

    /**
     * Register the container parameters.
     *
     * @param Container $container The container.
     * @param array $config The configuration.
     * @return void
     */
    public static function registerContainerParameters(Container $container, array $config): void {
        foreach ($config as $k => $v) {
            $container->setParameter($k, $v);
        }
    }
}
