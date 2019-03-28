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
use Twig_SimpleFilter;
use Twig_SimpleFunction;
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
    const SERVICE_NAME = "webeweb.core.twig.extension.utility";

    /**
     * Calculates an age.
     *
     * @param DateTime $birthDate The birth date.
     * @param DateTime|null $refDate The reference date.
     * @return int Returns teh age.
     * @throws Exception Throws an exception if an error occurs.
     */
    public function calcAge(DateTime $birthDate, DateTime $refDate = null) {
        return DateTimeRenderer::renderAge($birthDate, $refDate);
    }

    /**
     * Format a date/time.
     *
     * @param DateTime|null $dateTime The date/time.
     * @param string $format The format.
     * @return string Returns the formatted date/time.
     */
    public function formatDate(DateTime $dateTime = null, $format = DateTimeRenderer::DATETIME_FORMAT) {
        return DateTimeRenderer::renderDateTime($dateTime, $format);
    }

    /**
     * Get the Twig filters.
     *
     * @return Twig_SimpleFilter[] Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new Twig_SimpleFilter("calcAge", [$this, "calcAge"], ["is_safe" => ["html"]]),
            new Twig_SimpleFilter("formatDate", [$this, "formatDate"], ["is_safe" => ["html"]]),
            new Twig_SimpleFilter("htmlEntityDecode", [$this, "htmlEntityDecode"], ["is_safe" => ["html"]]),
            new Twig_SimpleFilter("htmlEntityEncode", [$this, "htmlEntityEncode"], ["is_safe" => ["html"]]),
            new Twig_SimpleFilter("md5", [$this, "md5"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("calcAge", [$this, "calcAge"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("formatDate", [$this, "formatDate"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("htmlEntityDecode", [$this, "htmlEntityDecode"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("htmlEntityEncode", [$this, "htmlEntityEncode"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("md5", [$this, "md5"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Decodes HTML entities.
     *
     * @param string $string The string.
     * @return string Returns the decoded HTML entities.
     */
    public function htmlEntityDecode($string) {
        if (null === $string) {
            return "";
        }
        return html_entity_decode($string);
    }

    /**
     * Encodes HTML entities.
     *
     * @param string $string The string.
     * @return string Returns the encoded HTML entities.
     */
    public function htmlEntityEncode($string) {
        if (null === $string) {
            return "";
        }
        return htmlentities($string);
    }

    /**
     * MD5.
     *
     * @param string $string The string.
     * @return string Returns the MD5.
     */
    public function md5($string) {
        if (null === $string) {
            return "";
        }
        return md5($string);
    }
}
