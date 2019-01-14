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

use DateTime;
use Twig_Environment;
use Twig_SimpleFilter;
use WBW\Bundle\CoreBundle\Renderer\DateTimeRenderer;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\FontAwesomeTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MaterialDesignIconicFontTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MeteoconsTwigExtension;

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
    const SERVICE_NAME = "webeweb.core.twig.extension.renderer";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The twig environment.
     */
    public function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays a script.
     *
     * @param string $content The content.
     * @return string Returns a script.
     */
    public function coreScriptFilter($content) {

        // Initialize the attributes.
        $attributes = [];

        $attributes["type"] = "text/javascript";

        // Initialize the parameters.
        $innerHTML = null !== $content ? implode("", ["\n", $content, "\n"]) : "";

        // Return the HTML.
        return static::coreHTMLElement("script", $innerHTML, $attributes);
    }

    /**
     * Format a date/time.
     *
     * @param DateTime $dateTime The date/time.
     * @param string $format The format.
     * @return string Returns the formated date/time.
     */
    public function formatDateFilter(DateTime $dateTime = null, $format = DateTimeRenderer::DATETIME_FORMAT) {
        return DateTimeRenderer::renderDateTime($dateTime, $format);
    }

    /**
     * Get the Twig filters.
     *
     * @return Twig_SimpleFilter[] Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new Twig_SimpleFilter("coreScript", [$this, "coreScriptFilter"], ["is_safe" => ["html"]]),
            new Twig_SimpleFilter("formatDate", [$this, "formatDateFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Render an icon.
     *
     * @param Twig_Environment $twigEnvironment The twig environment.
     * @param string $name The name.
     * @param string $style The style.
     * @return string Returns the rendered icon.
     */
    public static function renderIcon(Twig_Environment $twigEnvironment, $name, $style = null) {

        // Determines the handler.
        $handler = explode(":", $name);
        if (2 !== count($handler)) {
            return "";
        }

        // Initialize the output.
        $output = "";

        // Swith into handler.
        switch ($handler[0]) {

            case "fa": // Font Awesome
                $output = (new FontAwesomeTwigExtension($twigEnvironment))->renderIcon($handler[1], $style);
                break;

            case "mc": // Meteocons
                $output = (new MeteoconsTwigExtension($twigEnvironment))->renderIcon($handler[1], $style);
                break;

            case "zmdi": // Material Design Iconic Font
                $output = (new MaterialDesignIconicFontTwigExtension($twigEnvironment))->renderIcon($handler[1], $style);
                break;
        }

        // Return the output.
        return $output;
    }

}
