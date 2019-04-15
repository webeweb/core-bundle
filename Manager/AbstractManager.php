<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Manager;

use WBW\Bundle\CoreBundle\Provider\ProviderInterface;

/**
 * Abstract manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager
 * @abstract
 */
abstract class AbstractManager implements ManagerInterface {

    /**
     * Providers.
     *
     * @var ProviderInterface[]
     */
    private $providers;

    /**
     * Constructor.
     */
    protected function __construct() {
        $this->setProviders([]);
    }

    /**
     * {@inheritDoc}
     */
    public function addProvider(ProviderInterface $provider) {
        $this->providers[] = $provider;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function contains(ProviderInterface $provider) {
        return -1 !== $this->indexOf($provider);
    }

    /**
     * Get the providers.
     *
     * @return ProviderInterface[] Returns the provider.
     */
    public function &getProviders() {
        return $this->providers;
    }

    /**
     * {@inheritDoc}
     */
    public function hasProviders() {
        return 0 < $this->size();
    }

    /**
     * {@inheritDoc}
     */
    public function indexOf(ProviderInterface $provider) {
        for ($i = count($this->providers) - 1; 0 <= $i; --$i) {
            if ($provider !== $this->providers[$i]) {
                continue;
            }
            return $i;
        }
        return -1;
    }

    /**
     * {@inheritDoc}
     */
    public function removeProvider(ProviderInterface $provider) {
        $indexOf = $this->indexOf($provider);
        if (-1 !== $indexOf) {
            unset($this->providers[$indexOf]);
        }
        return $this;
    }

    /**
     * Set the providers.
     *
     * @param ProviderInterface[] $providers The providers.
     * @return ManagerInterface Returns this manager.
     */
    protected function setProviders(array $providers) {
        $this->providers = $providers;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function size() {
        return count($this->providers);
    }
}
