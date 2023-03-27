<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Throwable;

/**
 * Compatibility service interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Service
 */
interface CompatibilityServiceInterface {

    /**
     * Get the session.
     *
     * @return SessionInterface|null Returns the session.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function getSession(): ?SessionInterface;
}
