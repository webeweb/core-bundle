<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Form\Factory;

use WBW\Bundle\CoreBundle\Form\Factory\FormFactory;
use WBW\Bundle\CoreBundle\Navigation\NavigationNode;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;

/**
 * Form factory test
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\Factory
 */
class FormFactoryTest extends AbstractFrameworkTestCase {

    /**
     * Tests the newChoiceType() method.
     *
     * @return void
     */
    public function testNewChoiceType() {

        $obj = [
            0 => "0",
            1 => "1",
            2 => "2",
        ];

        $res = ["choices" => ["0" => 0, "1" => 1, "2" => 2]];
        $this->assertEquals($res, FormFactory::newChoiceType($obj));
    }

    /**
     * Tests the newEntityType method.
     *
     * @return void
     */
    public function testNewEntityType() {

        $obj = [
            new NavigationNode("id1"),
            new NavigationNode("id2"),
            new NavigationNode("id3"),
        ];

        $res = FormFactory::newEntityType(NavigationNode::class, $obj);
        $this->assertEquals(NavigationNode::class, $res["class"]);
        $this->assertCount(3, $res["choices"]);
        $this->assertSame($obj[0], $res["choices"][0]);
        $this->assertSame($obj[1], $res["choices"][1]);
        $this->assertSame($obj[2], $res["choices"][2]);
        $this->assertTrue(is_callable($res["choice_label"]));
    }

    /**
     * Tests the newEntityType method.
     *
     * @return void
     */
    public function testNewEntityTypeWithEmpty() {

        $obj = [
            new NavigationNode("id1"),
            new NavigationNode("id2"),
            new NavigationNode("id3"),
        ];

        $res = FormFactory::newEntityType(NavigationNode::class, $obj, ["empty" => true]);
        $this->assertEquals(NavigationNode::class, $res["class"]);
        $this->assertCount(4, $res["choices"]);
        $this->assertNull($res["choices"][0]);
        $this->assertSame($obj[0], $res["choices"][1]);
        $this->assertSame($obj[1], $res["choices"][2]);
        $this->assertSame($obj[2], $res["choices"][3]);
        $this->assertTrue(is_callable($res["choice_label"]));
    }

}
