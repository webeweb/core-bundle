<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension;

use Twig\TwigFilter;
use Twig\TwigFunction;

/**
 * Javascript Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
class JavascriptTwigExtension extends AbstractTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.javascript";

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new TwigFilter("jsGtag", [$this, "jsGtag"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new TwigFunction("jsGtag", [$this, "jsGtag"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a Google tag manager.
     *
     * @param string $id The id.
     * @return string Returns the Google tag manager.
     */
    public function jsGtag($id) {

        if (null === $id || "" === $id) {
            return "";
        }

        $content = file_get_contents(__DIR__ . "/JavascriptTwigExtension.jsGtag.html");

        return str_replace("{id}", $id, $content);
    }
}