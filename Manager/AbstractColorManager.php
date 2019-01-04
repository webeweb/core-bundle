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
use WBW\Bundle\CoreBundle\Provider\ColorProviderInterface;

/**
 * Abstract color manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager
 * @abstract
 */
abstract class AbstractColorManager extends AbstractManager {

    /**
     * Index
     *
     * @var ColorProviderInterface[]
     */
    private $index;

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
        $this->setIndex([]);
    }

    /**
     * Get the index.
     *
     * @return ColorProviderInterface[] Returns the index.
     */
    protected function getIndex() {
        return $this->index;
    }

    /**
     * Register a color provider.
     *
     * @param ColorProviderInterface $provider The color provider.
     * @throws AlreadyRegisteredProviderException Throws an already registered provider exception.
     * @throws ReflectionException Throws a reflection exception if an error occurs.
     */
    public function registerProvider(ColorProviderInterface $provider) {
        if (true === array_key_exists($provider->getName(), $this->index)) {
            throw new AlreadyRegisteredProviderException($provider);
        }
        $this->index[$provider->getName()] = $this->size();
        $this->addProvider($provider);
    }

    /**
     * Set the index.
     *
     * @param array $index The index.
     * @return ManagerInterface Returns this manager interface.
     */
    protected function setIndex(array $index) {
        $this->index = $index;
        return $this;
    }

}