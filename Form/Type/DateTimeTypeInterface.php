<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Form\Type;

/**
 * Date/time type interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Form\Type
 */
interface DateTimeTypeInterface {

    /**
     * Format "date".
     *
     * @var string
     */
    const FORMAT_DATE = "dd/MM/yyyy";

    /**
     * Format "date/time".
     *
     * @var string
     */
    const FORMAT_DATETIME = self::FORMAT_DATE . " " . self::FORMAT_TIME;

    /**
     * Format "time".
     *
     * @var string
     */
    const FORMAT_TIME = "HH:mm";
}
