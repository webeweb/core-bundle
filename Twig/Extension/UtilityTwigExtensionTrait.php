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
     * @var UtilityTwigExtension|null
     */
    private $utilityTwigExtension;

    /**
     * Get the utility Twig extension.
     *
     * @return UtilityTwigExtension|null Returns the utility Twig extension.
     */
    public function getUtilityTwigExtension(): ?UtilityTwigExtension {
        return $this->utilityTwigExtension;
    }

    /**
     * Set the utility Twig extension.
     *
     * @param UtilityTwigExtension|null $utilityTwigExtension The utility Twig extension.
     * @return self Returns this instance.
     */
    protected function setUtilityTwigExtension(?UtilityTwigExtension $utilityTwigExtension): self {
        $this->utilityTwigExtension = $utilityTwigExtension;
        return $this;
    }
}
