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

use Twig\Extension\AbstractExtension;
use Twig_Environment;
use WBW\Bundle\CoreBundle\Helper\ColorHelper;
use WBW\Bundle\CoreBundle\Provider\ColorProviderInterface;

/**
 * Abstract Material designColorPaletteTwigExtesnion.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Plugin
 * @abstract
 */
abstract class AbstractMaterialDesignColorPaletteTwigExtension extends AbstractExtension {

    /**
     * Colors
     *
     * @var ColorProviderInterface[]
     */
    private $colors;

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The twig environment.
     */
    protected function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);

        $this->setColors(ColorHelper::getMaterialDesignColorPalette());
    }

    /**
     * Get the colors.
     *
     * @return ColorProviderInterface[] Returns the colors.
     */
    protected function getColors() {
        return $this->colors;
    }

    /**
     * Set the colors.
     *
     * @param ColorProviderInterface[] $colors The colors.
     * @return AbstractMaterialDesignColorPaletteTwigExtension Returns this Material Design Color Palette Twig extension.
     */
    protected function setColors(array $colors) {
        $this->colors = $colors;
        return $this;
    }

}
