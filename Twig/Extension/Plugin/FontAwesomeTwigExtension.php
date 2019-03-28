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

use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\CoreBundle\Icon\IconFactory;
use WBW\Bundle\CoreBundle\Renderer\IconRendererInterface;

/**
 * Font Awesome Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Plugin
 */
class FontAwesomeTwigExtension extends AbstractFontAwesomeTwigExtension implements IconRendererInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.twig.extension.plugin.font_awesome";

    /**
     * Displays a Font Awesome icon.
     *
     * @param array $args The arguments.
     * @return string Returns the Font Awesome icon.
     */
    public function fontAwesomeIconFunction(array $args = []) {
        return $this->fontAwesomeIcon(IconFactory::parseFontAwesomeIcon($args));
    }

    /**
     * Displays a Font Awesome list.
     *
     * @param array|string $items The items.
     * @return string Returns the Font Awesome list.
     */
    public function fontAwesomeListFilter($items) {
        return $this->fontAwesomeList($items);
    }

    /**
     * Displays a Font Awesome list icon.
     *
     * @param string $icon The icon.
     * @param string $content The content.
     * @return string Returns the Font Awesome list icon.
     */
    public function fontAwesomeListIconFilter($icon, $content) {
        return $this->fontAwesomeListIcon($icon, $content);
    }

    /**
     * Get the Twig filters.
     *
     * @return Twig_SimpleFilter[] Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new Twig_SimpleFilter("fontAwesomeList", [$this, "fontAwesomeListFilter"], ["is_safe" => ["html"]]),
            new Twig_SimpleFilter("faList", [$this, "fontAwesomeListFilter"], ["is_safe" => ["html"]]),

            new Twig_SimpleFilter("fontAwesomeListIcon", [$this, "fontAwesomeListIconFilter"], ["is_safe" => ["html"]]),
            new Twig_SimpleFilter("faListIcon", [$this, "fontAwesomeListIconFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("fontAwesomeIcon", [$this, "fontAwesomeIconFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("faIcon", [$this, "fontAwesomeIconFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function renderIcon($name, $style) {
        return $this->fontAwesomeIconFunction(["name" => $name, "style" => $style]);
    }
}
