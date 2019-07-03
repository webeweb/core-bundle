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

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface {

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder() {

        $treeBuilder = new TreeBuilder("wbw_core");

        $rootNode = ConfigurationHelper::getRootNode($treeBuilder, "wbw_core");
        $rootNode->children()
            ->booleanNode("commands")->defaultTrue()->info("Load commands")->end()
            ->booleanNode("event_listeners")->defaultTrue()->info("Load event listeners")->end()
            ->booleanNode("providers")->defaultTrue()->info("Load providers")->end()
            ->booleanNode("security_event_listener")->defaultFalse()->info("Load Security event listener")->end()
            ->booleanNode("twig")->defaultTrue()->info("Load Twig extensions")->end()
            ->arrayNode("quote_providers")->addDefaultsIfNotSet()->children()
                ->booleanNode("worlds_wisdom")->defaultFalse()->info("Load World's wisdom")->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
