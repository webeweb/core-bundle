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

use WBW\Bundle\CoreBundle\Assets\Icon\MaterialDesignIconicFontIconInterface;
use WBW\Bundle\CoreBundle\Renderer\Assets\MaterialDesignIconicFontIconRenderer;
use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract Material Design Iconic Font Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\Core\Twig\Extension\Asset
 * @abstract
 */
abstract class AbstractMaterialDesignIconicFontTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Material Design Iconic Font icon.
     *
     * @param MaterialDesignIconicFontIconInterface $icon The icon.
     * @return string Returns the Material Design Iconic Font icon.
     */
    protected function materialDesignIconicFontIcon(MaterialDesignIconicFontIconInterface $icon): string {

        $attributes = [
            "class" => [
                "zmdi",
                MaterialDesignIconicFontIconRenderer::renderName($icon),
                MaterialDesignIconicFontIconRenderer::renderSize($icon),
                MaterialDesignIconicFontIconRenderer::renderFixedWidth($icon),
                MaterialDesignIconicFontIconRenderer::renderBorder($icon),
                MaterialDesignIconicFontIconRenderer::renderPull($icon),
                MaterialDesignIconicFontIconRenderer::renderSpin($icon),
                MaterialDesignIconicFontIconRenderer::renderRotate($icon),
                MaterialDesignIconicFontIconRenderer::renderFlip($icon),
            ],
            "style" => MaterialDesignIconicFontIconRenderer::renderStyle($icon),
        ];

        return static::coreHtmlElement("i", null, $attributes);
    }

    /**
     * Displays a Material Design Iconic Font list.
     *
     * @param array|string $items The items.
     * @return string Returns the Material Design Iconic Font list.
     */
    protected function materialDesignIconicFontList($items): string {

        $innerHTML = true === is_array($items) ? implode("\n", $items) : $items;

        return static::coreHtmlElement("ul", $innerHTML, ["class" => "zmdi-hc-ul"]);
    }

    /**
     * Displays a Material Design Iconic Font list icon.
     *
     * @param string|null $icon The icon.
     * @param string|null $content The content.
     * @return string Returns the Material Design Iconic Font list icon.
     */
    protected function materialDesignIconicFontListIcon(?string $icon, ?string $content): string {

        $glyphicon = null !== $icon ? str_replace(['class="zmdi'], ['class="zmdi-hc-li zmdi'], $icon) : "";
        $innerHTML = null !== $content ? $content : "";

        return static::coreHtmlElement("li", $glyphicon . $innerHTML);
    }
}
