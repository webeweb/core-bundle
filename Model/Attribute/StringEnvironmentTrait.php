<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model\Attribute;

/**
 * String environment trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait StringEnvironmentTrait {

    /**
     * Environment.
     *
     * @var string
     */
    protected $environment;

    /**
     * Get the environment.
     *
     * @return string Returns the environment.
     */
    public function getEnvironment() {
        return $this->environment;
    }

    /**
     * Set the environment.
     *
     * @param string $environment The environment.
     */
    public function setEnvironment($environment) {
        $this->environment = $environment;
        return $this;
    }
}
