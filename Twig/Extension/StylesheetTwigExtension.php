<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension;

use Twig\TwigFilter;
use Twig\TwigFunction;

/**
 * Stylesheet Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\CSS
 */
class StylesheetTwigExtension extends AbstractTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.stylesheet";

    /**
     * Displays a rgba().
     *
     * @param string $color The hexadecimal color.
     * @param float $alpha The alpha channel.
     * @return string Returns the rgba().
     */
    public function cssRGBA($color, $alpha = 1.00) {

        if (0 === preg_match_all("/^#?([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/", strtolower($color), $hex)) {
            return "";
        }

        $length = strlen($hex[1][0]);

        $pattern = "/[A-Fa-f0-9]{" . intval($length / 3) . "}/";
        preg_match_all($pattern, $hex[1][0], $channels);

        if (3 === $length) {
            $channels[0][0] = str_repeat($channels[0][0], 2);
            $channels[0][1] = str_repeat($channels[0][1], 2);
            $channels[0][2] = str_repeat($channels[0][2], 2);
        }

        $template = "rgba(%r%, %g%, %b%, %a%)";

        return str_replace(["%r%", "%g%", "%b%", "%a%"], [hexdec($channels[0][0]), hexdec($channels[0][1]), hexdec($channels[0][2]), number_format($alpha, 2)], $template);
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new TwigFilter("cssRGBA", [$this, "cssRGBA"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new TwigFunction("cssRGBA", [$this, "cssRGBA"], ["is_safe" => ["html"]]),
        ];
    }
}
