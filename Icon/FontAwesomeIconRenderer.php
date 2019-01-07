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
 * Font Awesome icon renderer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Icon
 */
class FontAwesomeIconRenderer {

    /**
     * Render an animation.
     *
     * @param FontAwesomeIconInterface $fontAwesomeIcon The Font Awesome icon.
     * @return string Returns the rendered animation in case of success, null otherwise.
     */
    public static function renderAnimation(FontAwesomeIconInterface $fontAwesomeIcon) {
        return null !== $fontAwesomeIcon->getAnimation() ? "fa-" . $fontAwesomeIcon->getAnimation() : null;
    }

    /**
     * Render a bordered.
     *
     * @param FontAwesomeIconInterface $fontAwesomeIcon The Font Awesome icon.
     * @return string Returns the rendered bordered in case of success, null otherwise.
     */
    public static function renderBordered(FontAwesomeIconInterface $fontAwesomeIcon) {
        return true === $fontAwesomeIcon->getBordered() ? "fa-border" : null;
    }

    /**
     * Render a fixed width.
     *
     * @param FontAwesomeIconInterface $fontAwesomeIcon The Font Awesome icon.
     * @return string Returns the rendered fixed width in case of success, null otherwise.
     */
    public static function renderFixedWidth(FontAwesomeIconInterface $fontAwesomeIcon) {
        return true === $fontAwesomeIcon->getFixedWidth() ? "fa-fw" : null;
    }

    /**
     * Render a font.
     *
     * @param FontAwesomeIconInterface $fontAwesomeIcon The Font Awesome icon.
     * @return string Returns the rendered font.
     */
    public static function renderFont(FontAwesomeIconInterface $fontAwesomeIcon) {
        return "fa" . $fontAwesomeIcon->getFont();
    }

    /**
     * Render a name.
     *
     * @param FontAwesomeIconInterface $fontAwesomeIcon The Font Awesome icon.
     * @return string Returns the rendered name in case of success, false otherwise.
     */
    public static function renderName(FontAwesomeIconInterface $fontAwesomeIcon) {
        return null !== $fontAwesomeIcon->getName() ? "fa-" . $fontAwesomeIcon->getName() : null;
    }

    /**
     * Render a pull.
     *
     * @param FontAwesomeIconInterface $fontAwesomeIcon The Font Awesome icon.
     * @return string Returns the rendered pull in case of success, null otherwise.
     */
    public static function renderPull(FontAwesomeIconInterface $fontAwesomeIcon) {
        return null !== $fontAwesomeIcon->getPull() ? "fa-pull-" . $fontAwesomeIcon->getPull() : null;
    }

    /**
     * Render a size.
     *
     * @param FontAwesomeIconInterface $fontAwesomeIcon The Font Awesome icon.
     * @return string Returns the rendered size in case of success, null otherwise.
     */
    public static function renderSize(FontAwesomeIconInterface $fontAwesomeIcon) {
        return null !== $fontAwesomeIcon->getSize() ? "fa-" . $fontAwesomeIcon->getSize() : null;
    }

    /**
     * Render a style.
     *
     * @param FontAwesomeIconInterface $fontAwesomeIcon The Font Awesome icon.
     * @return string Returns the rendered style.
     */
    public static function renderStyle(FontAwesomeIconInterface $fontAwesomeIcon) {
        return IconRenderer::renderStyle($fontAwesomeIcon);
    }

}
