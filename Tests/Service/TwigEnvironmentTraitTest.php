<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestTwigEnvironmentTrait;

/**
 * Twig environment trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class TwigEnvironmentTraitTest extends AbstractTestCase {

    /**
     * Tests the setTwigEnvironment() method.
     *
     * @return void
     */
    public function testSetTwigEnvironment(): void {

        $obj = new TestTwigEnvironmentTrait();

        $obj->setTwigEnvironment($this->twigEnvironment);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestTwigEnvironmentTrait();

        $this->assertNull($obj->getTwigEnvironment());
    }
}
