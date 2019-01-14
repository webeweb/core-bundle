<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Renderer;

use DateTime;

/**
 * Date/time renderer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Renderer
 */
class DateTimeRenderer {

    /**
     * Date/time format.
     *
     * @var string
     */
    const DATETIME_FORMAT = "Y-m-d H:i";

    /**
     * Render a date/time.
     *
     * @param DateTime $dateTime The date/time.
     * @param string $format The format.
     * @return string Returns the rendered date/time.
     */
    public static function renderDateTime(DateTime $dateTime = null, $format = self::DATETIME_FORMAT) {
        if (null === $dateTime) {
            return "";
        }
        return $dateTime->format($format);
    }
}
