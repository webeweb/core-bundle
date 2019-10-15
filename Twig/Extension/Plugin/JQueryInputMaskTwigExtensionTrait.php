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

use WBW\Bundle\CoreBundle\Twig\Extension\Asset\JQueryInputMaskTwigExtension as BaseJQueryInputMaskTwigExtension;

/**
 * jQuery InputMask Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 * @deprecated since 2.13.0, use {@see WBW\Bundle\CoreBundle\Twig\Extension\Asset\JQueryInputMaskTwigExtensionTrait} instead.
 */
trait JQueryInputMaskTwigExtensionTrait {

    /**
     * jQuery InputMask Twig extension.
     *
     * @var BaseJQueryInputMaskTwigExtension
     */
    private $jQueryInputMaskTwigExtension;

    /**
     * Get the jQuery InputMask Twig extension.
     *
     * @return BaseJQueryInputMaskTwigExtension Returns the jQuery InputMask Twig extension.
     */
    public function getJQueryInputMaskTwigExtension() {
        return $this->jQueryInputMaskTwigExtension;
    }

    /**
     * Set the jQuery InputMask Twig extension.
     *
     * @param BaseJQueryInputMaskTwigExtension|null $jQueryInputMaskTwigExtension The jQuery InputMask Twig extension.
     */
    protected function setJQueryInputMaskTwigExtension(BaseJQueryInputMaskTwigExtension $jQueryInputMaskTwigExtension = null) {
        $this->jQueryInputMaskTwigExtension = $jQueryInputMaskTwigExtension;
        return $this;
    }
}
