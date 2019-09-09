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

use DirectoryIterator;
use InvalidArgumentException;
use ZipArchive;

/**
 * Assets helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Helper
 */
class AssetsHelper {

    /**
     * List all assets.
     *
     * @param string $directory The directory.
     * @return array Returns the assets.
     * @throws InvalidArgumentException Throw an invalid argument exception if the directory is not a directory.
     */
    protected static function listAssets($directory) {

        if (false === is_dir($directory)) {
            throw new InvalidArgumentException(sprintf("\"%s\" is not a directory", $directory));
        }

        $assets = [];

        foreach (new DirectoryIterator(realpath($directory)) as $current) {

            // Check the filename and his extension.
            if (true === in_array($current->getFilename(), [".", ".."]) || 0 === preg_match("/\.zip$/", $current->getFilename())) {
                continue;
            }

            $assets[] = $current->getPathname();
        }

        sort($assets);

        return $assets;
    }

    /**
     * Unzip all assets.
     *
     * @param string $src The source directory.
     * @param string $dst The destination directory.
     * @return bool[] Returns the assets.
     * @throws InvalidArgumentException Throws an invalid argument if a directory is not a directory.
     */
    public static function unzipAssets($src, $dst) {

        if (false === is_dir($dst)) {
            throw new InvalidArgumentException(sprintf("\"%s\" is not a directory", $dst));
        }

        $result = [];

        foreach (static::listAssets($src) as $current) {

            $zip = new ZipArchive();

            if (true === $zip->open($current)) {
                $result[$current] = $zip->extractTo(realpath($dst));
                $zip->close();
            }
        }

        return $result;
    }
}
