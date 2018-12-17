<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * Session trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait SessionTrait {

    /**
     * Session.
     *
     * @var SessionInterface
     */
    private $session;

    /**
     * Get the session.
     *
     * @return SessionInterface Returns the session.
     */
    public function getSession() {
        return $this->session;
    }

    /**
     * Set the session.
     *
     * @param SessionInterface $session The session.
     */
    protected function setSession(SessionInterface $session = null) {
        $this->session = $session;
        return $this;
    }

}
