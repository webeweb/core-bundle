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
 * Material Design Iconic Font icon interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Icon
 */
interface MaterialDesignIconicFontIconInterface extends IconInterface {

    /**
     * Material Design Iconic Font border "Border".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_BORDER = "border";

    /**
     * Material Design Iconic Font border "Border circle".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_BORDER_CIRCLE = "border-circle";

    /**
     * Material Design Iconic Font flip "Horizontal".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_FLIP_HORIZONTAL = "horizontal";

    /**
     * Material Design Iconic Font flip "Vertical".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_FLIP_VERTICAL = "vertical";

    /**
     * Material Design Iconic Font pull "Left".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_PULL_LEFT = "left";

    /**
     * Material Design Iconic Font pull "Right".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_PULL_RIGHT = "right";

    /**
     * Material Design Iconic Font rotate "180".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_ROTATE_180 = "180";

    /**
     * Material Design Iconic Font rotate "270".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_ROTATE_270 = "270";

    /**
     * Material Design Iconic Font rotate "90".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_ROTATE_90 = "90";

    /**
     * Material Design Iconic Font size "2x".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_SIZE_2X = "2x";

    /**
     * Material Design Iconic Font size "3x".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_SIZE_3X = "3x";

    /**
     * Material Design Iconic Font size "4x".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_SIZE_4X = "4x";

    /**
     * Material Design Iconic Font size "5x".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_SIZE_5X = "5x";

    /**
     * Material Design Iconic Font size "lg".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_SIZE_LG = "lg";

    /**
     * Material Design Iconic Font spin "Spin".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_SPIN = "spin";

    /**
     * Material Design Iconic Font spin "Spin reverse".
     *
     * @var string
     */
    const MATERIAL_DESIGN_ICONIC_FONT_SPIN_REVERSE = "spin-reverse";

    /**
     * Get the border.
     *
     * @return string Returns the border.
     */
    public function getBorder();

    /**
     * Get the fixed width.
     *
     * @return bool Returns the fixed width.
     */
    public function getFixedWidth();

    /**
     * Get the flip.
     *
     * @return string Returns the flip.
     */
    public function getFlip();

    /**
     * Get the pull.
     *
     * @return string Returns the pull.
     */
    public function getPull();

    /**
     * Get the rotate.
     *
     * @return string Returns the rotate.
     */
    public function getRotate();

    /**
     * Get the size.
     *
     * @return string Returns the size.
     */
    public function getSize();

    /**
     * Get the spin.
     *
     * @return string Returns the spin.
     */
    public function getSpin();

    /**
     * Set the border.
     *
     * @param string $border The border.
     * @return MaterialDesignIconicFontIconInterface Returns this icon.
     */
    public function setBorder($border);

    /**
     * Set the fixed width.
     *
     * @param bool $fixedWidth Fixed width ?
     * @return MaterialDesignIconicFontIconInterface Returns this icon.
     */
    public function setFixedWidth($fixedWidth);

    /**
     * Set the flip.
     *
     * @param string $flip The flip.
     * @return MaterialDesignIconicFontIconInterface Returns this icon.
     */
    public function setFlip($flip);

    /**
     * Set the pull.
     *
     * @param string $pull The pull.
     * @return MaterialDesignIconicFontIconInterface Returns this icon.
     */
    public function setPull($pull);

    /**
     * Set the rotate.
     *
     * @param string $rotate The rotate.
     * @return MaterialDesignIconicFontIconInterface Returns this icon.
     */
    public function setRotate($rotate);

    /**
     * Set the size.
     *
     * @param string $size The size.
     * @return MaterialDesignIconicFontIconInterface Returns this icon.
     */
    public function setSize($size);

    /**
     * Set the spin.
     *
     * @param string $spin The spin.
     * @return MaterialDesignIconicFontIconInterface Returns this icon.
     */
    public function setSpin($spin);

}
