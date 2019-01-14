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
 * Command helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Helper
 */
class CommandHelper {

    /**
     * Get a checkbox.
     *
     * @param bool $checked Checked ?
     * @return string Returns the checkbox.
     */
    public static function getCheckbox($checked) {
        if (true === $checked) {
            return sprintf("<fg=green;options=bold>%s</>", OSHelper::isWindows() ? "OK" : "\xE2\x9C\x94");
        }
        return sprintf("<fg=yellow;options=bold>%s</>", OSHelper::isWindows() ? "KO" : "!");
    }
}
