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

use WBW\Bundle\CoreBundle\Service\CompatibilityServiceInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestCompatibilityServiceTrait;

/**
 * Compatibility service trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class CompatibilityServiceTraitTest extends AbstractTestCase {

    /**
     * Tests setCompatibilityService()
     *
     * @return void
     */
    public function testSetCompatibilityService(): void {

        // Set a Compatibility service mock.
        $compatibilityService = $this->getMockBuilder(CompatibilityServiceInterface::class)->getMock();

        $obj = new TestCompatibilityServiceTrait();

        $obj->setCompatibilityService($compatibilityService);
        $this->assertSame($compatibilityService, $obj->getCompatibilityService());
    }
}
