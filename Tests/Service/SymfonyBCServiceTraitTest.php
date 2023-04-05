<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use WBW\Bundle\CoreBundle\Service\SymfonyBCServiceInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestSymfonyBCServiceTrait;

/**
 * Symfony backward compatibility service trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class SymfonyBCServiceTraitTest extends AbstractTestCase {

    /**
     * Tests setSymfonyBCService()
     *
     * @return void
     */
    public function testSetSymfonyBCService(): void {

        // Set a SymfonyBC service mock.
        $symfonyBCService = $this->getMockBuilder(SymfonyBCServiceInterface::class)->getMock();

        $obj = new TestSymfonyBCServiceTrait();

        $obj->setSymfonyBCService($symfonyBCService);
        $this->assertSame($symfonyBCService, $obj->getSymfonyBCService());
    }
}
