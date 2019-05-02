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
 * Utility Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
trait UtilityTwigExtensionTrait {

    /**
     * Utility Twig extension.
     *
     * @var UtilityTwigExtension
     */
    private $utilityTwigExtension;

    /**
     * Get the utility Twig extension.
     *
     * @return UtilityTwigExtension Returns the utility Twig extension.
     */
    public function getUtilityTwigExtension() {
        return $this->utilityTwigExtension;
    }

    /**
     * Set the utility Twig extension.
     *
     * @param UtilityTwigExtension|null $utilityTwigExtension The utility Twig extension.
     */
    protected function setUtilityTwigExtension(UtilityTwigExtension $utilityTwigExtension = null) {
        $this->utilityTwigExtension = $utilityTwigExtension;
        return $this;
    }
}
