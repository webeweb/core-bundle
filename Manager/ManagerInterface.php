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
     * Add a provider.
     *
     * @param ProviderInterface $provider The provider.
     * @return ManagerInterface Returns this manager.
     */
    public function addProvider(ProviderInterface $provider);

    /**
     * Determines if this manager contains providers.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasProviders();

    /**
     * Remove a provider.
     *
     * @param ProviderInterface $provider The provider
     * @return ManagerInterface Returns this manager.
     */
    public function removeProvider(ProviderInterface $provider);

    /**
     * Size.
     *
     * @return int Returns the providers count
     */
    public function size();
}
