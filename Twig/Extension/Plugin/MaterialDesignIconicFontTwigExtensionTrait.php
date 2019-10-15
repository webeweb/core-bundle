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

use WBW\Bundle\CoreBundle\Twig\Extension\Asset\MaterialDesignIconicFontTwigExtension as BaseMaterialDesignIconicFontTwigExtension;

/**
 * Material Design Iconic font Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 * @deprecated since 2.13.0, use {@see WBW\Bundle\CoreBundle\Twig\Extension\Asset\MaterialDesignIconicFontTwigExtensionTrait} instead.
 */
trait MaterialDesignIconicFontTwigExtensionTrait {

    /**
     * Material Design Iconic font Twig extension.
     *
     * @var BaseMaterialDesignIconicFontTwigExtension
     */
    private $materialDesignIconicFontTwigExtension;

    /**
     * Get the Material Design Iconic font Twig extension.
     *
     * @return BaseMaterialDesignIconicFontTwigExtension Returns the Material Design Iconic font Twig extension.
     */
    public function getMaterialDesignIconicFontTwigExtension() {
        return $this->materialDesignIconicFontTwigExtension;
    }

    /**
     * Set the Material Design Iconic font Twig extension.
     *
     * @param BaseMaterialDesignIconicFontTwigExtension|null $materialDesignIconicFontTwigExtension The Material Design Iconic font Twig extension.
     */
    protected function setMaterialDesignIconicFontTwigExtension(BaseMaterialDesignIconicFontTwigExtension $materialDesignIconicFontTwigExtension = null) {
        $this->materialDesignIconicFontTwigExtension = $materialDesignIconicFontTwigExtension;
        return $this;
    }
}
