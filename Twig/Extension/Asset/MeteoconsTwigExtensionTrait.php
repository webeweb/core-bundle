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
 * Meteocons Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Asset
 */
trait MeteoconsTwigExtensionTrait {

    /**
     * Meteocons Twig extension.
     *
     * @var MeteoconsTwigExtension|null
     */
    private $meteoconsTwigExtension;

    /**
     * Get the Meteocons Twig extension.
     *
     * @return MeteoconsTwigExtension|null Returns the Meteocons Twig extension.
     */
    public function getMeteoconsTwigExtension(): ?MeteoconsTwigExtension {
        return $this->meteoconsTwigExtension;
    }

    /**
     * Set the Meteocons Twig extension.
     *
     * @param MeteoconsTwigExtension|null $meteoconsTwigExtension The Meteocons Twig extension.
     * @return self Returns this instance.
     */
    protected function setMeteoconsTwigExtension(?MeteoconsTwigExtension $meteoconsTwigExtension): self {
        $this->meteoconsTwigExtension = $meteoconsTwigExtension;
        return $this;
    }
}
