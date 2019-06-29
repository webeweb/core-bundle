<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\EventListener;

/**
 * Security event listener trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\EventListener
 */
trait SecurityEventListenerTrait {

    /**
     * Security event listener.
     *
     * @var SecurityEventListener
     */
    private $securityEventListener;

    /**
     * Get the security event listener.
     *
     * @return SecurityEventListener Returns the security event listener.
     */
    public function getSecurityEventListener() {
        return $this->securityEventListener;
    }

    /**
     * Set the security event listener.
     *
     * @param SecurityEventListener|null $securityEventListener The security event listener.
     */
    protected function setSecurityEventListener(SecurityEventListener $securityEventListener = null) {
        $this->securityEventListener = $securityEventListener;
        return $this;
    }
}