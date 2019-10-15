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

use WBW\Bundle\CoreBundle\Twig\Extension\Asset\FontAwesomeTwigExtension as BaseFontAwesomeTwigExtension;

/**
 * Font Awesome Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 * @deprecated since 2.13.0, use {@see WBW\Bundle\CoreBundle\Twig\Extension\Asset\FontAwesomeTwigExtensionTrait} instead.
 */
trait FontAwesomeTwigExtensionTrait {

    /**
     * Font Awesome Twig extension.
     *
     * @var BaseFontAwesomeTwigExtension
     */
    private $fontAwesomeTwigExtension;

    /**
     * Get the Font Awesome Twig extension.
     *
     * @return BaseFontAwesomeTwigExtension Returns the Font Awesome Twig extension.
     */
    public function getFontAwesomeTwigExtension() {
        return $this->fontAwesomeTwigExtension;
    }

    /**
     * Set the Font Awesome Twig extension.
     *
     * @param BaseFontAwesomeTwigExtension|null $fontAwesomeTwigExtension The Font Awesome Twig extension.
     */
    protected function setFontAwesomeTwigExtension(BaseFontAwesomeTwigExtension $fontAwesomeTwigExtension = null) {
        $this->fontAwesomeTwigExtension = $fontAwesomeTwigExtension;
        return $this;
    }
}
