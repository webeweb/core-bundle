<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension;

use Twig_Environment;
use Twig_SimpleFilter;

/**
 * Renderer Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
class RendererTwigExtension extends AbstractTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.twig.extension.renderer";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The twig environment.
     */
    public function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays a script.
     *
     * @param string $content The content.
     * @return string Returns a script.
     */
    public function coreScriptFilter($content) {

        // Initialize the attributes.
        $attributes = [];

        $attributes["type"] = "text/javascript";

        // Initialize the parameters.
        $innerHTML = null !== $content ? "\n" . $content . "\n" : "";

        // Return the HTML.
        return static::coreHTMLElement("script", $innerHTML, $attributes);
    }

    /**
     * Get the Twig filters.
     *
     * @return Twig_SimpleFilter[] Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new Twig_SimpleFilter("coreScript", [$this, "coreScriptFilter"], ["is_safe" => ["html"]]),
        ];
    }

}
