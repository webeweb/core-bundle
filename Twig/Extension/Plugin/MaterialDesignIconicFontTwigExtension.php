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
 * Material Design Iconic Font Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Plugin
 */
class MaterialDesignIconicFontTwigExtension extends AbstractMaterialDesignIconicFontTwigExtension implements IconRendererInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.twig.extension.plugin.material_design_iconic_font";

    /**
     * Get the Twig filters.
     *
     * @return Twig_SimpleFilter[] Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new Twig_SimpleFilter("materialDesignIconicFontList", [$this, "materialDesignIconicFontListFilter"], ["is_safe" => ["html"]]),
            new Twig_SimpleFilter("mdiFontList", [$this, "materialDesignIconicFontListFilter"], ["is_safe" => ["html"]]),

            new Twig_SimpleFilter("materialDesignIconicFontListIcon", [$this, "materialDesignIconicFontListIconFilter"], ["is_safe" => ["html"]]),
            new Twig_SimpleFilter("mdiFontListIcon", [$this, "materialDesignIconicFontListIconFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("materialDesignIconicFontIcon", [$this, "materialDesignIconicFontIconFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("mdiIcon", [$this, "materialDesignIconicFontIconFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a Material Design Iconic Font icon.
     *
     * @param array $args The arguments.
     * @return string Returns the Material Design Iconic Font icon.
     */
    public function materialDesignIconicFontIconFunction(array $args = []) {
        return $this->materialDesignIconicFontIcon(IconFactory::parseMaterialDesignIconicFontIcon($args));
    }

    /**
     * Displays a Material Design Iconic Font list.
     *
     * @param array|string $items The items.
     * @return string Returns the Material Design Iconic Font list.
     */
    public function materialDesignIconicFontListFilter($items) {
        return $this->materialDesignIconicFontList($items);
    }

    /**
     * Displays a Material Design Iconic Font list icon.
     *
     * @param string $icon The icon.
     * @param string $content The content.
     * @return string Returns the Material Design Iconic Font list icon.
     */
    public function materialDesignIconicFontListIconFilter($icon, $content) {
        return $this->materialDesignIconicFontListIcon($icon, $content);
    }

    /**
     * {@inheritdoc}
     */
    public function renderIcon($name, $style) {
        return $this->materialDesignIconicFontIconFunction(["name" => $name, "style" => $style]);
    }
}
