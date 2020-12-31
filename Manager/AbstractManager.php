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

use Psr\Log\LoggerInterface;
use WBW\Bundle\CoreBundle\Provider\ProviderInterface;
use WBW\Bundle\CoreBundle\Service\LoggerTrait;

/**
 * Abstract manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager
 * @abstract
 */
abstract class AbstractManager implements ManagerInterface {

    use LoggerTrait;

    /**
     * Providers.
     *
     * @var ProviderInterface[]
     */
    private $providers;

    /**
     * Constructor.
     *
     * @param LoggerInterface|null $logger The logger.
     */
    public function __construct(LoggerInterface $logger = null) {
        $this->setLogger($logger);
        $this->setProviders([]);
    }

    /**
     * {@inheritDoc}
     */
    public function addProvider(ProviderInterface $provider): ManagerInterface {
        $this->providers[] = $provider;
        return $this->logInfo("A manager add a provider", ["_manager" => get_class($this), "_provider" => get_class($provider)]);
    }

    /**
     * {@inheritDoc}
     */
    public function contains(ProviderInterface $provider): bool {
        return -1 !== $this->indexOf($provider);
    }

    /**
     * Get the providers.
     *
     * @return ProviderInterface[] Returns the provider.
     */
    public function &getProviders(): array {
        return $this->providers;
    }

    /**
     * {@inheritDoc}
     */
    public function hasProviders(): bool {
        return 0 < $this->size();
    }

    /**
     * {@inheritDoc}
     */
    public function indexOf(ProviderInterface $provider): int {
        for ($i = count($this->providers) - 1; 0 <= $i; --$i) {
            if ($provider !== $this->providers[$i]) {
                continue;
            }
            return $i;
        }
        return -1;
    }

    /**
     * Log an info.
     *
     * @param string $message The message.
     * @param array $context The context.
     * @return ManagerInterface Returns this manager.
     */
    protected function logInfo(string $message, array $context): ManagerInterface {
        if (null !== $this->getLogger()) {
            $this->getLogger()->info($message, $context);
        }
        return $this;
    }

    /**
     * Set the providers.
     *
     * @param ProviderInterface[] $providers The providers.
     * @return ManagerInterface Returns this manager.
     */
    protected function setProviders(array $providers): ManagerInterface {
        $this->providers = $providers;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function size(): int {
        return count($this->providers);
    }
}
