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

use Twig\Environment;
use Twig\Extension\AbstractExtension;
use WBW\Bundle\CoreBundle\Navigation\NavigationInterface;
use WBW\Bundle\CoreBundle\Service\TwigEnvironmentTrait;
use WBW\Library\Core\Argument\Helper\StringHelper;

/**
 * Abstract Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 * @abstract
 */
abstract class AbstractTwigExtension extends AbstractExtension {

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
     * @param Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Environment $twigEnvironment) {
        $this->setTwigEnvironment($twigEnvironment);
    }

    /**
     * Displays an HTML element.
     *
     * @param string $element The object.
     * @param string $content The content.
     * @param array $attrs The attributes.
     * @return string Returns the HTML element.
     */
    public static function coreHTMLElement($element, $content, array $attrs = []) {
        return StringHelper::domNode($element, $content, $attrs);
    }
}
