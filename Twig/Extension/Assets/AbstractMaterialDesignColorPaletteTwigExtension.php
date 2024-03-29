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

use Twig\Environment;
use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Library\Symfony\Factory\ColorFactory;
use WBW\Library\Symfony\Provider\ColorProviderInterface;

/**
 * Abstract Material Design Color Palette Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Assets
 * @abstract
 */
abstract class AbstractMaterialDesignColorPaletteTwigExtension extends AbstractTwigExtension {

    /**
     * Colors.
     *
     * @var ColorProviderInterface[]
     */
    private $colors;

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);

        $this->setColors(ColorFactory::newMaterialDesignColorPalette());
    }

    /**
     * Get the colors.
     *
     * @return ColorProviderInterface[] Returns the colors.
     */
    protected function getColors(): array {
        return $this->colors;
    }

    /**
     * Display a Material Design Color Palette.
     *
     * @param string $type The type.
     * @param string|null $name The name.
     * @param string|null $value The value.
     * @return string Returns the Material Design Color Palette.
     */
    protected function materialDesignColorPalette(string $type, ?string $name, ?string $value): string {

        $color = $this->getColors()[0];

        foreach ($this->getColors() as $current) {
            if ($name !== $current->getName()) {
                continue;
            }
            $color = $current;
        }

        $html = [];

        $html[] = "mdc";
        $html[] = $type;
        $html[] = $color->getName();
        if (null !== $value && true === array_key_exists($value, $color->getColors())) {
            $html[] = $value;
        }

        return implode("-", $html);
    }

    /**
     * Set the colors.
     *
     * @param ColorProviderInterface[] $colors The colors.
     * @return AbstractMaterialDesignColorPaletteTwigExtension Returns this Material Design Color Palette Twig extension.
     */
    protected function setColors(array $colors): AbstractMaterialDesignColorPaletteTwigExtension {
        $this->colors = $colors;
        return $this;
    }
}
