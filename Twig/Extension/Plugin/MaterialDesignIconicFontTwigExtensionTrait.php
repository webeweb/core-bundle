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
 * Material Design Iconic font Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
trait MaterialDesignIconicFontTwigExtensionTrait {

    /**
     * Material Design Iconic font Twig extension.
     *
     * @var MaterialDesignIconicFontTwigExtension
     */
    private $materialDesignIconicFontTwigExtension;

    /**
     * Get the Material Design Iconic font Twig extension.
     *
     * @return MaterialDesignIconicFontTwigExtension Returns the Material Design Iconic font Twig extension.
     */
    public function getMaterialDesignIconicFontTwigExtension() {
        return $this->materialDesignIconicFontTwigExtension;
    }

    /**
     * Set the Material Design Iconic font Twig extension.
     *
     * @param MaterialDesignIconicFontTwigExtension|null $materialDesignIconicFontTwigExtension The Material Design Iconic font Twig extension.
     */
    protected function setMaterialDesignIconicFontTwigExtension(MaterialDesignIconicFontTwigExtension $materialDesignIconicFontTwigExtension = null) {
        $this->materialDesignIconicFontTwigExtension = $materialDesignIconicFontTwigExtension;
        return $this;
    }
}