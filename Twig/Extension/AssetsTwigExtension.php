<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension;

use Twig\Environment;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\FontAwesomeTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\MaterialDesignIconicFontTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\MeteoconsTwigExtension;

/**
 * Assets Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
class AssetsTwigExtension extends AbstractTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.assets";

    /**
     * Displays a Google tag manager.
     *
     * @param string|null $id The id.
     * @return string|null Returns the Google tag manager.
     */
    public function coreGtag(?string $id): ?string {

        if (null === $id || "" === $id) {
            return null;
        }

        $content = file_get_contents(__DIR__ . "/AssetsTwigExtension.coreGtag.html");

        return str_replace("{id}", $id, $content);
    }

    /**
     * Displays a script.
     *
     * @param string $content The content.
     * @return string Returns a script.
     */
    public function coreScriptFilter(string $content): string {

        $attributes = [
            "type" => "text/javascript",
        ];

        $innerHTML = implode("", ["\n", $content, "\n"]);

        return static::coreHtmlElement("script", $innerHTML, $attributes);
    }

    /**
     * Displays a style.
     *
     * @param string $content The content.
     * @return string Returns a style.
     */
    public function coreStyleFilter(string $content): string {

        $attributes = [
            "type" => "text/css",
        ];

        $innerHTML = implode("", ["\n", $content, "\n"]);

        return static::coreHtmlElement("style", $innerHTML, $attributes);
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {
        return [
            new TwigFilter("coreGtag", [$this, "coreGtag"], ["is_safe" => ["html"]]),
            new TwigFilter("coreScript", [$this, "coreScriptFilter"], ["is_safe" => ["html"]]),
            new TwigFilter("coreStyle", [$this, "coreStyleFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("coreGtag", [$this, "coreGtag"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Render an icon.
     *
     * @param Environment $twigEnvironment The Twig environment.
     * @param string|null $name The name.
     * @param string|null $style The style.
     * @return string|null Returns the rendered icon.
     */
    public static function renderIcon(Environment $twigEnvironment, ?string $name, string $style = null): ?string {

        $handler = explode(":", $name);
        if (2 !== count($handler)) {
            return null;
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
