<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Asset;

use Twig\Environment;
use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\RendererTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\RendererTwigExtensionTrait;

/**
 * Abstract jQuery input mask Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\Core\Twig\Extension\Plugin
 * @abstract
 */
abstract class AbstractJQueryInputMaskTwigExtension extends AbstractTwigExtension {

    use RendererTwigExtensionTrait;

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     * @param RendererTwigExtension $rendererTwigExtension The renderer Twig extension.
     */
    public function __construct(Environment $twigEnvironment, RendererTwigExtension $rendererTwigExtension) {
        parent::__construct($twigEnvironment);

        $this->setRendererTwigExtension($rendererTwigExtension);
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
            return $this->getRendererTwigExtension()->coreScriptFilter($innerHTML);
        }
        return $innerHTML;
    }
}
