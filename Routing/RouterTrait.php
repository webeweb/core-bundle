<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Routing;

use Symfony\Component\Routing\RouterInterface;

/**
 * Router trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Routing
 */
trait RouterTrait {

    /**
     * Router.
     *
     * @var RouterInterface|null
     */
    private $router;

    /**
     * Get the router.
     *
     * @return RouterInterface|null Returns the router.
     */
    public function getRouter(): ?RouterInterface {
        return $this->router;
    }

    /**
     * Set the router.
     *
     * @param RouterInterface|null $router The router.
     * @return self Returns this instance.
     */
    protected function setRouter(?RouterInterface $router): self {
        $this->router = $router;
        return $this;
    }
}
