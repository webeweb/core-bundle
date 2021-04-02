<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Color;

use WBW\Bundle\CoreBundle\Provider\Asset\ColorProviderInterface;

/**
 * Abstract color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset\Color
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
     * @param string|null $domain The domain.
     */
    protected function __construct(?string $domain) {
        $this->setDomain($domain);
    }

    /**
     * Get the domain.
     *
     * @return string Returns the domain.
     */
    public function getDomain(): string {
        return $this->domain;
    }

    /**
     * Set the domain.
     *
     * @param string $domain The domain.
     * @return AbstractColorProvider Returns this color provider.
     */
    protected function setDomain(string $domain): AbstractColorProvider {
        $this->domain = $domain;
        return $this;
    }
}
