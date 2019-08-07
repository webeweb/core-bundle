<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Manager;

use Psr\Log\LoggerInterface;
use WBW\Bundle\CoreBundle\Manager\AbstractManager;

/**
 * Test manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Manager
 */
class TestManager extends AbstractManager {

    /**
     * {@inheritDoc}
     */
    public function __construct(LoggerInterface $logger) {
        parent::__construct($logger);
    }
}
