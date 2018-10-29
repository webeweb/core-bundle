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
     * Tests the createChoiceType() method.
     *
     * @return void
     */
    public function testCreateChoiceType() {

        $obj = [
            0 => "0",
            1 => "1",
            2 => "2",
        ];

        $res = ["choices" => ["0" => 0, "1" => 1, "2" => 2]];
        $this->assertEquals($res, FormFactory::createChoiceType($obj));
    }

    /**
     * Tests the createEntityType method.
     *
     * @return void
     */
    public function testCreateEntityType() {

        $obj = [
            new NavigationNode("id1"),
            new NavigationNode("id2"),
            new NavigationNode("id3"),
        ];

        $res = FormFactory::createEntityType(NavigationNode::class, $obj);
        $this->assertEquals(NavigationNode::class, $res["class"]);
        $this->assertCount(3, $res["choices"]);
        $this->assertSame($obj[0], $res["choices"][0]);
        $this->assertSame($obj[1], $res["choices"][1]);
        $this->assertSame($obj[2], $res["choices"][2]);
        $this->assertTrue(is_callable($res["choice_label"]));
        $this->assertEquals("─ FormRendererInterface not implemented by this object", $res["choice_label"]($res["choices"][0]));
        $this->assertEquals("─ FormRendererInterface not implemented by this object", $res["choice_label"]($res["choices"][1]));
        $this->assertEquals("─ FormRendererInterface not implemented by this object", $res["choice_label"]($res["choices"][2]));
    }

    /**
     * Tests the createEntityType method.
     *
     * @return void
     */
    public function testCreateEntityTypeWithEmpty() {

        $obj = [
            new NavigationNode("id1"),
            new NavigationNode("id2"),
            new NavigationNode("id3"),
        ];

        $res = FormFactory::createEntityType(NavigationNode::class, $obj, ["empty" => true]);
        $this->assertEquals(NavigationNode::class, $res["class"]);
        $this->assertCount(4, $res["choices"]);
        $this->assertNull($res["choices"][0]);
        $this->assertSame($obj[0], $res["choices"][1]);
        $this->assertSame($obj[1], $res["choices"][2]);
        $this->assertSame($obj[2], $res["choices"][3]);
        $this->assertTrue(is_callable($res["choice_label"]));
        $this->assertEquals("Empty selection", $res["choice_label"]($res["choices"][0]));
        $this->assertEquals("─ FormRendererInterface not implemented by this object", $res["choice_label"]($res["choices"][1]));
        $this->assertEquals("─ FormRendererInterface not implemented by this object", $res["choice_label"]($res["choices"][2]));
        $this->assertEquals("─ FormRendererInterface not implemented by this object", $res["choice_label"]($res["choices"][3]));
    }

}
