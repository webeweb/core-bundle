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

/**
 * Material Design color palette Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 * @deprecated since 2.13.0, use {@see WBW\Bundle\CoreBundle\Twig\Extension\Asset\MaterialDesignColorPaletteTwigExtensionTrait} instead.
 */
trait MaterialDesignColorPaletteTwigExtensionTrait {

    /**
     * Material Design color palette Twig extension.
     *
     * @var MaterialDesignColorPaletteTwigExtension
     */
    private $materialDesignColorPaletteTwigExtension;

    /**
     * Get the Material Design color palette Twig extension.
     *
     * @return MaterialDesignColorPaletteTwigExtension Returns the Material Design color palette Twig extension.
     */
    public function getMaterialDesignColorPaletteTwigExtension() {
        return $this->materialDesignColorPaletteTwigExtension;
    }

    /**
     * Set the Material Design color palette Twig extension.
     *
     * @param MaterialDesignColorPaletteTwigExtension|null $materialDesignColorPaletteTwigExtension The Material Design color palette Twig extension.
     */
    protected function setMaterialDesignColorPaletteTwigExtension(MaterialDesignColorPaletteTwigExtension $materialDesignColorPaletteTwigExtension = null) {
        $this->materialDesignColorPaletteTwigExtension = $materialDesignColorPaletteTwigExtension;
        return $this;
    }
}
