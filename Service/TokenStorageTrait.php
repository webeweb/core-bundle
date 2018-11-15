<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * TokenStorage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait TokenStorageTrait {

    /**
     * Token storage.
     *
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * Get the token storage.
     *
     * @return TokenStorageInterface Returns the token storage.
     */
    public function getTokenStorage() {
        return $this->tokenStorage;
    }

    /**
     * Set the token storage.
     *
     * @param TokenStorageInterface $tokenStorage The token storage.
     */
    protected function setTokenStorage(TokenStorageInterface $tokenStorage) {
        $this->tokenStorage = $tokenStorage;
        return $this;
    }

}
