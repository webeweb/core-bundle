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

use WBW\Bundle\CoreBundle\Twig\Extension\Asset\MeteoconsTwigExtension as BaseMeteoconsTwigExtension;

/**
 * Meteocons Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 * @deprecated since 2.13.0, use {@see WBW\Bundle\CoreBundle\Twig\Extension\Asset\MeteoconsTwigExtensionTrait} instead.
 */
trait MeteoconsTwigExtensionTrait {

    /**
     * Meteocons Twig extension.
     *
     * @var BaseMeteoconsTwigExtension
     */
    private $meteoconsTwigExtension;

    /**
     * Get the Meteocons Twig extension.
     *
     * @return BaseMeteoconsTwigExtension Returns the Meteocons Twig extension.
     */
    public function getMeteoconsTwigExtension() {
        return $this->meteoconsTwigExtension;
    }

    /**
     * Set the Meteocons Twig extension.
     *
     * @param BaseMeteoconsTwigExtension|null $meteoconsTwigExtension The Meteocons Twig extension.
     */
    protected function setMeteoconsTwigExtension(BaseMeteoconsTwigExtension $meteoconsTwigExtension = null) {
        $this->meteoconsTwigExtension = $meteoconsTwigExtension;
        return $this;
    }
}
