<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use Throwable;
use WBW\Bundle\CoreBundle\Service\SymfonyBCService;
use WBW\Bundle\CoreBundle\Service\SymfonyBCServiceInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Symfony backward compatibility service test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class SymfonyBCServiceTest extends AbstractTestCase {

    /**
     * Tests getSession()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetSession(): void {

        $obj = new SymfonyBCService($this->containerBuilder);

        $this->assertSame($this->session, $obj->getSession());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.service.compatibility", SymfonyBCService::SERVICE_NAME);

        $obj = new SymfonyBCService($this->containerBuilder);

        $this->assertInstanceOf(SymfonyBCServiceInterface::class, $obj);

        $this->assertSame($this->containerBuilder, $obj->getContainer());
    }
}
