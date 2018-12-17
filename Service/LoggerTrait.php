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

use Psr\Log\LoggerInterface;

/**
 * Logger trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait LoggerTrait {

    /**
     * Logger.
     *
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Get the logger.
     *
     * @return LoggerInterface Returns the logger.
     */
    public function getLogger() {
        return $this->logger;
    }

    /**
     * Set the logger.
     *
     * @param LoggerInterface $logger The logger.
     */
    protected function setLogger(LoggerInterface $logger = null) {
        $this->logger = $logger;
        return $this;
    }

}
