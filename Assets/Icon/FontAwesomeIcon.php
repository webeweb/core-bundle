<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Assets\Icon;

use WBW\Library\Symfony\Assets\AbstractIcon;

/**
 * Font Awesome icon.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Assets\Icon
 */
class FontAwesomeIcon extends AbstractIcon implements FontAwesomeIconInterface {

    /**
     * Animation.
     *
     * @var string|null
     */
    private $animation;

    /**
     * Bordered.
     *
     * @var bool|null
     */
    private $bordered;

    /**
     * Fixed width;
     *
     * @var bool|null
     */
    private $fixedWidth;

    /**
     * Font.
     *
     * @var string|null
     */
    private $font;

    /**
     * Pull.
     *
     * @var string|null
     */
    private $pull;

    /**
     * Size.
     *
     * @var string|null
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
     * {@inheritDoc}
     */
    public function getAnimation(): ?string {
        return $this->animation;
    }

    /**
     * {@inheritDoc}
     */
    public function getBordered(): ?bool {
        return $this->bordered;
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
    public function getFont(): ?string {
        return $this->font;
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
    public function getSize(): ?string {
        return $this->size;
    }

    /**
     * {@inheritDoc}
     */
    public function setAnimation(?string $animation): FontAwesomeIconInterface {
        if (false === in_array($animation, FontAwesomeIconEnumerator::enumAnimations())) {
            $animation = null;
        }
        $this->animation = $animation;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setBordered(?bool $bordered): FontAwesomeIconInterface {
        $this->bordered = $bordered;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setFixedWidth(?bool $fixedWidth): FontAwesomeIconInterface {
        $this->fixedWidth = $fixedWidth;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setFont(?string $font): FontAwesomeIconInterface {
        if (false === in_array($font, FontAwesomeIconEnumerator::enumFonts())) {
            $font = null;
        }
        $this->font = $font;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setPull(?string $pull): FontAwesomeIconInterface {
        if (false === in_array($pull, FontAwesomeIconEnumerator::enumPulls())) {
            $pull = null;
        }
        $this->pull = $pull;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSize(?string $size): FontAwesomeIconInterface {
        if (false === in_array($size, FontAwesomeIconEnumerator::enumSizes())) {
            $size = null;
        }
        $this->size = $size;
        return $this;
    }
}
