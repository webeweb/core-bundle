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
use WBW\Bundle\CoreBundle\Twig\Environment\TwigEnvironmentTrait;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;
use WBW\Library\Types\Helper\StringHelper;

/**
 * Abstract Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
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
    const DEFAULT_HREF = NavigationNodeInterface::DEFAULT_HREF;

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Environment $twigEnvironment) {
        $this->setTwigEnvironment($twigEnvironment);
    }

    /**
     * Display an HTML element.
     *
     * @param string $element The object.
     * @param string|null $content The content.
     * @param array $attrs The attributes.
     * @return string Returns the HTML element.
     */
    public static function coreHtmlElement(string $element, ?string $content, array $attrs = []): string {
        return StringHelper::domNode($element, $content, $attrs);
    }
}
