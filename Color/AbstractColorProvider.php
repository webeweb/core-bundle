<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Color;

use WBW\Bundle\CoreBundle\Provider\ColorProviderInterface;

/**
 * Abstract color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
 * @abstract
 */
abstract class AbstractColorProvider implements ColorProviderInterface {

    /**
     * Domain.
     *
     * @var string
     */
    private $domain;

    /**
     * Constructor.
     *
     * @param string $domain The domain.
     */
    protected function __construct($domain = "MaterialDesignColorPalette") {
        $this->setDomain($domain);
    }

    /**
     * Get the domain.
     *
     * @return string Returns the domain.
     */
    public function getDomain() {
        return $this->domain;
    }

    /**
     * Set the domain.
     *
     * @param string $domain The domain.
     * @return AbstractColorProvider Returns this color provider.
     */
    protected function setDomain($domain) {
        $this->domain = $domain;
        return $this;
    }
}
