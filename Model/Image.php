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
use WBW\Bundle\CoreBundle\Model\Attribute\StringPathnameTrait;

class Image {

    use IntegerHeightTrait;
    use IntegerSizeTrait;
    use IntegerWidthTrait;
    use StringDirectoryTrait;
    use StringExtensionTrait;
    use StringFilenameTrait;
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
     * @return void
     */
    public function init() {

        $this->setDirectory(dirname($this->getPathname()));
        $this->setFilename(basename($this->getPathname()));

        $parts = explode(".", $this->getFilename());
        $this->setExtension(end($parts));

        list($width, $height) = getimagesize($this->getPathname());
        $this->setHeight($height);
        $this->setWidth($width);

        $this->setSize(filesize($this->getPathname()));
    }

    /**
     * Resize.
     *
     * @param int $newWidth The new width.
     * @param int $newHeight The new height.
     * @param string $pathname The pathname.
     * @return bool Returns true in case os success, false otherwise.
     * @throws RuntimeException Throws a runtime exception if the re-sampled copy failed.
     */
    public function resize($newWidth, $newHeight, $pathname) {

        $this->init();

        list($w, $h) = ImageHelper::newDimensions($this, $newWidth, $newHeight);

        $input  = ImageHelper::newInputStream($this);
        $output = ImageHelper::newOutputStream($this, $w, $h);

        $result = imagecopyresampled($output, $input, 0, 0, 0, 0, $w, $h, $this->getWidth(), $this->getHeight());
        if (false === $result) {
            throw new RuntimeException("The re-sampled copy failed");
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
            throw new InvalidArgumentException(sprintf("The pathname \"%s\" was not found", $pathname));
        }
        $this->pathname = realpath($pathname);
        return $this;
    }
}
