<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Icon;

/**
 * Material Design Iconic Font icon.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Icon
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
     * {@inheritdoc}
     */
    public function getBorder() {
        return $this->border;
    }

    /**
     * {@inheritdoc}
     */
    public function getFixedWidth() {
        return $this->fixedWidth;
    }

    /**
     * {@inheritdoc}
     */
    public function getFlip() {
        return $this->flip;
    }

    /**
     * {@inheritdoc}
     */
    public function getPull() {
        return $this->pull;
    }

    /**
     * {@inheritdoc}
     */
    public function getRotate() {
        return $this->rotate;
    }

    /**
     * {@inheritdoc}
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * {@inheritdoc}
     */
    public function getSpin() {
        return $this->spin;
    }

    /**
     * {@inheritdoc}
     */
    public function setBorder($border) {
        if (true === in_array($border, MaterialDesignIconicFontIconEnumerator::enumBorders())) {
            $this->border = $border;
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setFixedWidth($fixedWidth) {
        $this->fixedWidth = $fixedWidth;
        return $this;
    }

    /**
     *{@inheritdoc}
     */
    public function setFlip($flip) {
        if (true === in_array($flip, MaterialDesignIconicFontIconEnumerator::enumFlips())) {
            $this->flip = $flip;
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setPull($pull) {
        if (true === in_array($pull, MaterialDesignIconicFontIconEnumerator::enumPulls())) {
            $this->pull = $pull;
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setRotate($rotate) {
        if (true === in_array($rotate, MaterialDesignIconicFontIconEnumerator::enumRotates())) {
            $this->rotate = $rotate;
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setSize($size) {
        if (true === in_array($size, MaterialDesignIconicFontIconEnumerator::enumSizes())) {
            $this->size = $size;
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setSpin($spin) {
        if (true === in_array($spin, MaterialDesignIconicFontIconEnumerator::enumSpins())) {
            $this->spin = $spin;
        }
        return $this;
    }

}
