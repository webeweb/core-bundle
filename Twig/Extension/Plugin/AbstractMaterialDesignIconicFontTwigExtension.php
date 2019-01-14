<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Plugin;

use Twig_Environment;
use WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFontIconInterface;
use WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFontIconRenderer;
use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Library\Core\Argument\StringHelper;

/**
 * Abstract Material Design Iconic Font Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\Core\Twig\Extension\Plugin
 * @abstract
 */
abstract class AbstractMaterialDesignIconicFontTwigExtension extends AbstractTwigExtension {

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The twig environment.
     */
    protected function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays a Material Design Iconic Font icon.
     *
     * @param MaterialDesignIconicFontIconInterface $icon The icon.
     * @return string Returns the Material Design Iconic Font icon.
     */
    protected function materialDesignIconicFontIcon(MaterialDesignIconicFontIconInterface $icon) {

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"][] = "zmdi";
        $attributes["class"][] = MaterialDesignIconicFontIconRenderer::renderName($icon);
        $attributes["class"][] = MaterialDesignIconicFontIconRenderer::renderSize($icon);
        $attributes["class"][] = MaterialDesignIconicFontIconRenderer::renderFixedWidth($icon);
        $attributes["class"][] = MaterialDesignIconicFontIconRenderer::renderBorder($icon);
        $attributes["class"][] = MaterialDesignIconicFontIconRenderer::renderPull($icon);
        $attributes["class"][] = MaterialDesignIconicFontIconRenderer::renderSpin($icon);
        $attributes["class"][] = MaterialDesignIconicFontIconRenderer::renderRotate($icon);
        $attributes["class"][] = MaterialDesignIconicFontIconRenderer::renderFlip($icon);
        $attributes["style"]   = MaterialDesignIconicFontIconRenderer::renderStyle($icon);

        // Return the HTML.
        return static::coreHTMLElement("i", null, $attributes);
    }

    /**
     * Displays a Material Design Iconic Font list.
     *
     * @param array|string $items The items.
     * @return string Returns the Material Design Iconic Font list.
     */
    protected function materialDesignIconicFontList($items) {

        // Initialize the parameters.
        $innerHTML = true === is_array($items) ? implode("\n", $items) : $items;

        // Return the HTML.
        return static::coreHTMLElement("ul", $innerHTML, ["class" => "zmdi-hc-ul"]);
    }

    /**
     * Displays a Material Design Iconic Font list icon.
     *
     * @param string $icon The icon.
     * @param string $content The content.
     * @return string Returns the Material Design Iconic Font list icon.
     */
    protected function materialDesignIconicFontListIcon($icon, $content) {

        // Initialize the parameters.
        $glyphicon = null !== $icon ? StringHelper::replace($icon, ["class=\"zmdi"], ["class=\"zmdi-hc-li zmdi"]) : "";
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return static::coreHTMLElement("li", $glyphicon . $innerHTML);
    }
}
