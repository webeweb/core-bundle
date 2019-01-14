<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Plugin;

use Twig_Environment;
use Twig_SimpleFunction;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Material Design Color Palette Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Plugin
 */
class MaterialDesignColorPaletteTwigExtension extends AbstractMaterialDesignColorPaletteTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.twig.extension.plugin.material_design_color_palette";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The wig environment.
     */
    public function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("materialDesignColorPaletteBackground", [$this, "materialDesignColorPaletteBackgroundFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("materialDesignColorPaletteText", [$this, "materialDesignColorPaletteTextFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("mdcBackground", [$this, "materialDesignColorPaletteBackgroundFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("mdcText", [$this, "materialDesignColorPaletteTextFunction"], ["is_safe" => ["html"]]),
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
