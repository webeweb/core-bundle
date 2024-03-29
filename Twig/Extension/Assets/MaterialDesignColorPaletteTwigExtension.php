<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Assets;

use Twig\TwigFunction;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Material Design Color Palette Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Assets
 */
class MaterialDesignColorPaletteTwigExtension extends AbstractMaterialDesignColorPaletteTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.assets.material_design_color_palette";

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {

        return [
            new TwigFunction("materialDesignColorPaletteBackground", [$this, "materialDesignColorPaletteBackgroundFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("mdcBackground", [$this, "materialDesignColorPaletteBackgroundFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("materialDesignColorPaletteText", [$this, "materialDesignColorPaletteTextFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("mdcText", [$this, "materialDesignColorPaletteTextFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Display a Material Design Color Palette background.
     *
     * @param array $args The arguments.
     * @return string Returns the Material Design Color Palette background.
     */
    public function materialDesignColorPaletteBackgroundFunction(array $args = []): string {
        return $this->materialDesignColorPalette("bg", ArrayHelper::get($args, "name"), ArrayHelper::get($args, "value"));
    }

    /**
     * Display a Material Design Color Palette text.
     *
     * @param array $args The arguments.
     * @return string Returns the Material Design Color Palette text.
     */
    public function materialDesignColorPaletteTextFunction(array $args = []): string {
        return $this->materialDesignColorPalette("text", ArrayHelper::get($args, "name"), ArrayHelper::get($args, "value"));
    }
}
