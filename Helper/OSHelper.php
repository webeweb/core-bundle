<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Helper;

/**
 * OS helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Helper
 */
class OSHelper {

    /**
     * Determines if the operating system is Linux.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isLinux() {
        return !static::isWindows();
    }

    /**
     * Determines if the operating system is Windows.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isWindows() {
        return "\\" === DIRECTORY_SEPARATOR;
    }
}
