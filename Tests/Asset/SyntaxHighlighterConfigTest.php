<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset;

use WBW\Bundle\CoreBundle\Asset\SyntaxHighlighterConfig;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * SyntaxHighlighter config test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset
 */
class SyntaxHighlighterConfigTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SyntaxHighlighterConfig();

        $this->assertFalse($obj->getBloggerMode());
        $this->assertNull($obj->getStrings());
        $this->assertFalse($obj->getStripBrs());
        $this->assertEquals("pre", $obj->getTagName());
    }
}
