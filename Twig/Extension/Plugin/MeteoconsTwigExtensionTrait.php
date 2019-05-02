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
 * Meteocons Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
trait MeteoconsTwigExtensionTrait {

    /**
     * Meteocons Twig extension.
     *
     * @var MeteoconsTwigExtension
     */
    private $meteoconsTwigExtension;

    /**
     * Get the Meteocons Twig extension.
     *
     * @return MeteoconsTwigExtension Returns the Meteocons Twig extension.
     */
    public function getMeteoconsTwigExtension() {
        return $this->meteoconsTwigExtension;
    }

    /**
     * Set the Meteocons Twig extension.
     *
     * @param MeteoconsTwigExtension|null $meteoconsTwigExtension The Meteocons Twig extension.
     */
    protected function setMeteoconsTwigExtension(MeteoconsTwigExtension $meteoconsTwigExtension = null) {
        $this->meteoconsTwigExtension = $meteoconsTwigExtension;
        return $this;
    }
}
