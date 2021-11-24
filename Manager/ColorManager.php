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
use WBW\Bundle\CoreBundle\Helper\ColorHelper;
use WBW\Bundle\CoreBundle\Provider\ColorProviderInterface;
use WBW\Bundle\CoreBundle\Provider\ProviderInterface;

/**
 * Color manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager
 */
class ColorManager extends AbstractManager {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.manager.color";

    /**
     * {@inheritDoc}
     */
    public function addProvider(ProviderInterface $provider): ManagerInterface {

        if (true === $this->contains($provider)) {
            throw new AlreadyRegisteredProviderException($provider);
        }

        return parent::addProvider($provider);
    }

    /**
     * {@inheritDoc}
     */
    public function contains(ProviderInterface $provider): bool {

        if (false === ($provider instanceof ColorProviderInterface)) {
            throw new InvalidArgumentException("The provider must implements ColorProviderInterface");
        }

        $identifier = ColorHelper::getIdentifier($provider);

        foreach ($this->getProviders() as $current) {
            if ($identifier === ColorHelper::getIdentifier($current)) {
                return true;
            }
        }

        return false;
    }
}
