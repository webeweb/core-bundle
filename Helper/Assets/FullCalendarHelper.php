<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Helper\Assets;

use DateTime;
use Symfony\Component\HttpFoundation\Request;

/**
 * Full Calendar helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Helper\Assets
 */
class FullCalendarHelper {

    /**
     * Parses a date/time.
     *
     * @param Request $request The request.
     * @param string $key The key.
     * @return DateTime|null Returns the date/time.
     */
    protected static function parseDateTime(Request $request, string $key): ?DateTime {

        $dateTime = DateTime::createFromFormat("Y-m-d\TH:i:sP", $request->query->get($key));

        return false !== $dateTime ? $dateTime : null;
    }

    /**
     * Parses the end date/time.
     *
     * @param Request $request The request.
     * @return DateTime|null Returns the end date/time.
     */
    public static function parseEndDateTime(Request $request): ?DateTime {
        return static::parseDateTime($request, "end");
    }

    /**
     * Parses the start date/time.
     *
     * @param Request $request The request.
     * @return DateTime|null Returns the start date/time.
     */
    public static function parseStartDateTime(Request $request): ?DateTime {
        return static::parseDateTime($request, "start");
    }
}
