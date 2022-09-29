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
 * Material Design Iconic Font icon.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Assets\Icon
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
     * Enumerates the borders.
     *
     * @return string[] Returns the borders enumeration.
     */
    public static function enumBorders(): array {

        return [
            self::MATERIAL_DESIGN_ICONIC_FONT_BORDER,
            self::MATERIAL_DESIGN_ICONIC_FONT_BORDER_CIRCLE,
        ];
    }

    /**
     * Enumerates the flips.
     *
     * @return string[] Returns the flips enumeration.
     */
    public static function enumFlips(): array {

        return [
            self::MATERIAL_DESIGN_ICONIC_FONT_FLIP_HORIZONTAL,
            self::MATERIAL_DESIGN_ICONIC_FONT_FLIP_VERTICAL,
        ];
    }

    /**
     * Enumerates the pulls.
     *
     * @return string[] Returns the pulls enumeration.
     */
    public static function enumPulls(): array {

        return [
            self::MATERIAL_DESIGN_ICONIC_FONT_PULL_LEFT,
            self::MATERIAL_DESIGN_ICONIC_FONT_PULL_RIGHT,
        ];
    }

    /**
     * Enumerates the rotates.
     *
     * @return string[] Returns the rotates enumeration.
     */
    public static function enumRotates(): array {

        return [
            self::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_90,
            self::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_180,
            self::MATERIAL_DESIGN_ICONIC_FONT_ROTATE_270,
        ];
    }

    /**
     * Enumerates the sizes.
     *
     * @return string[] Returns the sizes enumeration.
     */
    public static function enumSizes(): array {

        return [
            self::MATERIAL_DESIGN_ICONIC_FONT_SIZE_LG,
            self::MATERIAL_DESIGN_ICONIC_FONT_SIZE_2X,
            self::MATERIAL_DESIGN_ICONIC_FONT_SIZE_3X,
            self::MATERIAL_DESIGN_ICONIC_FONT_SIZE_4X,
            self::MATERIAL_DESIGN_ICONIC_FONT_SIZE_5X,
        ];
    }

    /**
     * Enumerates the spins.
     *
     * @return string[] Returns the spins enumeration.
     */
    public static function enumSpins(): array {

        return [
            self::MATERIAL_DESIGN_ICONIC_FONT_SPIN,
            self::MATERIAL_DESIGN_ICONIC_FONT_SPIN_REVERSE,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getBorder(): ?string {
        return $this->border;
    }

    /**
     * {@inheritdoc}
     */
    public function getFixedWidth(): ?bool {
        return $this->fixedWidth;
    }

    /**
     * {@inheritdoc}
     */
    public function getFlip(): ?string {
        return $this->flip;
    }

    /**
     * {@inheritdoc}
     */
    public function getPull(): ?string {
        return $this->pull;
    }

    /**
     * {@inheritdoc}
     */
    public function getRotate(): ?string {
        return $this->rotate;
    }

    /**
     * {@inheritdoc}
     */
    public function getSize(): ?string {
        return $this->size;
    }

    /**
     * {@inheritdoc}
     */
    public function getSpin(): ?string {
        return $this->spin;
    }

    /**
     * {@inheritdoc}
     */
    public function setBorder(?string $border): MaterialDesignIconicFontIconInterface {

        if (false === in_array($border, static::enumBorders())) {
            $border = null;
        }

        $this->border = $border;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setFixedWidth(?bool $fixedWidth): MaterialDesignIconicFontIconInterface {
        $this->fixedWidth = $fixedWidth;
        return $this;
    }

    /**
     *{@inheritdoc}
     */
    public function setFlip(?string $flip): MaterialDesignIconicFontIconInterface {

        if (false === in_array($flip, static::enumFlips())) {
            $flip = null;
        }

        $this->flip = $flip;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setPull(?string $pull): MaterialDesignIconicFontIconInterface {

        if (false === in_array($pull, static::enumPulls())) {
            $pull = null;
        }

        $this->pull = $pull;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setRotate(?string $rotate): MaterialDesignIconicFontIconInterface {

        if (false === in_array($rotate, static::enumRotates())) {
            $rotate = null;
        }

        $this->rotate = $rotate;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setSize(?string $size): MaterialDesignIconicFontIconInterface {

        if (false === in_array($size, static::enumSizes())) {
            $size = null;
        }

        $this->size = $size;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setSpin(?string $spin): MaterialDesignIconicFontIconInterface {

        if (false === in_array($spin, static::enumSpins())) {
            $spin = null;
        }

        $this->spin = $spin;
        return $this;
    }
}
