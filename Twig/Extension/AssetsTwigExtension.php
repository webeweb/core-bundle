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
use WBW\Bundle\CoreBundle\Routing\RouterTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\FontAwesomeTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\MaterialDesignIconicFontTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\MeteoconsTwigExtension;
use WBW\Library\Symfony\Helper\ColorHelper;
use WBW\Library\Symfony\Provider\JavascriptProviderInterface;
use WBW\Library\Symfony\Provider\StylesheetProviderInterface;
use WBW\Library\Types\Helper\ArrayHelper;
use WBW\Library\Types\Helper\StringHelper;

/**
 * Assets Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
class AssetsTwigExtension extends AbstractTwigExtension {

    use RouterTrait {
        setRouter as public;
    }

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.assets";

    /**
     * Public directory.
     *
     * @var string|null
     */
    protected $publicDirectory;

    /**
     * Determine if an asset exists.
     *
     * @param string|null $filename The filename.
     * @return bool|null Returns true in case of success, false otherwise.
     */
    public function assetExists(?string $filename): ?bool {

        if (null === $filename) {
            return null;
        }

        return file_exists($this->getPublicDirectory() . $filename);
    }

    /**
     * Display a Google tag manager.
     *
     * @param string|null $id The id.
     * @return string|null Returns the Google tag manager.
     */
    public function coreGtag(?string $id): ?string {

        if (null === $id || "" === $id) {
            return null;
        }

        $template = file_get_contents(__DIR__ . "/AssetsTwigExtension.coreGtag.html");

        return str_replace("{{ id }}", $id, $template);
    }

    /**
     * Display an image.
     *
     * @param array $args The arguments.
     * @return string Returns the image.
     */
    public function coreImageFunction(array $args = []): string {

        $template = "<img {{ attributes }}/>";

        $attributes = [
            "src"    => ArrayHelper::get($args, "src"),
            "alt"    => ArrayHelper::get($args, "alt"),
            "width"  => (string) ArrayHelper::get($args, "width"),
            "height" => (string) ArrayHelper::get($args, "height"),
            "class"  => ArrayHelper::get($args, "class"),
            "usemap" => ArrayHelper::get($args, "usemap"),
        ];

        return str_replace("{{ attributes }}", StringHelper::parseArray($attributes), $template);
    }

    /**
     * Display an icon.
     *
     * @param string|null $name The name.
     * @param string|null $style The style.
     * @return string|null Returns the icon.
     */
    public function coreRenderIconFunction(?string $name, string $style = null): ?string {
        return static::renderIcon($this->getTwigEnvironment(), $name, $style);
    }

    /**
     * Resource path.
     *
     * @param string $type The type.
     * @param string $name The name.
     * @param array $query The query.
     * @return string|null Returns the resource path.
     */
    public function coreResourcePath(string $type, string $name, array $query = []): ?string {

        if (null === $this->getRouter()) {
            return null;
        }

        return $this->getRouter()->generate("wbw_core_twig_resource", array_merge([
            "type" => $type,
            "name" => $name,
        ], $query));
    }

    /**
     * Resource "script".
     *
     * @param string $name The name.
     * @param array $query The query.
     * @return string Returns the resource "script".
     */
    public function coreResourceScriptFunction(string $name, array $query = []): string {

        $attributes = [
            "type" => "text/javascript",
            "src"  => $this->coreResourcePath(JavascriptProviderInterface::JAVASCRIPT_PROVIDER_EXTENSION, $name, $query),
        ];

        return static::coreHtmlElement("script", null, $attributes);
    }

    /**
     * Resource "style".
     *
     * @param string $name The name.
     * @param array $query The query.
     * @return string Returns the resource "style".
     */
    public function coreResourceStyleFunction(string $name, array $query = []): string {

        $template   = "<link {{ attributes }}>";
        $attributes = [
            "type" => "text/css",
            "rel"  => "stylesheet",
            "href" => $this->coreResourcePath(StylesheetProviderInterface::STYLESHEET_PROVIDER_EXTENSION, $name, $query),
        ];

        return str_replace("{{ attributes }}", StringHelper::parseArray($attributes), $template);
    }

    /**
     * Display a script.
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
     * Display a style.
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
     * Display a rgba().
     *
     * @param string|null $color The hexadecimal color.
     * @param float $alpha The alpha channel.
     * @return string|null Returns the rgba().
     */
    public function cssRgba(?string $color, float $alpha = 1.00): ?string {
        return ColorHelper::hexToRgba($color, $alpha);
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {

        return [
            new TwigFilter("assetExists", [$this, "assetExists"], ["is_safe" => ["html"]]),
            new TwigFilter("coreGtag", [$this, "coreGtag"], ["is_safe" => ["html"]]),
            new TwigFilter("coreScript", [$this, "coreScriptFilter"], ["is_safe" => ["html"]]),
            new TwigFilter("coreStyle", [$this, "coreStyleFilter"], ["is_safe" => ["html"]]),
            new TwigFilter("cssRgba", [$this, "cssRgba"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {

        return [
            new TwigFunction("assetExists", [$this, "assetExists"], ["is_safe" => ["html"]]),
            new TwigFunction("coreGtag", [$this, "coreGtag"], ["is_safe" => ["html"]]),
            new TwigFunction("coreImage", [$this, "coreImageFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("coreRenderIcon", [$this, "coreRenderIconFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("coreResourcePath", [$this, "coreResourcePathFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("coreResourceScript", [$this, "coreResourceScriptFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("coreResourceStyle", [$this, "coreResourceStyleFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("cssRgba", [$this, "cssRgba"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the public directory.
     *
     * @return string|null Returns the public directory.
     */
    public function getPublicDirectory(): ?string {
        return $this->publicDirectory;
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

        $output = null;

        switch ($handler[0]) {

            case "fa": // Font Awesome
            case "fas":
            case "far":
            case "fal":
            case "fab":
            case "fad":
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

    /**
     * Set the public directory.
     *
     * @param string|null $publicDirectory The public directory.
     * @return AssetsTwigExtension Returns this assets Twig extension.
     */
    public function setPublicDirectory(?string $publicDirectory): AssetsTwigExtension {
        $this->publicDirectory = $publicDirectory;
        return $this;
    }
}
