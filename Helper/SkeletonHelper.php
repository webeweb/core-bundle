<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Helper;

use InvalidArgumentException;
use Symfony\Component\Finder\Finder;

/**
 * Skeleton helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Helper
 */
class SkeletonHelper {

    /**
     * Copy skeleton.
     *
     * @param string $src The source directory.
     * @param string $dst The destination directory.
     * @return bool[] Returns the assets.
     * @throws InvalidArgumentException Throws an invalid argument exception if the directory does not exist.
     */
    public static function copySkeleton(string $src, string $dst): array {

        $files = static::listSkeleton($src);

        $result = [];

        foreach ($files as $current) {

            $pathname = str_replace($src, $dst, dirname($current));
            if (false === file_exists($pathname)) {
                mkdir($pathname, 0755, true);
            }

            $filename = implode("/", [$pathname, basename($current)]);
            $result[] = copy($current, $filename);
        }

        return $result;
    }

    /**
     * List skeleton.
     *
     * @param string $directory The directory.
     * @return string[] Returns the skeletons.
     * @throws InvalidArgumentException Throws an invalid argument exception if the directory does not exist.
     */
    public static function listSkeleton(string $directory): array {

        $finder = new Finder();
        $finder->sortByName()->files()->in($directory);

        $files = [];

        foreach ($finder as $current) {
            $files[] = $current->getRealPath();
        }

        return $files;
    }
}
