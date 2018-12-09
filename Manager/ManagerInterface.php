<?php

/**
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
 * Manager interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager
 */
interface ManagerInterface {

    /**
     * Determines if this manager contains providers.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasProviders();

    /**
     * Register a provider.
     *
     * @param ProviderInterface $provider The provider
     * @return ManagerInterface Returns this manager.
     */
    public function registerProvider(ProviderInterface $provider);

    /**
     * Size.
     *
     * @return int Returns the providers count
     */
    public function size();
}
