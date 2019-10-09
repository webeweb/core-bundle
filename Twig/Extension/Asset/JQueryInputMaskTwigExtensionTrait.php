<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Asset;

/**
 * jQuery InputMask Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
trait JQueryInputMaskTwigExtensionTrait {

    /**
     * jQuery InputMask Twig extension.
     *
     * @var JQueryInputMaskTwigExtension
     */
    private $jQueryInputMaskTwigExtension;

    /**
     * Get the jQuery InputMask Twig extension.
     *
     * @return JQueryInputMaskTwigExtension Returns the jQuery InputMask Twig extension.
     */
    public function getJQueryInputMaskTwigExtension() {
        return $this->jQueryInputMaskTwigExtension;
    }

    /**
     * Set the jQuery InputMask Twig extension.
     *
     * @param JQueryInputMaskTwigExtension|null $jQueryInputMaskTwigExtension The jQuery InputMask Twig extension.
     */
    protected function setJQueryInputMaskTwigExtension(JQueryInputMaskTwigExtension $jQueryInputMaskTwigExtension = null) {
        $this->jQueryInputMaskTwigExtension = $jQueryInputMaskTwigExtension;
        return $this;
    }
}
