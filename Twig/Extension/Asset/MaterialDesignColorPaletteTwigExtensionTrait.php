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

/**
 * Material Design color palette Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Asset
 */
trait MaterialDesignColorPaletteTwigExtensionTrait {

    /**
     * Material Design color palette Twig extension.
     *
     * @var MaterialDesignColorPaletteTwigExtension|null
     */
    private $materialDesignColorPaletteTwigExtension;

    /**
     * Get the Material Design color palette Twig extension.
     *
     * @return MaterialDesignColorPaletteTwigExtension|null Returns the Material Design color palette Twig extension.
     */
    public function getMaterialDesignColorPaletteTwigExtension(): ?MaterialDesignColorPaletteTwigExtension {
        return $this->materialDesignColorPaletteTwigExtension;
    }

    /**
     * Set the Material Design color palette Twig extension.
     *
     * @param MaterialDesignColorPaletteTwigExtension|null $materialDesignColorPaletteTwigExtension The Material Design color palette Twig extension.
     * @return self Returns this instance.
     */
    protected function setMaterialDesignColorPaletteTwigExtension(?MaterialDesignColorPaletteTwigExtension $materialDesignColorPaletteTwigExtension): self {
        $this->materialDesignColorPaletteTwigExtension = $materialDesignColorPaletteTwigExtension;
        return $this;
    }
}
