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

use DateTime;
use Exception;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Renderer\DateTimeRenderer;

/**
 * Utility Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
class UtilityTwigExtension extends AbstractTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.utility";

    /**
     * Calculates an age.
     *
     * @param DateTime $birthDate The birth date.
     * @param DateTime|null $refDate The reference date.
     * @return int Returns the age.
     * @throws Exception Throws an exception if an error occurs.
     */
    public function calcAge(DateTime $birthDate, DateTime $refDate = null): int {
        return DateTimeRenderer::renderAge($birthDate, $refDate);
    }

    /**
     * Format a date/time.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param string $format The format.
     * @return string Returns the formatted date/time.
     */
    public function formatDate(DateTime $dateTime = null, string $format = DateTimeRenderer::DATETIME_FORMAT): string {
        return DateTimeRenderer::renderDateTime($dateTime, $format);
    }

    /**
     * Format a string.
     *
     * @param string|null $string The string.
     * @param string|null $format The format.
     * @return string Returns the formatted string.
     */
    public function formatString(?string $string, ?string $format): string {

        if (null === $string || null === $format) {
            return "";
        }

        $fmt = str_replace("_", "%s", $format);
        $str = str_split($string);

        return vsprintf($fmt, $str);
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {
        return [
            new TwigFilter("calcAge", [$this, "calcAge"], ["is_safe" => ["html"]]),

            new TwigFilter("formatDate", [$this, "formatDate"], ["is_safe" => ["html"]]),
            new TwigFilter("fmtDate", [$this, "formatDate"], ["is_safe" => ["html"]]),

            new TwigFilter("formatString", [$this, "formatString"], ["is_safe" => ["html"]]),
            new TwigFilter("fmtString", [$this, "formatString"], ["is_safe" => ["html"]]),

            new TwigFilter("htmlEntityDecode", [$this, "htmlEntityDecode"], ["is_safe" => ["html"]]),

            new TwigFilter("htmlEntityEncode", [$this, "htmlEntityEncode"], ["is_safe" => ["html"]]),

            new TwigFilter("md5", [$this, "md5"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("calcAge", [$this, "calcAge"], ["is_safe" => ["html"]]),

            new TwigFunction("formatDate", [$this, "formatDate"], ["is_safe" => ["html"]]),
            new TwigFunction("fmtDate", [$this, "formatDate"], ["is_safe" => ["html"]]),

            new TwigFunction("formatString", [$this, "formatString"], ["is_safe" => ["html"]]),
            new TwigFunction("fmtString", [$this, "formatString"], ["is_safe" => ["html"]]),

            new TwigFunction("htmlEntityDecode", [$this, "htmlEntityDecode"], ["is_safe" => ["html"]]),

            new TwigFunction("htmlEntityEncode", [$this, "htmlEntityEncode"], ["is_safe" => ["html"]]),

            new TwigFunction("md5", [$this, "md5"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Decodes HTML entities.
     *
     * @param string|null $string The string.
     * @return string Returns the decoded HTML entities.
     */
    public function htmlEntityDecode(?string $string): string {
        if (null === $string) {
            return "";
        }
        return html_entity_decode($string);
    }

    /**
     * Encodes HTML entities.
     *
     * @param string|null $string The string.
     * @return string Returns the encoded HTML entities.
     */
    public function htmlEntityEncode(?string $string): string {
        if (null === $string) {
            return "";
        }
        return htmlentities($string);
    }

    /**
     * MD5.
     *
     * @param string|null $string The string.
     * @return string Returns the MD5.
     */
    public function md5(?string $string): string {
        if (null === $string) {
            return "";
        }
        return md5($string);
    }
}
