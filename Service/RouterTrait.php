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

use Symfony\Component\Routing\RouterInterface;

/**
 * Router trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait RouterTrait {

    /**
     * Router.
     *
     * @var RouterInterface
     */
    private $router;

    /**
     * Get the router.
     *
     * @return RouterInterface Returns the router.
     */
    public function getRouter() {
        return $this->router;
    }

    /**
     * Set the router.
     *
     * @param RouterInterface|null $router The router.
     */
    protected function setRouter(RouterInterface $router = null) {
        $this->router = $router;
        return $this;
    }
}
