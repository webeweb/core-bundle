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
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use WBW\Bundle\CoreBundle\Config\ConfigurationHelper;

/**
 * Configuration.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface {

    /**
     * Add the core "brushes" section.
     *
     * @param ArrayNodeDefinition $node The node.
     * @param array $plugins The plugins.
     * @return void
     */
    private function addCoreBrushesSection(ArrayNodeDefinition $node, array $plugins): void {

        $node
            ->children()
                ->arrayNode("brushes")->addDefaultsIfNotSet()
                    ->children()
                        ->arrayNode("syntax_highlighter")->info("SyntaxHighlighter brushes")
                            ->prototype("scalar")
                                ->validate()
                                    ->ifNotInArray($plugins["syntax_highlighter"]["brushes"])
                                    ->thenInvalid("The SyntaxHighlighter brush %s is not supported. Please choose one of " . json_encode($plugins["syntax_highlighter"]["brushes"]))
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * Add the core "locales" section.
     *
     * @param ArrayNodeDefinition $node The node.
     * @param array $plugins The plugins.
     * @return void
     */
    private function addCoreLocalesSection(ArrayNodeDefinition $node, array $plugins): void {

        $node
            ->children()
                ->arrayNode("locales")->addDefaultsIfNotSet()
                    ->children()
                        ->variableNode("full_calendar")->defaultValue("en-gb")->info("FullCalendar locale")
                            ->validate()
                                ->ifNotInArray($plugins["full_calendar"]["locales"])
                                ->thenInvalid("The FullCalendar locale %s is not supported. Please choose one of " . json_encode($plugins["full_calendar"]["locales"]))
                            ->end()
                        ->end()
                        ->variableNode("jquery_select2")->defaultValue("en")->info("jQuery Select2 locale")
                            ->validate()
                                ->ifNotInArray($plugins["jquery_select2"]["locales"])
                                ->thenInvalid("The jQuery Select2 locale %s is not supported. Please choose one of " . json_encode($plugins["jquery_select2"]["locales"]))
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * Add the core "plugins" section.
     *
     * @param ArrayNodeDefinition $node The node.
     * @param array $plugins The plugins.
     * @return void
     */
    private function addCorePluginsSection(ArrayNodeDefinition $node, array $plugins): void {

        $node
            ->children()
                ->arrayNode("plugins")->info("Core plug-ins")
                    ->prototype("scalar")
                        ->validate()
                            ->ifNotInArray(array_keys($plugins))
                            ->thenInvalid("The Core plug-in %s is not supported. Please choose one of " . json_encode(array_keys($plugins)))
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * Add the core "themes" section.
     *
     * @param ArrayNodeDefinition $node The node.
     * @param array $plugins The plugins.
     * @return void
     */
    private function addCoreThemesSection(ArrayNodeDefinition $node, array $plugins): void {

        $node
            ->children()
                ->arrayNode("themes")->addDefaultsIfNotSet()
                    ->children()
                        ->variableNode("syntax_highlighter")->defaultValue("Default")->info("SyntaxHighlighter theme")
                            ->validate()
                                ->ifNotInArray($plugins["syntax_highlighter"]["themes"])
                                ->thenInvalid("The SyntaxHighlighter theme %s is not supported. Please choose one of " . json_encode($plugins["syntax_highlighter"]["themes"]))
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * {@inheritDoc}
     *
     * @see https://github.com/webeweb/core-bundle/blob/master/Tests/Fixtures/app/config/config_test.yml
     */
    public function getConfigTreeBuilder(): TreeBuilder {

        $assets  = ConfigurationHelper::loadYamlConfig(__DIR__, "assets");
        $plugins = $assets["assets"]["wbw.core.asset.core"]["plugins"];

        $treeBuilder = ConfigurationHelper::newTreeBuilder(WBWCoreExtension::EXTENSION_ALIAS);

        $rootNode = ConfigurationHelper::getRootNode($treeBuilder, WBWCoreExtension::EXTENSION_ALIAS);
        $rootNode
            ->children()
                ->booleanNode("security")->defaultFalse()->info("Load security event listener")->end()
                ->booleanNode("twig")->defaultTrue()->info("Load Twig extensions")->end()
                ->arrayNode("quote")->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode("worlds_wisdom")->defaultFalse()->info("Load World's wisdom")->end()
                    ->end()
                ->end()
            ->end();

        $this->addCorePluginsSection($rootNode, $plugins);
        $this->addCoreLocalesSection($rootNode, $plugins);
        $this->addCoreThemesSection($rootNode, $plugins);
        $this->addCoreBrushesSection($rootNode, $plugins);

        return $treeBuilder;
    }
}
