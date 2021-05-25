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
use WBW\Bundle\CoreBundle\Manager\Asset\ColorManager;
use WBW\Bundle\CoreBundle\Provider\Asset\ColorProviderInterface;

/**
 * Color provider compiler pass.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\DependencyInjection\Compiler
 */
class ColorProviderCompilerPass extends AbstractProviderCompilerPass {

    /**
     *{@inheritDoc}
     */
    public function process(ContainerBuilder $container): void {
        $this->processing($container, ColorManager::SERVICE_NAME, ColorProviderInterface::COLOR_TAG_NAME);
    }
}
