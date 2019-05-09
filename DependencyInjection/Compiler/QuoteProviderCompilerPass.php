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
use WBW\Bundle\CoreBundle\Manager\QuoteManager;
use WBW\Bundle\CoreBundle\Provider\QuoteProviderInterface;

/**
 * Quote provider compiler pass.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\DependencyInjection\Compiler
 */
class QuoteProviderCompilerPass implements CompilerPassInterface {

    /**
     *{@inheritDoc}
     */
    public function process(ContainerBuilder $container) {

        if (false === $container->has(QuoteManager::SERVICE_NAME)) {
            return;
        }

        $manager = $container->findDefinition(QuoteManager::SERVICE_NAME);

        $providers = $container->findTaggedServiceIds(QuoteProviderInterface::TAG_NAME);
        foreach ($providers as $id => $tag) {
            $manager->addMethodCall("addProvider", [new Reference($id)]);
        }
    }
}
