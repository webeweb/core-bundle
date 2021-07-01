<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use WBW\Bundle\CoreBundle\Form\Type\ChangePasswordFormType;
use WBW\Bundle\CoreBundle\Form\Type\GroupFormType;
use WBW\Bundle\CoreBundle\Form\Type\ProfileFormType;
use WBW\Bundle\CoreBundle\Form\Type\RegistrationFormType;
use WBW\Bundle\CoreBundle\Form\Type\ResettingFormType;

/**
 * User configuration.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\DependencyInjection
 */
class UserConfiguration {

    /**
     * Add the user "change password" section.
     *
     * @param ArrayNodeDefinition $node The node.
     * @return void
     */
    protected static function addChangePasswordSection(ArrayNodeDefinition $node): void {
        
        $node
            ->children()
                ->arrayNode("change_password")->addDefaultsIfNotSet()->canBeUnset()
                    ->children()
                        ->arrayNode("form")->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode("type")->defaultValue(ChangePasswordFormType::class)->end()
                                ->scalarNode("name")->defaultValue("wbw_core_change_password_form")->end()
                                ->arrayNode("validation_groups")->defaultValue(["ChangePassword", "Default"])
                                    ->prototype("scalar")->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * Add the user "group" section.
     *
     * @param ArrayNodeDefinition $node The node.
     * @return void
     */
    protected static function addGroupSection(ArrayNodeDefinition $node): void {

        $node
            ->children()
                ->arrayNode("group")->canBeUnset()
                ->children()
                    ->scalarNode("class")->isRequired()->cannotBeEmpty()->end()
                    ->scalarNode("manager")->defaultValue("wbw_core.manager.group.default")->end()
                    ->arrayNode("form")->addDefaultsIfNotSet()
                        ->children()
                            ->scalarNode("type")->defaultValue(GroupFormType::class)->end()
                            ->scalarNode("name")->defaultValue("wbw_core_user_group_form")->end()
                            ->arrayNode("validation_groups")->defaultValue(["Registration", "Default"])
                                ->prototype("scalar")->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * Add the user "profile" section.
     *
     * @param ArrayNodeDefinition $node The node.
     * @return void
     */
    protected static function addProfileSection(ArrayNodeDefinition $node): void {

        $node
            ->children()
                ->arrayNode("profile")->addDefaultsIfNotSet()->canBeUnset()
                    ->children()
                        ->arrayNode("form")->addDefaultsIfNotSet()->fixXmlConfig("validation_group")
                            ->children()
                                ->scalarNode("type")->defaultValue(ProfileFormType::class)->end()
                                ->scalarNode("name")->defaultValue("wbw_core_profile_form")->end()
                                ->arrayNode("validation_groups")->defaultValue(["Profile", "Default"])
                                    ->prototype("scalar")->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * Add the user "registration" section.
     *
     * @param ArrayNodeDefinition $node The node.
     * @return void
     */
    protected static function addRegistrationSection(ArrayNodeDefinition $node): void {

        $node
            ->children()
                ->arrayNode("registration")->addDefaultsIfNotSet()->canBeUnset()
                    ->children()
                        ->arrayNode("confirmation")->addDefaultsIfNotSet()
                            ->children()
                                ->booleanNode("enabled")->defaultFalse()->end()
                                ->scalarNode("template")->defaultValue("@WBWCore/Registration/email.txt.twig")->end()
                                ->arrayNode("from_email")->canBeUnset()
                                    ->children()
                                        ->scalarNode("address")->isRequired()->cannotBeEmpty()->end()
                                        ->scalarNode("sender_name")->isRequired()->cannotBeEmpty()->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                        ->arrayNode("form")->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode("type")->defaultValue(RegistrationFormType::class)->end()
                                ->scalarNode("name")->defaultValue("wbw_core_registration_form")->end()
                                ->arrayNode("validation_groups")->defaultValue(["Registration", "Default"])
                                    ->prototype("scalar")->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * Add the user "resetting" section.
     *
     * @param ArrayNodeDefinition $node The node.
     * @return void
     */
    protected static function addResettingSection(ArrayNodeDefinition $node): void {

        $node
            ->children()
                ->arrayNode("resetting")->addDefaultsIfNotSet()->canBeUnset()
                    ->children()
                        ->scalarNode("retry_ttl")->defaultValue(7200)->end()
                        ->scalarNode("token_ttl")->defaultValue(86400)->end()
                        ->arrayNode("email")->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode("template")->defaultValue("@WBWCore/Resetting/email.txt.twig")->end()
                                ->arrayNode("from_email")->canBeUnset()
                                    ->children()
                                        ->scalarNode("address")->isRequired()->cannotBeEmpty()->end()
                                        ->scalarNode("sender_name")->isRequired()->cannotBeEmpty()->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                        ->arrayNode("form")->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode("type")->defaultValue(ResettingFormType::class)->end()
                                ->scalarNode("name")->defaultValue("wbw_core_resetting_form")->end()
                                ->arrayNode("validation_groups")->defaultValue(["ResetPassword", "Default"])
                                    ->prototype("scalar")->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * Add the user "service" section.
     *
     * @param ArrayNodeDefinition $node The node.
     * @return void
     */
    protected static function addServiceSection(ArrayNodeDefinition $node): void {

        $node
            ->children()
                ->arrayNode("service")->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode("mailer")->defaultValue("wbw.core.mailer.default")->end()
                        ->scalarNode("email_canonicalizer")->defaultValue("wbw.core.utility.canonicalizer.default")->end()
                        ->scalarNode("token_generator")->defaultValue("wbw.core.utility.token_generator.default")->end()
                        ->scalarNode("username_canonicalizer")->defaultValue("wbw.core.utility.canonicalizer.default")->end()
                        ->scalarNode("user_manager")->defaultValue("wbw.core.manager.user.default")->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * Get the configuration.
     *
     * @param ArrayNodeDefinition $node The node.
     * @return void
     */
    public static function getConfig(ArrayNodeDefinition $node): void {

        $dbDrivers = ["orm", "mongodb", "couchdb", "custom"];

        $node
            ->children()
                ->scalarNode("db_driver")
                    ->validate()
                        ->ifNotInArray($dbDrivers)
                        ->thenInvalid("The driver %s is not supported. Please choose one of " . json_encode($dbDrivers))
                    ->end()
                ->isRequired()
                ->cannotBeEmpty()
                ->cannotBeOverwritten()
                ->end()
                ->scalarNode("user_class")->isRequired()->cannotBeEmpty()->end()
                ->scalarNode("firewall_name")->isRequired()->cannotBeEmpty()->end()
                ->scalarNode("model_manager_name")->defaultNull()->end()
                ->booleanNode("use_authentication_listener")->defaultTrue()->end()
                ->booleanNode("use_listener")->defaultTrue()->end()
                ->booleanNode("use_flash_notifications")->defaultTrue()->end()
                ->booleanNode("use_username_form_type")->defaultTrue()->end()
                ->arrayNode("from_email")->isRequired()
                    ->children()
                        ->scalarNode("address")->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode("sender_name")->isRequired()->cannotBeEmpty()->end()
                    ->end()
                ->end()
            ->end()
            // Using the custom driver requires changing the manager services
            ->validate()
                ->ifTrue(function ($v) {

                    $driver  = "custom" === $v["db_driver"];
                    $service = "wbw_core.manager.user.default" === $v["service"]["user_manager"];

                    return $driver && $service;
                })
                ->thenInvalid('You need to specify your own user manager service when using the "custom" driver.')
            ->end()
            ->validate()
                ->ifTrue(function ($v) {

                    $driver  = "custom" === $v["db_driver"];
                    $service = false === empty($v["group"]) && "wbw_core.manager.group.default" === $v["group"]["manager"];

                    return $driver && $service;
                })
                ->thenInvalid('You need to specify your own group manager service when using the "custom" driver.')
            ->end();
        
        static::addChangePasswordSection($node);
        static::addProfileSection($node);
        static::addRegistrationSection($node);
        static::addResettingSection($node);
        static::addServiceSection($node);

        static::addGroupSection($node);
    }
}