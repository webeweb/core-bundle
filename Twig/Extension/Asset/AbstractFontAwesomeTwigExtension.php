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

use WBW\Bundle\CoreBundle\Icon\FontAwesome\FontAwesomeIconInterface;
use WBW\Bundle\CoreBundle\Icon\FontAwesome\FontAwesomeIconRenderer;
use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract Font Awesome Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
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

        $attributes = [];

        $attributes["class"][] = FontAwesomeIconRenderer::renderFont($icon);
        $attributes["class"][] = FontAwesomeIconRenderer::renderName($icon);
        $attributes["class"][] = FontAwesomeIconRenderer::renderSize($icon);
        $attributes["class"][] = FontAwesomeIconRenderer::renderFixedWidth($icon);
        $attributes["class"][] = FontAwesomeIconRenderer::renderBordered($icon);
        $attributes["class"][] = FontAwesomeIconRenderer::renderPull($icon);
        $attributes["class"][] = FontAwesomeIconRenderer::renderAnimation($icon);
        $attributes["style"]   = FontAwesomeIconRenderer::renderStyle($icon);

        return static::coreHTMLElement("i", null, $attributes);
    }

    /**
     * Displays a Font Awesome list.
     *
     * @param array|string $items The items.
     * @return string Returns the Font Awesome list.
     */
    protected function fontAwesomeList($items): string {

        $innerHTML = true === is_array($items) ? implode("\n", $items) : $items;

        return static::coreHTMLElement("ul", $innerHTML, ["class" => "fa-ul"]);
    }

    /**
     * Displays a Font Awesome list icon.
     *
     * @param string $icon The icon.
     * @param string|null $content The content.
     * @return string Returns the Font Awesome list icon.
     */
    protected function fontAwesomeListIcon(string $icon, ?string $content): string {

        $glyphicon = static::coreHTMLElement("span", $icon, ["class" => "fa-li"]);
        $innerHTML = null !== $content ? $content : "";

        return static::coreHTMLElement("li", $glyphicon . $innerHTML);
    }
}
