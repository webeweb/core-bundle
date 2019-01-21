<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Icon\FontAwesome;

use WBW\Bundle\CoreBundle\Icon\IconRenderer;

/**
 * Font Awesome icon renderer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Icon\FontAwesome
 */
class FontAwesomeIconRenderer extends IconRenderer {

    /**
     * Render an animation.
     *
     * @param FontAwesomeIconInterface $icon The icon.
     * @return string|null Returns the rendered animation in case of success, null otherwise.
     */
    public static function renderAnimation(FontAwesomeIconInterface $icon) {
        return null !== $icon->getAnimation() ? "fa-" . $icon->getAnimation() : null;
    }

    /**
     * Render a bordered.
     *
     * @param FontAwesomeIconInterface $icon The icon.
     * @return string Returns the rendered bordered in case of success, null otherwise.
     */
    public static function renderBordered(FontAwesomeIconInterface $icon) {
        return true === $icon->getBordered() ? "fa-border" : null;
    }

    /**
     * Render a fixed width.
     *
     * @param FontAwesomeIconInterface $icon The icon.
     * @return string Returns the rendered fixed width in case of success, null otherwise.
     */
    public static function renderFixedWidth(FontAwesomeIconInterface $icon) {
        return true === $icon->getFixedWidth() ? "fa-fw" : null;
    }

    /**
     * Render a font.
     *
     * @param FontAwesomeIconInterface $icon The icon.
     * @return string Returns the rendered font.
     */
    public static function renderFont(FontAwesomeIconInterface $icon) {
        return "fa" . $icon->getFont();
    }

    /**
     * Render a name.
     *
     * @param FontAwesomeIconInterface $icon The icon.
     * @return string|null Returns the rendered name in case of success, false otherwise.
     */
    public static function renderName(FontAwesomeIconInterface $icon) {
        return null !== $icon->getName() ? "fa-" . $icon->getName() : null;
    }

    /**
     * Render a pull.
     *
     * @param FontAwesomeIconInterface $icon The icon.
     * @return string|null Returns the rendered pull in case of success, null otherwise.
     */
    public static function renderPull(FontAwesomeIconInterface $icon) {
        return null !== $icon->getPull() ? "fa-pull-" . $icon->getPull() : null;
    }

    /**
     * Render a size.
     *
     * @param FontAwesomeIconInterface $icon The icon.
     * @return string|null Returns the rendered size in case of success, null otherwise.
     */
    public static function renderSize(FontAwesomeIconInterface $icon) {
        return null !== $icon->getSize() ? "fa-" . $icon->getSize() : null;
    }
}
