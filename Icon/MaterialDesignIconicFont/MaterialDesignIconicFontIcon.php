<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFont;

use WBW\Bundle\CoreBundle\Icon\AbstractIcon;

/**
 * Material Design Iconic Font icon.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFont
 */
class MaterialDesignIconicFontIcon extends AbstractIcon implements MaterialDesignIconicFontIconInterface {

    /**
     * Border.
     *
     * @var string
     */
    private $border;

    /**
     * Fixed width.
     *
     * @var bool
     */
    private $fixedWidth;

    /**
     * Flip.
     *
     * @var string
     */
    private $flip;

    /**
     * Pull.
     *
     * @var string
     */
    private $pull;

    /**
     * Rotate.
     *
     * @var string
     */
    private $rotate;

    /**
     * Size.
     *
     * @var string
     */
    private $size;

    /**
     * Spin.
     *
     * @var string
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
    public function getBorder() {
        return $this->border;
    }

    /**
     * {@inheritDoc}
     */
    public function getFixedWidth() {
        return $this->fixedWidth;
    }

    /**
     * {@inheritDoc}
     */
    public function getFlip() {
        return $this->flip;
    }

    /**
     * {@inheritDoc}
     */
    public function getPull() {
        return $this->pull;
    }

    /**
     * {@inheritDoc}
     */
    public function getRotate() {
        return $this->rotate;
    }

    /**
     * {@inheritDoc}
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * {@inheritDoc}
     */
    public function getSpin() {
        return $this->spin;
    }

    /**
     * {@inheritDoc}
     */
    public function setBorder($border) {
        if (false === in_array($border, MaterialDesignIconicFontIconEnumerator::enumBorders())) {
            $border = null;
        }
        $this->border = $border;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setFixedWidth($fixedWidth) {
        $this->fixedWidth = $fixedWidth;
        return $this;
    }

    /**
     *{@inheritDoc}
     */
    public function setFlip($flip) {
        if (false === in_array($flip, MaterialDesignIconicFontIconEnumerator::enumFlips())) {
            $flip = null;
        }
        $this->flip = $flip;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setPull($pull) {
        if (false === in_array($pull, MaterialDesignIconicFontIconEnumerator::enumPulls())) {
            $pull = null;
        }
        $this->pull = $pull;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setRotate($rotate) {
        if (false === in_array($rotate, MaterialDesignIconicFontIconEnumerator::enumRotates())) {
            $rotate = null;
        }
        $this->rotate = $rotate;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSize($size) {
        if (false === in_array($size, MaterialDesignIconicFontIconEnumerator::enumSizes())) {
            $size = null;
        }
        $this->size = $size;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSpin($spin) {
        if (false === in_array($spin, MaterialDesignIconicFontIconEnumerator::enumSpins())) {
            $spin = null;
        }
        $this->spin = $spin;
        return $this;
    }
}
