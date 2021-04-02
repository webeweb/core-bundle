<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Manager\Asset;

use InvalidArgumentException;
use WBW\Bundle\CoreBundle\Exception\AlreadyRegisteredProviderException;
use WBW\Bundle\CoreBundle\Manager\AbstractManager;
use WBW\Bundle\CoreBundle\Manager\ManagerInterface;
use WBW\Bundle\CoreBundle\Provider\Asset\QuoteProviderInterface;
use WBW\Bundle\CoreBundle\Provider\ProviderInterface;

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
    const SERVICE_NAME = "wbw.core.manager.quote";

    /**
     * {@inheritDoc}
     */
    public function addProvider(ProviderInterface $provider): ManagerInterface {
        if (true === $this->contains($provider)) {
            throw new AlreadyRegisteredProviderException($provider);
        }
        $provider->init();
        return parent::addProvider($provider);
    }

    /**
     * {@inheritDoc}
     */
    public function contains(ProviderInterface $provider): bool {
        if (false === ($provider instanceof QuoteProviderInterface)) {
            throw new InvalidArgumentException("The provider must implements QuoteProviderInterface");
        }
        foreach ($this->getProviders() as $current) {
            if ($provider->getDomain() === $current->getDomain()) {
                return true;
            }
        }
        return false;
    }

    /**
     * Get a quote provider.
     *
     * @param string $domain The domain.
     * @return ProviderInterface|null Returns the quote provider.
     */
    public function getProvider(string $domain): ?ProviderInterface {
        foreach ($this->getProviders() as $current) {
            if ($domain === $current->getDomain()) {
                return $current;
            }
        }
        return null;
    }
}
