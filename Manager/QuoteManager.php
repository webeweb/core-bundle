<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Manager;

use InvalidArgumentException;
use WBW\Bundle\CoreBundle\Exception\AlreadyRegisteredProviderException;
use WBW\Bundle\CoreBundle\Provider\ProviderInterface;
use WBW\Bundle\CoreBundle\Provider\QuoteProviderInterface;

/**
 * Quote manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Manager
 */
class QuoteManager extends AbstractManager {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.manager.quote";

    /**
     * {@inheritDoc}
     */
    public function addProvider(ProviderInterface $provider) {
        if (true === $this->contains($provider)) {
            throw new AlreadyRegisteredProviderException($provider);
        }
        return parent::addProvider($provider);
    }

    /**
     * {@inheritDoc}
     */
    public function contains(ProviderInterface $provider) {
        if (false === ($provider instanceof QuoteProviderInterface)) {
            throw new InvalidArgumentException("The provider must implements QuoteProviderInterface");
        }
        foreach ($this->getProviders() as $current) {
            if ($provider->getDomain() !== $current->getDomain()) {
                continue;
            }
            return true;
        }
        return false;
    }
}
