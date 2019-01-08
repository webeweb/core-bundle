<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Reference;
use WBW\Bundle\CoreBundle\Manager\ColorManager;
use WBW\Bundle\CoreBundle\Provider\ColorProviderInterface;

/**
 * Color provider compiler pass.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\DependencyInjection\Compiler
 */
class ColorProviderCompilerPass {

    /**
     *{@inheritdoc}
     */
    public function process(ContainerBuilder $container) {

        // Check if the manager is defined.
        if (false === $container->has(ColorManager::SERVICE_NAME)) {
            return;
        }

        // Get the manager.
        $manager = $container->findDefinition(ColorManager::SERVICE_NAME);

        // Find all service IDs with provider tag.
        $providers = $container->findTaggedServiceIds(ColorProviderInterface::TAG_NAME);

        // Register each provider.
        foreach ($providers as $id => $tag) {
            $manager->addMethodCall("registerProvider", [new Reference($id)]);
        }

    }
}
