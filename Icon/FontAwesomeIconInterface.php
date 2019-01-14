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
 * Font Awesome icon interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Icon
 */
interface FontAwesomeIconInterface extends IconInterface {

    /**
     * Font Awesome animation "Pulse".
     *
     * @var string
     */
    const FONT_AWESOME_ANIMATION_PULSE = "pulse";

    /**
     * Font Awesome animation "Spin".
     *
     * @var string
     */
    const FONT_AWESOME_ANIMATION_SPIN = "spin";

    /**
     * Default Font Awesome font.
     *
     * @var string
     */
    const FONT_AWESOME_FONT = "";

    /**
     * Font Awesome font "Bold".
     *
     * @var string
     */
    const FONT_AWESOME_FONT_BOLD = "b";

    /**
     * Font Awesome font "Light".
     *
     * @var string
     */
    const FONT_AWESOME_FONT_LIGHT = "l";

    /**
     * Font Awesome font "Regular".
     *
     * @var string
     */
    const FONT_AWESOME_FONT_REGULAR = "r";

    /**
     * Font Awesome font "Solid".
     *
     * @var string
     */
    const FONT_AWESOME_FONT_SOLID = "s";

    /**
     * Font Awesome pull "Left".
     *
     * @var string
     */
    const FONT_AWESOME_PULL_LEFT = "left";

    /**
     * Font Awesome pull "Right".
     *
     * @var string
     */
    const FONT_AWESOME_PULL_RIGHT = "right";

    /**
     * Font Awesome size "10x".
     *
     * @var string
     */
    const FONT_AWESOME_SIZE_10X = "10x";

    /**
     * Font Awesome size "2x".
     *
     * @var string
     */
    const FONT_AWESOME_SIZE_2X = "2x";

    /**
     * Font Awesome size "3x".
     *
     * @var string
     */
    const FONT_AWESOME_SIZE_3X = "3x";

    /**
     * Font Awesome size "4x".
     *
     * @var string
     */
    const FONT_AWESOME_SIZE_4X = "4x";

    /**
     * Font Awesome size "5x".
     *
     * @var string
     */
    const FONT_AWESOME_SIZE_5X = "5x";

    /**
     * Font Awesome size "6x".
     *
     * @var string
     */
    const FONT_AWESOME_SIZE_6X = "6x";

    /**
     * Font Awesome size "7x".
     *
     * @var string
     */
    const FONT_AWESOME_SIZE_7X = "7x";

    /**
     * Font Awesome size "8x".
     *
     * @var string
     */
    const FONT_AWESOME_SIZE_8X = "8x";

    /**
     * Font Awesome size "9x".
     *
     * @var string
     */
    const FONT_AWESOME_SIZE_9X = "9x";

    /**
     * Font Awesome size "Lg".
     *
     * @var string
     */
    const FONT_AWESOME_SIZE_LG = "lg";

    /**
     * Font Awesome size "Sm".
     *
     * @var string
     */
    const FONT_AWESOME_SIZE_SM = "sm";

    /**
     * Font Awesome size "Xs".
     *
     * @var string
     */
    const FONT_AWESOME_SIZE_XS = "xs";

    /**
     * Get the animation.
     *
     * @return string Returns the animation.
     */
    public function getAnimation();

    /**
     * Get the bordered.
     *
     * @return bool Returns the bordered.
     */
    public function getBordered();

    /**
     * Get the fixed width.
     *
     * @return bool Returns the fixed width.
     */
    public function getFixedWidth();

    /**
     * Get the font.
     *
     * @return string Returns the font.
     */
    public function getFont();

    /**
     * Get the pull.
     *
     * @return string Returns the pull.
     */
    public function getPull();

    /**
     * Get the size.
     *
     * @return string Returns the size.
     */
    public function getSize();

    /**
     * Set the animation.
     *
     * @param string $animation The animation.
     * @return FontAwesomeIconInterface Returns this icon.
     */
    public function setAnimation($animation);

    /**
     * Set the bordered.
     *
     * @param bool $bordered Bordered ?
     * @return FontAwesomeIconInterface Returns this icon.
     */
    public function setBordered($bordered);

    /**
     * Set the fixed width.
     *
     * @param bool $fixedWidth Fixed width ?
     * @return FontAwesomeIconInterface Returns this icon.
     */
    public function setFixedWidth($fixedWidth);

    /**
     * Set the font.
     *
     * @param string $font The font.
     * @return FontAwesomeIconInterface Returns this icon.
     */
    public function setFont($font);

    /**
     * Set the pull.
     *
     * @param string $pull The pull.
     * @return FontAwesomeIconInterface Returns this icon.
     */
    public function setPull($pull);

    /**
     * Set the size.
     *
     * @param string $size The size.
     * @return FontAwesomeIconInterface Returns this icon.
     */
    public function setSize($size);
}
