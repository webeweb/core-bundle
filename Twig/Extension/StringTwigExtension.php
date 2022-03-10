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

use DateTime;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Library\Types\Helper\DateTimeHelper;
use WBW\Library\Types\Helper\StringHelper;

/**
 * String Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
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
     * Format a date/time.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param string $format The format.
     * @return string|null Returns the formatted date/time.
     */
    public function dateFormat(?DateTime $dateTime, string $format = DateTimeHelper::DATETIME_FORMAT): ?string {
        return DateTimeHelper::toString($dateTime, $format);
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {
        return [
            new TwigFilter("dateFormat", [$this, "dateFormat"], ["is_safe" => ["html"]]),

            new TwigFilter("htmlEntityDecode", [$this, "htmlEntityDecode"], ["is_safe" => ["html"]]),
            new TwigFilter("htmlEntityEncode", [$this, "htmlEntityEncode"], ["is_safe" => ["html"]]),

            new TwigFilter("md5", [$this, "md5"], ["is_safe" => ["html"]]),

            new TwigFilter("stringExtractUpperCase", [$this, "stringExtractUpperCase"], ["is_safe" => ["html"]]),
            new TwigFilter("stringFormat", [$this, "stringFormat"], ["is_safe" => ["html"]]),
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
            new TwigFunction("dateFormat", [$this, "dateFormat"], ["is_safe" => ["html"]]),

            new TwigFunction("htmlEntityDecode", [$this, "htmlEntityDecode"], ["is_safe" => ["html"]]),
            new TwigFunction("htmlEntityEncode", [$this, "htmlEntityEncode"], ["is_safe" => ["html"]]),

            new TwigFunction("md5", [$this, "md5"], ["is_safe" => ["html"]]),

            new TwigFunction("stringExtractUpperCase", [$this, "stringExtractUpperCase"], ["is_safe" => ["html"]]),
            new TwigFunction("stringFormat", [$this, "stringFormat"], ["is_safe" => ["html"]]),
            new TwigFunction("stringHumanReadable", [$this, "stringHumanReadable"], ["is_safe" => ["html"]]),
            new TwigFunction("stringLowerCamelCase", [$this, "stringLowerCamelCase"], ["is_safe" => ["html"]]),
            new TwigFunction("stringSnakeCase", [$this, "stringSnakeCase"], ["is_safe" => ["html"]]),
            new TwigFunction("stringUpperCamelCase", [$this, "stringUpperCamelCase"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Decodes HTML entities.
     *
     * @param string|null $string The string.
     * @return string|null Returns the decoded HTML entities.
     */
    public function htmlEntityDecode(?string $string): ?string {

        if (null === $string) {
            return null;
        }

        return html_entity_decode($string);
    }

    /**
     * Encodes HTML entities.
     *
     * @param string|null $string The string.
     * @return string|null Returns the encoded HTML entities.
     */
    public function htmlEntityEncode(?string $string): ?string {

        if (null === $string) {
            return null;
        }

        return htmlentities($string);
    }

    /**
     * MD5.
     *
     * @param string|null $string The string.
     * @return string|null Returns the MD5.
     */
    public function md5(?string $string): ?string {

        if (null === $string) {
            return null;
        }

        return md5($string);
    }

    /**
     * Displays the extracted upper case letters.
     *
     * @param string|null $str The string.
     * @param bool $lower Lower case ?
     * @return string|null Returns the extracted upper case letters.
     */
    public function stringExtractUpperCase(?string $str, bool $lower = false): ?string {
        return StringHelper::extractUpperCase($str, $lower);
    }

    /**
     * Displays a formatted string.
     *
     * @param string|null $string The string.
     * @param string|null $format The format.
     * @return string|null Returns the formatted string.
     */
    public function stringFormat(?string $string, ?string $format): ?string {
        return StringHelper::format($string, $format);
    }

    /**
     * Displays an human readable string.
     *
     * @param string|null $str The string.
     * @return string|null Returns the human readable string.
     */
    public function stringHumanReadable(?string $str): ?string {
        return StringHelper::toHumanReadable($str);
    }

    /**
     * Displays a lower camel case string.
     *
     * @param string|null $str The string.
     * @return string|null Returns the lower camel case string.
     */
    public function stringLowerCamelCase(?string $str): ?string {
        return StringHelper::toLowerCamelCase($str);
    }

    /**
     * Displays a snake case string.
     *
     * @param string|null $str The string.
     * @param string $sep The separator.
     * @return string|null Returns the snake case.
     */
    public function stringSnakeCase(?string $str, string $sep = "_"): ?string {
        return StringHelper::toSnakeCase($str, $sep);
    }

    /**
     * Displays an upper camel case string.
     *
     * @param string|null $str The string.
     * @return string|null Returns the upper camel case string.
     */
    public function stringUpperCamelCase(?string $str): ?string {
        return StringHelper::toUpperCamelCase($str);
    }
}
