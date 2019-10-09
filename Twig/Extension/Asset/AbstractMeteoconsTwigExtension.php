<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Asset;

use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract Meteocons Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Asset
 * @abstract
 */
abstract class AbstractMeteoconsTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Meteocons icon.
     *
     * @param string $name The name.
     * @param string $style The style.
     * @return string Returns the Meteocons icon.
     */
    protected function meteoconsIcon($name, $style) {

        $attributes = [];

        $attributes["class"]          = "meteocons";
        $attributes["data-meteocons"] = $name;
        $attributes["style"]          = $style;

        return static::coreHTMLElement("i", null, $attributes);
    }
}
