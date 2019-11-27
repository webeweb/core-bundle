<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Asset;

use Twig\TwigFunction;
use WBW\Library\Core\Argument\Helper\ArrayHelper;

/**
 * Material Design Color Palette Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Asset
 */
class MaterialDesignColorPaletteTwigExtension extends AbstractMaterialDesignColorPaletteTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.asset.material_design_color_palette";

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new TwigFunction("materialDesignColorPaletteBackground", [$this, "materialDesignColorPaletteBackgroundFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("mdcBackground", [$this, "materialDesignColorPaletteBackgroundFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("materialDesignColorPaletteText", [$this, "materialDesignColorPaletteTextFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("mdcText", [$this, "materialDesignColorPaletteTextFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a Material Design Color Palette background.
     *
     * @param array $args The arguments.
     * @return string Returns the Material Design Color Palette background.
     */
    public function materialDesignColorPaletteBackgroundFunction(array $args = []) {
        return $this->materialDesignColorPalette("bg", ArrayHelper::get($args, "name"), ArrayHelper::get($args, "value"));
    }

    /**
     * Displays a Material Design Color Palette text.
     *
     * @param array $args The arguments.
     * @return string Returns the Material Design Color Palette text.
     */
    public function materialDesignColorPaletteTextFunction(array $args = []) {
        return $this->materialDesignColorPalette("text", ArrayHelper::get($args, "name"), ArrayHelper::get($args, "value"));
    }
}
