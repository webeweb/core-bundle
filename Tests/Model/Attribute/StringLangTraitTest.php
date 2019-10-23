<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model\Attribute;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringLangTrait;

/**
 * String lang trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringLangTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringLangTrait();

        $this->assertNull($obj->getLang());
    }

    /**
     * Tests the setLang() method.
     *
     * @return void
     */
    public function testSetLang() {

        $obj = new TestStringLangTrait();

        $obj->setLang("lang");
        $this->assertEquals("lang", $obj->getLang());
    }
}
