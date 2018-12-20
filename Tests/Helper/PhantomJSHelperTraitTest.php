<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Helper;

use WBW\Bundle\CoreBundle\Helper\PhantomJSHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Helper\TestPhantomJSHelperTrait;

/**
 * PhantomJS helper trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Helper
 */
class PhantomJSHelperTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestPhantomJSHelperTrait();

        $this->assertNull($obj->getPhantomJSHelper());
    }

    /**
     * Tests the setPhantomJSHelper() method.
     *
     * @return void
     */
    public function testSetPhantomJSHelper() {

        // Set a PhantomJS helper mock.
        $phantomJSHelper = new PhantomJSHelper("path", "base");

        $obj = new TestPhantomJSHelperTrait();

        $obj->setPhantomJSHelper($phantomJSHelper);
        $this->assertSame($phantomJSHelper, $obj->getPhantomJSHelper());
    }

}
