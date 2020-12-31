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

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use WBW\Bundle\CoreBundle\Manager\ColorManager;
use WBW\Bundle\CoreBundle\Provider\ColorProviderInterface;

/**
 * Color provider compiler pass.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\DependencyInjection\Compiler
 */
class ColorProviderCompilerPass implements CompilerPassInterface {

    /**
     *{@inheritDoc}
     */
    public function process(ContainerBuilder $container): void {

        if (false === $container->has(ColorManager::SERVICE_NAME)) {
            return;
        }

        $manager = $container->findDefinition(ColorManager::SERVICE_NAME);

        $providers = $container->findTaggedServiceIds(ColorProviderInterface::COLOR_TAG_NAME);
        foreach ($providers as $id => $tag) {
            $manager->addMethodCall("addProvider", [new Reference($id)]);
        }
    }
}
