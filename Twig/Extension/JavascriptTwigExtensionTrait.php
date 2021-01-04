<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension;

/**
 * Javascript Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
trait JavascriptTwigExtensionTrait {

    /**
     * Javascript Twig extension.
     *
     * @var JavascriptTwigExtension|null
     */
    private $javascriptTwigExtension;

    /**
     * Get the javascript Twig extension.
     *
     * @return JavascriptTwigExtension|null Returns the javascript Twig extension.
     */
    public function getJavascriptTwigExtension(): ?JavascriptTwigExtension {
        return $this->javascriptTwigExtension;
    }

    /**
     * Set the javascript Twig extension.
     *
     * @param JavascriptTwigExtension|null $javascriptTwigExtension The javascript Twig extension.
     */
    protected function setJavascriptTwigExtension(?JavascriptTwigExtension $javascriptTwigExtension): ?self {
        $this->javascriptTwigExtension = $javascriptTwigExtension;
        return $this;
    }
}
