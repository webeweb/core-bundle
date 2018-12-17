<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension;

use Twig_Environment;
use Twig_Extension;
use WBW\Bundle\CoreBundle\Navigation\NavigationInterface;
use WBW\Bundle\CoreBundle\Service\TwigEnvironmentTrait;
use WBW\Library\Core\Argument\StringHelper;

/**
 * Abstract Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 * @abstract
 */
abstract class AbstractTwigExtension extends Twig_Extension {

    use TwigEnvironmentTrait;

    /**
     * Default content.
     *
     * @var string
     */
    const DEFAULT_CONTENT = "&nbsp;";

    /**
     * Default href.
     *
     * @var string
     */
    const DEFAULT_HREF = NavigationInterface::NAVIGATION_HREF_DEFAULT;

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The twig environment.
     */
    protected function __construct(Twig_Environment $twigEnvironment) {
        $this->setTwigEnvironment($twigEnvironment);
    }

    /**
     * Displays a Core HTML element.
     *
     * @param string $element The object.
     * @param string $content The content.
     * @param array $attrs The attributes.
     * @return string Returns the HTML element.
     */
    public static function coreHTMLElement($element, $content, array $attrs = []) {

        // Initialize the templates.
        $template = "<%element%%attributes%>%innerHTML%</%element%>";

        // Initialize the attributes.
        $attributes = trim(StringHelper::parseArray($attrs));
        if (0 < strlen($attributes)) {
            $attributes = " " . $attributes;
        }

        // Initialize the parameters.
        $innerHTML = null !== $content ? trim($content, " ") : "";

        // Return the HTML.
        return StringHelper::replace($template, ["%element%", "%attributes%", "%innerHTML%"], [trim($element), $attributes, $innerHTML]);
    }

}
