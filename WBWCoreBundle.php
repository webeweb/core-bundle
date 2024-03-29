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
use WBW\Bundle\CoreBundle\DependencyInjection\Compiler\JavascriptProviderCompilerPass;
use WBW\Bundle\CoreBundle\DependencyInjection\Compiler\QuoteProviderCompilerPass;
use WBW\Bundle\CoreBundle\DependencyInjection\Compiler\StylesheetProviderCompilerPass;
use WBW\Bundle\CoreBundle\Provider\AssetsProviderInterface;

/**
 * Core bundle.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle
 */
class WBWCoreBundle extends Bundle implements AssetsProviderInterface {

    /**
     * Translation domain.
     *
     * @var string
     */
    const TRANSLATION_DOMAIN = "WBWCoreBundle";

    /**
     * {@inheritDoc}
     */
    public function build(ContainerBuilder $container): void {
        $container->addCompilerPass(new ColorProviderCompilerPass());
        $container->addCompilerPass(new QuoteProviderCompilerPass());
        $container->addCompilerPass(new JavascriptProviderCompilerPass());
        $container->addCompilerPass(new StylesheetProviderCompilerPass());
    }

    /**
     * {@inheritDoc}
     */
    public function getAssetsRelativeDirectory(): string {
        return self::ASSETS_RELATIVE_DIRECTORY;
    }

    /**
     * Get the translation domain.
     *
     * @return string Returns the translation domain.
     */
    public static function getTranslationDomain(): string {
        return self::TRANSLATION_DOMAIN;
    }
}
