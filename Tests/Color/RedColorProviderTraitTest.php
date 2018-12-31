<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Color;

use WBW\Bundle\CoreBundle\Color\RedColorProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Color\TestRedColorProviderTrait;

/**
 * Red color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class RedColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestRedColorProviderTrait();

        $this->assertNull($obj->getRedColorProvider());
    }

    /**
     * Tests the setRedColorProvider() method.
     *
     * @return void
     */
    public function testSetRedColorProvider() {

        // Set an Red color provider mock.
        $redColorProvider = new RedColorProvider();

        $obj = new TestRedColorProviderTrait();

        $obj->setRedColorProvider($redColorProvider);
        $this->assertSame($redColorProvider, $obj->getRedColorProvider());
    }
}