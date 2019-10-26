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

/**
 * File size renderer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Renderer
 */
class FileSizeRenderer {

    /**
     * Size divider "Gio".
     *
     * @var int
     */
    const SIZE_DIVIDER_GIO = 1073741824;

    /**
     * Size divider "Kio".
     *
     * @var int
     */
    const SIZE_DIVIDER_KIO = 1024;

    /**
     * Size divider "Mio".
     *
     * @var int
     */
    const SIZE_DIVIDER_MIO = 1048576;

    /**
     * Render a size.
     *
     * @param int $size The size.
     * @return string Returns the rendered size.
     */
    public static function renderSize($size) {

        if (null === $size || $size < 0) {
            return "";
        }

        $format = "%.2f";

        if (self::SIZE_DIVIDER_GIO <= $size) {
            return sprintf("${format} Gio", $size / self::SIZE_DIVIDER_GIO);
        }

        if (self::SIZE_DIVIDER_MIO <= $size) {
            return sprintf("${format} Mio", $size / self::SIZE_DIVIDER_MIO);
        }

        return sprintf("${format} Kio", $size / self::SIZE_DIVIDER_KIO);
    }
}
