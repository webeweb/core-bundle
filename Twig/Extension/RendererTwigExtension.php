<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension;

use Twig\Environment;
use Twig\TwigFilter;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\FontAwesomeTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\MaterialDesignIconicFontTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\MeteoconsTwigExtension;

/**
 * Renderer Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
class RendererTwigExtension extends AbstractTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.renderer";

    /**
     * Displays a script.
     *
     * @param string $content The content.
     * @return string Returns a script.
     */
    public function coreScriptFilter(string $content): string {

        $attributes = [];

        $attributes["type"] = "text/javascript";

        $innerHTML = null !== $content ? implode("", ["\n", $content, "\n"]) : "";

        return static::coreHTMLElement("script", $innerHTML, $attributes);
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {
        return [
            new TwigFilter("coreScript", [$this, "coreScriptFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Render an icon.
     *
     * @param Environment $twigEnvironment The Twig environment.
     * @param string $name The name.
     * @param string|null $style The style.
     * @return string Returns the rendered icon.
     */
    public static function renderIcon(Environment $twigEnvironment, string $name, string $style = null): string {

        $handler = explode(":", $name);
        if (2 !== count($handler)) {
            return "";
        }

        $output = "";

        switch ($handler[0]) {

            case "fa": // Font Awesome
            case "fas":
            case "far":
            case "fal":
            case "fad":
            case "fab":
                $output = (new FontAwesomeTwigExtension($twigEnvironment))->renderIcon($handler[1], $style);
                $output = str_replace('class="fa', 'class="' . $handler[0], $output);
                break;

            case "mc": // Meteocons
                $output = (new MeteoconsTwigExtension($twigEnvironment))->renderIcon($handler[1], $style);
                break;

            case "zmdi": // Material Design Iconic Font
                $output = (new MaterialDesignIconicFontTwigExtension($twigEnvironment))->renderIcon($handler[1], $style);
                break;
        }

        return $output;
    }
}
