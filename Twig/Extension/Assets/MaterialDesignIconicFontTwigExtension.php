<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Assets;

use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Factory\IconFactory;
use WBW\Library\Symfony\Renderer\Assets\IconRendererInterface;

/**
 * Material Design Iconic Font Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Assets
 */
class MaterialDesignIconicFontTwigExtension extends AbstractMaterialDesignIconicFontTwigExtension implements IconRendererInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.assets.material_design_iconic_font";

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {

        return [
            new TwigFilter("materialDesignIconicFontList", [$this, "materialDesignIconicFontListFilter"], ["is_safe" => ["html"]]),
            new TwigFilter("mdiFontList", [$this, "materialDesignIconicFontListFilter"], ["is_safe" => ["html"]]),

            new TwigFilter("materialDesignIconicFontListIcon", [$this, "materialDesignIconicFontListIconFilter"], ["is_safe" => ["html"]]),
            new TwigFilter("mdiFontListIcon", [$this, "materialDesignIconicFontListIconFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {

        return [
            new TwigFunction("materialDesignIconicFontIcon", [$this, "materialDesignIconicFontIconFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("mdiIcon", [$this, "materialDesignIconicFontIconFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Display a Material Design Iconic Font icon.
     *
     * @param array $args The arguments.
     * @return string Returns the Material Design Iconic Font icon.
     */
    public function materialDesignIconicFontIconFunction(array $args = []): string {
        return $this->materialDesignIconicFontIcon(IconFactory::parseMaterialDesignIconicFontIcon($args));
    }

    /**
     * Display a Material Design Iconic Font list.
     *
     * @param array|string $items The items.
     * @return string Returns the Material Design Iconic Font list.
     */
    public function materialDesignIconicFontListFilter($items): string {
        return $this->materialDesignIconicFontList($items);
    }

    /**
     * Display a Material Design Iconic Font list icon.
     *
     * @param string $icon The icon.
     * @param string|null $content The content.
     * @return string Returns the Material Design Iconic Font list icon.
     */
    public function materialDesignIconicFontListIconFilter(string $icon, ?string $content): string {
        return $this->materialDesignIconicFontListIcon($icon, $content);
    }

    /**
     * {@inheritDoc}
     */
    public function renderIcon(?string $name, ?string $style): string {
        return $this->materialDesignIconicFontIconFunction(["name" => $name, "style" => $style]);
    }
}
