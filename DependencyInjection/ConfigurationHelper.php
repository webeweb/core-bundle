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

/**
 * Configuration helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\DependencyInjection
 */
class ConfigurationHelper {

    /**
     * Get the root node.
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
}
