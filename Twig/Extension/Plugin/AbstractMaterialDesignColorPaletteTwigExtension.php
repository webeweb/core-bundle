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
use Twig\Extension\AbstractExtension;
use WBW\Bundle\CoreBundle\Color\AmberColorProvider;
use WBW\Bundle\CoreBundle\Color\BlueColorProvider;
use WBW\Bundle\CoreBundle\Color\BlueGreyColorProvider;
use WBW\Bundle\CoreBundle\Color\BrownColorProvider;
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

        $this->addColor(new AmberColorProvider());
        $this->addColor(new BlueColorProvider());
        $this->addColor(new BlueGreyColorProvider());
        $this->addColor(new BrownColorProvider());
        $this->addColor(new );
        $this->addColor(new );
        $this->addColor(new );
        $this->addColor(new );
        $this->addColor(new );
        $this->addColor(new );
        $this->addColor(new );
        $this->addColor(new );
        $this->addColor(new );
        $this->addColor(new );
        $this->addColor(new );
        $this->addColor(new );
        $this->addColor(new );
        $this->addColor(new );
        $this->addColor(new );
    }

    /**
     * Add a color.
     *
     * @param ColorProviderInterface $color The color provider.
     * @return AbstractMaterialDesignColorPaletteTwigExtension Returns this Material Design Color Palette Twig extension.
     */
    protected function addColor(ColorProviderInterface $color) {
        $this->colors[] = $color;
        return $this;
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
