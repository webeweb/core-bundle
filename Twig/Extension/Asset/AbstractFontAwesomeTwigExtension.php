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

use WBW\Bundle\CoreBundle\Asset\Icon\FontAwesome\FontAwesomeIconInterface;
use WBW\Bundle\CoreBundle\Asset\Icon\FontAwesome\FontAwesomeIconRenderer;
use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract Font Awesome Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Asset
 * @abstract
 */
abstract class AbstractFontAwesomeTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Font Awesome icon.
     *
     * @param FontAwesomeIconInterface $icon The icon.
     * @return string Returns the Font Awesome icon.
     */
    protected function fontAwesomeIcon(FontAwesomeIconInterface $icon): string {

        $attributes = [
            "class" => [
                FontAwesomeIconRenderer::renderFont($icon),
                FontAwesomeIconRenderer::renderName($icon),
                FontAwesomeIconRenderer::renderSize($icon),
                FontAwesomeIconRenderer::renderFixedWidth($icon),
                FontAwesomeIconRenderer::renderBordered($icon),
                FontAwesomeIconRenderer::renderPull($icon),
                FontAwesomeIconRenderer::renderAnimation($icon),
            ],
            "style" => FontAwesomeIconRenderer::renderStyle($icon),
        ];

        return static::coreHtmlElement("i", null, $attributes);
    }

    /**
     * Displays a Font Awesome list.
     *
     * @param array|string $items The items.
     * @return string Returns the Font Awesome list.
     */
    protected function fontAwesomeList($items): string {

        $innerHTML = true === is_array($items) ? implode("\n", $items) : $items;

        return static::coreHtmlElement("ul", $innerHTML, ["class" => "fa-ul"]);
    }

    /**
     * Displays a Font Awesome list icon.
     *
     * @param string $icon The icon.
     * @param string|null $content The content.
     * @return string Returns the Font Awesome list icon.
     */
    protected function fontAwesomeListIcon(string $icon, ?string $content): string {

        $glyphicon = static::coreHtmlElement("span", $icon, ["class" => "fa-li"]);
        $innerHTML = null !== $content ? $content : "";

        return static::coreHtmlElement("li", $glyphicon . $innerHTML);
    }
}
