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
     *
     * wbw_core:
     *      commands: true
     *      event_listeners:          true
     *      providers:                true
     *      twig:                     false
     *      locales:
     *          jquery_select2: "en"
     *      plugins:
     *          - "jquery_select2"
     *      quote_providers:
     *          worlds_wisdom: false
     *      security_event_listeners: false
     */
    public function getConfigTreeBuilder() {

        $assets  = ConfigurationHelper::loadYamlConfig(__DIR__, "assets");
        $locales = $assets["assets"]["wbw.core.asset.core"]["plugins"]["jquery_select2"]["locales"];
        $plugins = $assets["assets"]["wbw.core.asset.core"]["plugins"];

        $treeBuilder = new TreeBuilder(WBWCoreExtension::EXTENSION_ALIAS);

        $rootNode = ConfigurationHelper::getRootNode($treeBuilder, WBWCoreExtension::EXTENSION_ALIAS);
        $rootNode
            ->children()
                ->booleanNode("commands")->defaultTrue()->info("Load commands")->end()
                ->booleanNode("event_listeners")->defaultTrue()->info("Load event listeners")->end()
                ->booleanNode("providers")->defaultTrue()->info("Load providers")->end()
                ->booleanNode("twig")->defaultTrue()->info("Load Twig extensions")->end()
                ->arrayNode("locales")->addDefaultsIfNotSet()
                    ->children()
                        ->variableNode("jquery_select2")->defaultValue("en")->info("jQuery Select2 locale")
                            ->validate()
                                ->ifNotInArray($locales)
                                ->thenInvalid("The jQuery Select2 locale %s is not supported. Please choose one of " . json_encode($locales))
                            ->end()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode("plugins")->info("Use plug-ins")
                    ->prototype("scalar")
                        ->validate()
                            ->ifNotInArray(array_keys($plugins))
                            ->thenInvalid("The WBW Core plug-in %s is not supported. Please choose one of " . json_encode(array_keys($plugins)))
                        ->end()
                    ->end()
                ->end()
                ->arrayNode("quote_providers")->addDefaultsIfNotSet()->children()
                    ->booleanNode("worlds_wisdom")->defaultFalse()->info("Load World's wisdom")->end()
                    ->end()
                ->end()
                ->booleanNode("security_event_listener")->defaultFalse()->info("Load Security event listener")->end()
            ->end();

        return $treeBuilder;
    }
}
