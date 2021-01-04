<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension;

/**
 * Stylesheet Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
trait StylesheetTwigExtensionTrait {

    /**
     * Stylesheet Twig extension.
     *
     * @var StylesheetTwigExtension|null
     */
    private $stylesheetTwigExtension;

    /**
     * Get the stylesheet Twig extension.
     *
     * @return StylesheetTwigExtension|null Returns the stylesheet Twig extension.
     */
    public function getStylesheetTwigExtension(): ?StylesheetTwigExtension {
        return $this->stylesheetTwigExtension;
    }

    /**
     * Set the stylesheet Twig extension.
     *
     * @param StylesheetTwigExtension|null $stylesheetTwigExtension The stylesheet Twig extension.
     */
    protected function setStylesheetTwigExtension(?StylesheetTwigExtension $stylesheetTwigExtension): self {
        $this->stylesheetTwigExtension = $stylesheetTwigExtension;
        return $this;
    }
}
