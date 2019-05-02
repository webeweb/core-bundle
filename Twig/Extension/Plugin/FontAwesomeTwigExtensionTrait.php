<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Plugin;

/**
 * Font Awesome Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
trait FontAwesomeTwigExtensionTrait {

    /**
     * Font Awesome Twig extension.
     *
     * @var FontAwesomeTwigExtension
     */
    private $fontAwesomeTwigExtension;

    /**
     * Get the Font Awesome Twig extension.
     *
     * @return FontAwesomeTwigExtension Returns the Font Awesome Twig extension.
     */
    public function getFontAwesomeTwigExtension() {
        return $this->fontAwesomeTwigExtension;
    }

    /**
     * Set the Font Awesome Twig extension.
     *
     * @param FontAwesomeTwigExtension|null $fontAwesomeTwigExtension The Font Awesome Twig extension.
     */
    protected function setFontAwesomeTwigExtension(FontAwesomeTwigExtension $fontAwesomeTwigExtension = null) {
        $this->fontAwesomeTwigExtension = $fontAwesomeTwigExtension;
        return $this;
    }
}
