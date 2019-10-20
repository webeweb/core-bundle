<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model;

/**
 * Image helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model
 */
class ImageHelper {

    /**
     * Create new dimensions.
     *
     * @param Image $image The image.
     * @param int $maxWidth The maximum width.
     * @param int $maxHeight The maximum height.
     * @return int[] Returns the dimensions.
     */
    public static function newDimensions(Image $image, $maxWidth, $maxHeight) {

        if ($image->getWidth() < $maxWidth || $image->getHeight() < $maxHeight) {
            return [$image->getWidth(), $image->getHeight()];
        }

        if (null === $image->getOrientation()) {
            $max = max($maxWidth, $maxHeight);
            return [$max, $max];
        }

        $ratio = $image->getWidth() / $image->getHeight();

        $width  = $maxWidth;
        $height = $maxHeight;

        if (Image::ORIENTATION_HORIZONTAL === $image->getOrientation()) {
            $height = abs($width / $ratio);
        } else {
            $width = abs($height * $ratio);
        }

        return [$width, $height];
    }

    /**
     * Create an input stream.
     *
     * @param Image $image The image.
     * @return resource|null Returns the input stream in case of success, null otherwise.
     */
    public static function newInputStream(Image $image) {

        $stream = null;

        switch ($image->getExtension()) {

            case "jpe":
            case "jpeg":
            case "jpg":
                $stream = imagecreatefromjpeg($image->getPathname());
                break;

            case "png":
                $stream = imagecreatefrompng($image->getPathname());
                if (false !== $stream) {
                    imagealphablending($stream, true);
                }
                break;
        }

        return false !== $stream ? $stream : null;
    }

    /**
     * Create an output stream.
     *
     * @param Image $image the image.
     * @param int $width The width.
     * @param int $height The height.
     * @return resource|null Returns the output stream in case of success, null otherwise.
     */
    public static function newOutputStream(Image $image, $width, $height) {

        $stream = imagecreatetruecolor($width, $height);

        switch ($image->getExtension()) {

            case "png":
                if (false !== $stream) {
                    imagealphablending($stream, false);
                    imagesavealpha($stream, true);
                }
                break;
        }

        return false !== $stream ? $stream : null;
    }

    /**
     * Save an output stream.
     *
     * @param Image $image the image.
     * @param resource $outputStream The output stream.
     * @param string $pathname The pathname.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function saveOutputStream(Image $image, $outputStream, $pathname) {

        switch ($image->getExtension()) {

            case "jpe":
            case "jpeg":
            case "jpg":
                return imagejpeg($outputStream, $pathname);

            case "png":
                return imagepng($outputStream, $pathname);
        }

        return false;
    }
}
