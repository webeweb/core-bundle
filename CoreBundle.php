<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use WBW\Bundle\CoreBundle\DependencyInjection\Compiler\ColorProviderCompilerPass;
use WBW\Bundle\CoreBundle\DependencyInjection\Compiler\QuoteProviderCompilerPass;
use WBW\Bundle\CoreBundle\DependencyInjection\CoreExtension;
use WBW\Bundle\CoreBundle\Provider\AssetsProviderInterface;

/**
 * Core bundle.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle
 */
class CoreBundle extends Bundle implements AssetsProviderInterface {

    /**
     * Core "danger".
     *
     * @var string
     * @deprecated since Core bundle 1.11.0, use {@see WBW\Bundle\CoreBundle\CoreInterface} instead.
     */
    const CORE_DANGER = CoreInterface::CORE_DANGER;

    /**
     * Core "info".
     *
     * @var string
     * @deprecated since Core bundle 1.11.0, use {@see WBW\Bundle\CoreBundle\CoreInterface} instead.
     */
    const CORE_INFO = CoreInterface::CORE_INFO;

    /**
     * Core "success".
     *
     * @var string
     * @deprecated since Core bundle 1.11.0, use {@see WBW\Bundle\CoreBundle\CoreInterface} instead.
     */
    const CORE_SUCCESS = CoreInterface::CORE_SUCCESS;

    /**
     * Core "warning".
     *
     * @var string
     * @deprecated since Core bundle 1.11.0, use {@see WBW\Bundle\CoreBundle\CoreInterface} instead.
     */
    const CORE_WARNING = CoreInterface::CORE_WARNING;

    /**
     * {@inheritDoc}
     */
    public function build(ContainerBuilder $container) {
        $container->addCompilerPass(new ColorProviderCompilerPass());
        $container->addCompilerPass(new QuoteProviderCompilerPass());
    }

    /**
     * {@inheritDoc}
     */
    public function getAssetsRelativeDirectory() {
        return "/Resources/assets";
    }

    /**
     * {@inheritDoc}
     */
    public function getContainerExtension() {
        return new CoreExtension();
    }
}
