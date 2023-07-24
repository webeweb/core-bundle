<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use WBW\Library\Symfony\Manager\JavascriptManager;
use WBW\Library\Symfony\Provider\JavascriptProviderInterface;

/**
 * Javascript provider compiler pass.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\DependencyInjection\Compiler
 */
class JavascriptProviderCompilerPass extends AbstractProviderCompilerPass {

    /**
     *{@inheritDoc}
     */
    public function process(ContainerBuilder $container): void {
        $this->processing($container, JavascriptManager::SERVICE_NAME, JavascriptProviderInterface::JAVASCRIPT_PROVIDER_TAG_NAME);
    }
}
