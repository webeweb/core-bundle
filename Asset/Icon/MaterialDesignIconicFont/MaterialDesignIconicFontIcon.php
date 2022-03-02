<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Icon\MaterialDesignIconicFont;

use WBW\Library\Symfony\Assets\Icon\AbstractIcon;

/**
 * Material Design Iconic Font icon.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Asset\Icon\MaterialDesignIconicFont
 */
class MaterialDesignIconicFontIcon extends AbstractIcon implements MaterialDesignIconicFontIconInterface {

    /**
     * Border.
     *
     * @var string|null
     */
    private $border;

    /**
     * Fixed width.
     *
     * @var bool|null
     */
    private $fixedWidth;

    /**
     * Flip.
     *
     * @var string|null
     */
    private $flip;

    /**
     * Pull.
     *
     * @var string|null
     */
    private $pull;

    /**
     * Rotate.
     *
     * @var string|null
     */
    private $rotate;

    /**
     * Size.
     *
     * @var string|null
     */
    private $size;

    /**
     * Spin.
     *
     * @var string|null
     */
    private $spin;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setFixedWidth(false);
    }

    /**
     * {@inheritDoc}
     */
    public function getBorder(): ?string {
        return $this->border;
    }

    /**
     * {@inheritDoc}
     */
    public function getFixedWidth(): ?bool {
        return $this->fixedWidth;
    }

    /**
     * {@inheritDoc}
     */
    public function getFlip(): ?string {
        return $this->flip;
    }

    /**
     * {@inheritDoc}
     */
    public function getPull(): ?string {
        return $this->pull;
    }

    /**
     * {@inheritDoc}
     */
    public function getRotate(): ?string {
        return $this->rotate;
    }

    /**
     * {@inheritDoc}
     */
    public function getSize(): ?string {
        return $this->size;
    }

    /**
     * {@inheritDoc}
     */
    public function getSpin(): ?string {
        return $this->spin;
    }

    /**
     * {@inheritDoc}
     */
    public function setBorder(?string $border): MaterialDesignIconicFontIconInterface {
        if (false === in_array($border, MaterialDesignIconicFontIconEnumerator::enumBorders())) {
            $border = null;
        }
        $this->border = $border;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setFixedWidth(?bool $fixedWidth): MaterialDesignIconicFontIconInterface {
        $this->fixedWidth = $fixedWidth;
        return $this;
    }

    /**
     *{@inheritDoc}
     */
    public function setFlip(?string $flip): MaterialDesignIconicFontIconInterface {
        if (false === in_array($flip, MaterialDesignIconicFontIconEnumerator::enumFlips())) {
            $flip = null;
        }
        $this->flip = $flip;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setPull(?string $pull): MaterialDesignIconicFontIconInterface {
        if (false === in_array($pull, MaterialDesignIconicFontIconEnumerator::enumPulls())) {
            $pull = null;
        }
        $this->pull = $pull;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setRotate(?string $rotate): MaterialDesignIconicFontIconInterface {
        if (false === in_array($rotate, MaterialDesignIconicFontIconEnumerator::enumRotates())) {
            $rotate = null;
        }
        $this->rotate = $rotate;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSize(?string $size): MaterialDesignIconicFontIconInterface {
        if (false === in_array($size, MaterialDesignIconicFontIconEnumerator::enumSizes())) {
            $size = null;
        }
        $this->size = $size;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSpin(?string $spin): MaterialDesignIconicFontIconInterface {
        if (false === in_array($spin, MaterialDesignIconicFontIconEnumerator::enumSpins())) {
            $spin = null;
        }
        $this->spin = $spin;
        return $this;
    }
}
