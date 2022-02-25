<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Component\DependencyInjection\Container;

use Symfony\Component\DependencyInjection\Container;

/**
 * Container trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Component\DependencyInjection\Container
 */
trait ContainerTrait {

    /**
     * Container.
     *
     * @var Container|null
     */
    private $container;

    /**
     * Get the container.
     *
     * @return Container|null Returns the container.
     */
    public function getContainer(): ?Container {
        return $this->container;
    }

    /**
     * Set the container.
     *
     * @param Container|null $container The container.
     * @return self Returns this instance.
     */
    protected function setContainer(?Container $container): self {
        $this->container = $container;
        return $this;
    }
}
