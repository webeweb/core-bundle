<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Plugin;

use Twig_Environment;
use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\RendererTwigExtension;
use WBW\Library\Core\Argument\StringHelper;

/**
 * Abstract jQuery input mask Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\Core\Twig\Extension\Plugin
 * @abstract
 */
abstract class AbstractJQueryInputMaskTwigExtension extends AbstractTwigExtension {

    /**
     * Renderer.
     *
     * @var RendererTwigExtension
     */
    private $renderer;

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The twig environment.
     * @param RendererTwigExtension $renderer The renderer.
     */
    protected function __construct(Twig_Environment $twigEnvironment, RendererTwigExtension $renderer) {
        parent::__construct($twigEnvironment);
        $this->setRenderer($renderer);
    }

    /**
     * Get the renderer.
     *
     * @return RendererTwigExtension Returns the renderer.
     */
    public function getRenderer() {
        return $this->renderer;
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
    protected function jQueryInputMask($selector, $mask, array $options, $scriptTag) {

        // Initialize the template.
        $template = "$('%selector%').inputmask(\"%mask%\",%arguments%);";

        // Initialize the parameters.
        $innerHTML = StringHelper::replace($template, ["%selector%", "%mask%", "%arguments%"], [$selector, $mask, json_encode($options)]);

        // Return the HTML
        if (true === $scriptTag) {
            return $this->getRenderer()->coreScriptFilter($innerHTML);
        }
        return $innerHTML;
    }

    /**
     * Set the renderer.
     *
     * @param RendererTwigExtension $renderer The renderer.
     * @return AbstractJQueryInputMaskTwigExtension Returns this jQuery Twig extension.
     */
    protected function setRenderer(RendererTwigExtension $renderer) {
        $this->renderer = $renderer;
        return $this;
    }

}
