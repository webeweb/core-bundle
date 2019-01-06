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
 * Font Awesome icon.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Icon
 */
class FontAwesomeIcon extends AbstractIcon implements FontAwesomeIconInterface {

    /**
     * Animation.
     *
     * @var string
     */
    private $animation;

    /**
     * Bordered.
     *
     * @var bool
     */
    private $bordered;

    /**
     * Fixed width;
     *
     * @var bool
     */
    private $fixedWidth;

    /**
     * Font.
     *
     * @var string
     */
    private $font;

    /**
     * Pull.
     *
     * @var string
     */
    private $pull;

    /**
     * Size.
     *
     * @var string
     */
    private $size;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->setBordered(false);
        $this->setFixedWidth(false);
        $this->setFont(self::FONT_AWESOME_FONT);
    }

    /**
     * {@inheritdoc}
     */
    public function getAnimation() {
        return $this->animation;
    }

    /**
     * {@inheritdoc}
     */
    public function getBordered() {
        return $this->bordered;
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
    public function getFont() {
        return $this->font;
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
    public function getSize() {
        return $this->size;
    }

    /**
     * {@inheritdoc}
     */
    public function setAnimation($animation) {
        if (true === in_array($animation, FontAwesomeIconEnumerator::enumAnimations())) {
            $this->animation = $animation;
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setBordered($bordered) {
        $this->bordered = $bordered;
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
     * {@inheritdoc}
     */
    public function setFont($font) {
        if (true === in_array($font, FontAwesomeIconEnumerator::enumFonts())) {
            $this->font = $font;
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setPull($pull) {
        if (true === in_array($pull, FontAwesomeIconEnumerator::enumPulls())) {
            $this->pull = $pull;
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setSize($size) {
        if (true === in_array($size, FontAwesomeIconEnumerator::enumSizes())) {
            $this->size = $size;
        }
        return $this;
    }

}
