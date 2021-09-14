<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension;

use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Library\Types\Helper\StringHelper;

/**
 * String Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
class StringTwigExtension extends AbstractTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.string";

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {
        return [
            new TwigFilter("stringExtractUpperCase", [$this, "stringExtractUpperCase"], ["is_safe" => ["html"]]),
            new TwigFilter("stringHumanReadable", [$this, "stringHumanReadable"], ["is_safe" => ["html"]]),
            new TwigFilter("stringLowerCamelCase", [$this, "stringLowerCamelCase"], ["is_safe" => ["html"]]),
            new TwigFilter("stringSnakeCase", [$this, "stringSnakeCase"], ["is_safe" => ["html"]]),
            new TwigFilter("stringUpperCamelCase", [$this, "stringUpperCamelCase"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("stringExtractUpperCase", [$this, "stringExtractUpperCase"], ["is_safe" => ["html"]]),
            new TwigFunction("stringHumanReadable", [$this, "stringHumanReadable"], ["is_safe" => ["html"]]),
            new TwigFunction("stringLowerCamelCase", [$this, "stringLowerCamelCase"], ["is_safe" => ["html"]]),
            new TwigFunction("stringSnakeCase", [$this, "stringSnakeCase"], ["is_safe" => ["html"]]),
            new TwigFunction("stringUpperCamelCase", [$this, "stringUpperCamelCase"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays the extracted upper case letters.
     *
     * @param string $str The string.
     * @param bool $lower Lower case ?
     * @return string Returns the extracted upper case letters.
     */
    public function stringExtractUpperCase(string $str, bool $lower = false): string {
        return StringHelper::extractUpperCase($str, $lower);
    }

    /**
     * Displays an human readable string.
     *
     * @param string $str The string.
     * @return string Returns the human readable string.
     */
    public function stringHumanReadable(string $str): string {
        return StringHelper::toHumanReadable($str);
    }

    /**
     * Displays a lower camel case string.
     *
     * @param string $str The string.
     * @return string Returns the lower camel case string.
     */
    public function stringLowerCamelCase(string $str): string {
        return StringHelper::toLowerCamelCase($str);
    }

    /**
     * Displays a snake case string.
     *
     * @param string $str The string.
     * @param string $sep The separator.
     * @return string Returns the snake case.
     */
    public function stringSnakeCase(string $str, string $sep = "_"): string {
        return StringHelper::toSnakeCase($str, $sep);
    }

    /**
     * Displays an upper camel case string.
     *
     * @param string $str The string.
     * @return string Returns the upper camel case string.
     */
    public function stringUpperCamelCase(string $str): string {
        return StringHelper::toUpperCamelCase($str);
    }
}