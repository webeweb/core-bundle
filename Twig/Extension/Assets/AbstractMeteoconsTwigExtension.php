<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Assets;

use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract Meteocons Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Assets
 * @abstract
 */
abstract class AbstractMeteoconsTwigExtension extends AbstractTwigExtension {

    /**
     * Display a Meteocons icon.
     *
     * @param string $name The name.
     * @param string|null $style The style.
     * @return string Returns the Meteocons icon.
     */
    protected function meteoconsIcon(string $name, ?string $style): string {

        $attributes = [
            "class"          => "meteocons",
            "data-meteocons" => $name,
            "style"          => $style,
        ];

        return static::coreHtmlElement("i", null, $attributes);
    }
}
