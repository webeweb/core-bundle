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

use ReflectionException;
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
    public function contains(ProviderInterface $provider) {

        if (false === ($provider instanceof QuoteProviderInterface)) {
            return false;
        }

        foreach ($this->getProviders() as $current) {
            if (false === ($current instanceof QuoteProviderInterface) || $provider->getDomain() !== $current->getDomain()) {
                continue;
            }
            return true;
        }

        return false;
    }

    /**
     * Register a quote provider.
     *
     * @param QuoteProviderInterface $quoteProvider The quote provider.
     * @return ManagerInterface Returns this manager.
     * @throws AlreadyRegisteredProviderException Throws an already registered provider exception.
     * @throws ReflectionException Throws a reflection exception if an error occurs.
     */
    public function registerProvider(QuoteProviderInterface $quoteProvider) {
        if (true === $this->contains($quoteProvider)) {
            throw new AlreadyRegisteredProviderException($quoteProvider);
        }
        return $this->addProvider($quoteProvider);
    }
}
