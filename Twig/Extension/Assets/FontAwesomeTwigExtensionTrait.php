<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Assets;

/**
 * Font Awesome Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Assets
 */
trait FontAwesomeTwigExtensionTrait {

    /**
     * Font Awesome Twig extension.
     *
     * @var FontAwesomeTwigExtension|null
     */
    private $fontAwesomeTwigExtension;

    /**
     * Get the Font Awesome Twig extension.
     *
     * @return FontAwesomeTwigExtension|null Returns the Font Awesome Twig extension.
     */
    public function getFontAwesomeTwigExtension(): ?FontAwesomeTwigExtension {
        return $this->fontAwesomeTwigExtension;
    }

    /**
     * Set the Font Awesome Twig extension.
     *
     * @param FontAwesomeTwigExtension|null $fontAwesomeTwigExtension The Font Awesome Twig extension.
     * @return self Returns this instance.
     */
    protected function setFontAwesomeTwigExtension(?FontAwesomeTwigExtension $fontAwesomeTwigExtension): self {
        $this->fontAwesomeTwigExtension = $fontAwesomeTwigExtension;
        return $this;
    }
}
