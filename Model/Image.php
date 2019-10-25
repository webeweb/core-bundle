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

use InvalidArgumentException;
use RuntimeException;
use WBW\Bundle\CoreBundle\Model\Attribute\IntegerHeightTrait;
use WBW\Bundle\CoreBundle\Model\Attribute\IntegerSizeTrait;
use WBW\Bundle\CoreBundle\Model\Attribute\IntegerWidthTrait;
use WBW\Bundle\CoreBundle\Model\Attribute\StringDirectoryTrait;
use WBW\Bundle\CoreBundle\Model\Attribute\StringExtensionTrait;
use WBW\Bundle\CoreBundle\Model\Attribute\StringFilenameTrait;
use WBW\Bundle\CoreBundle\Model\Attribute\StringMimeTypeTrait;
use WBW\Bundle\CoreBundle\Model\Attribute\StringPathnameTrait;

/**
 * Image.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model
 */
class Image {

    use IntegerHeightTrait;
    use IntegerSizeTrait;
    use IntegerWidthTrait;
    use StringDirectoryTrait;
    use StringExtensionTrait;
    use StringFilenameTrait;
    use StringMimeTypeTrait;
    use StringPathnameTrait;

    /**
     * Orientation "horizontal".
     *
     * @var string
     */
    const ORIENTATION_HORIZONTAL = "horizontal";

    /**
     * Orientation "vertical".
     *
     * @var string
     */
    const ORIENTATION_VERTICAL = "vertical";

    /**
     * Constructor.
     *
     * @param string $pathname The pathname.
     */
    public function __construct($pathname) {
        $this->setPathname($pathname);
    }

    /**
     * Get the dimensions.
     *
     * @return int[] Returns the dimensions.
     */
    public function getDimensions() {
        return [$this->getWidth(), $this->getHeight()];
    }

    /**
     * Get the orientation.
     *
     * @return string|null Returns the orientation, null if width and height are equals.
     */
    public function getOrientation() {

        if ($this->getHeight() < $this->getWidth()) {
            return self::ORIENTATION_HORIZONTAL;
        }

        if ($this->getWidth() < $this->getHeight()) {
            return self::ORIENTATION_VERTICAL;
        }

        return null;
    }

    /**
     * Initialize.
     *
     * @return Image Returns this image.
     */
    public function init() {

        if (null !== $this->getDirectory()) {
            return $this;
        }

        $this->setDirectory(dirname($this->getPathname()));
        $this->setFilename(basename($this->getPathname()));

        $parts = explode(".", $this->getFilename());
        $this->setExtension(end($parts));

        $this->setMimeType(mime_content_type($this->getPathname()));

        list($width, $height) = getimagesize($this->getPathname());
        $this->setWidth($width);
        $this->setHeight($height);

        $this->setSize(filesize($this->getPathname()));

        return $this;
    }

    /**
     * Resize.
     *
     * @param int $newWidth The new width.
     * @param int $newHeight The new height.
     * @param string $pathname The pathname.
     * @return bool Returns true in case of success, false otherwise.
     * @throws RuntimeException Throws a runtime exception if the re-sampled copy failed.
     */
    public function resize($newWidth, $newHeight, $pathname) {

        list($w, $h) = ImageHelper::newDimensions($this, $newWidth, $newHeight);

        $input  = ImageHelper::newInputStream($this);
        $output = ImageHelper::newOutputStream($this, $w, $h);
        if (null === $output) {
            throw new RuntimeException("Failed to create true color image");
        }

        $result = imagecopyresampled($output, $input, 0, 0, 0, 0, $w, $h, $this->getWidth(), $this->getHeight());
        if (false === $result) {
            throw new RuntimeException("Failed to copy re-sampled image");
        }

        return ImageHelper::saveOutputStream($this, $output, $pathname);
    }

    /**
     * Set the pathname.
     *
     * @param string $pathname The pathname.
     * @return Image Returns this image.
     * @throws InvalidArgumentException Throws an invalid argument exception if the pathname was not found.
     */
    protected function setPathname($pathname) {
        if (false === realpath($pathname)) {
            throw new InvalidArgumentException(sprintf("The image \"%s\" was not found", $pathname));
        }
        $this->pathname = realpath($pathname);
        return $this;
    }
}
