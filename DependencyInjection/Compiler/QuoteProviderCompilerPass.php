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

use Symfony\Component\DependencyInjection\ContainerBuilder;
use WBW\Library\Symfony\Manager\QuoteManager;
use WBW\Library\Symfony\Provider\QuoteProviderInterface;

/**
 * Quote provider compiler pass.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\DependencyInjection\Compiler
 */
class QuoteProviderCompilerPass extends AbstractProviderCompilerPass {

    /**
     *{@inheritdoc}
     */
    public function process(ContainerBuilder $container): void {
        $this->processing($container, QuoteManager::SERVICE_NAME, QuoteProviderInterface::QUOTE_PROVIDER_TAG_NAME);
    }
}
