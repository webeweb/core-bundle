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
use WBW\Bundle\CoreBundle\Provider\AssetsProviderInterface;

/**
 * Core bundle.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle
 */
class CoreBundle extends Bundle implements AssetsProviderInterface {

    /**
     * Core "Danger".
     *
     * @var string
     */
    const CORE_DANGER = "danger";

    /**
     * Core "Info".
     *
     * @var string
     */
    const CORE_INFO = "info";

    /**
     * Core "Success".
     *
     * @var string
     */
    const CORE_SUCCESS = "success";

    /**
     * Core "Warning".
     *
     * @var string
     */
    const CORE_WARNING = "warning";

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container) {
        $container->addCompilerPass(new ColorProviderCompilerPass());
    }

    /**
     * {@inheritdoc}
     */
    public function getAssetsRelativeDirectory() {
        return "/Resources/assets";
    }

}
