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
    const SERVICE_NAME = "webeweb.core.manager.color";

    /**
     * {@inheritDoc}
     */
    public function contains(ProviderInterface $provider) {

        if (false === ($provider instanceof ColorProviderInterface)) {
            return false;
        }

        $identifier = ColorHelper::getIdentifier($provider);

        foreach ($this->getProviders() as $current) {
            if (false === ($current instanceof ColorProviderInterface) || $identifier !== ColorHelper::getIdentifier($current)) {
                continue;
            }
            return true;
        }

        return false;
    }

    /**
     * Register a color provider.
     *
     * @param ColorProviderInterface $colorProvider The color provider.
     * @return ManagerInterface Returns this manager.
     * @throws AlreadyRegisteredProviderException Throws an already registered provider exception.
     * @throws ReflectionException Throws a reflection exception if an error occurs.
     */
    public function registerProvider(ColorProviderInterface $colorProvider) {
        if (true === $this->contains($colorProvider)) {
            throw new AlreadyRegisteredProviderException($colorProvider);
        }
        return $this->addProvider($colorProvider);
    }
}
