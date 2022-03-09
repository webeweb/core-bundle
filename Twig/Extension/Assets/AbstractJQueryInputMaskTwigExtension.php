<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Assets;

use Twig\Environment;
use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\AssetsTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\AssetsTwigExtensionTrait;

/**
 * Abstract jQuery input mask Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\Core\Twig\Extension\Assets
 * @abstract
 */
abstract class AbstractJQueryInputMaskTwigExtension extends AbstractTwigExtension {

    use AssetsTwigExtensionTrait;

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     * @param AssetsTwigExtension $rendererTwigExtension The renderer Twig extension.
     */
    public function __construct(Environment $twigEnvironment, AssetsTwigExtension $rendererTwigExtension) {
        parent::__construct($twigEnvironment);

        $this->setAssetsTwigExtension($rendererTwigExtension);
    }

    /**
     * Displays a jQuery input mask.
     *
     * @param string $selector The selector.
     * @param string $mask The mask.
     * @param array $options The options.
     * @param bool $scriptTag Script tag ?
     * @return string Returns the jQuery input mask.
     */
    protected function jQueryInputMask(string $selector, string $mask, array $options, bool $scriptTag): string {

        $template = '$(\'%selector%\').inputmask("%mask%",%arguments%);';

        $innerHTML = str_replace(["%selector%", "%mask%", "%arguments%"], [$selector, $mask, json_encode($options)], $template);

        if (true === $scriptTag) {
            return $this->getAssetsTwigExtension()->coreScriptFilter($innerHTML);
        }
        return $innerHTML;
    }
}
