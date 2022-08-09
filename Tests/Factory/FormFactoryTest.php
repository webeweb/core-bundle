<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Factory;

use WBW\Bundle\CoreBundle\Factory\FormFactory;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Assets\TestChoiceValue;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Factory\TestFormFactory;
use WBW\Library\Symfony\Assets\ChoiceValueInterface;
use WBW\Library\Symfony\Assets\Navigation\NavigationNode;

/**
 * Form factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Factory
 */
class FormFactoryTest extends AbstractTestCase {

    /**
     * Choice values.
     *
     * @var ChoiceValueInterface[]
     */
    private $choiceValues;

    /**
     * Choices.
     *
     * @var array
     */
    private $choices;

    /**
     * Entities.
     *
     * @var NavigationNode[]
     */
    private $entities;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a choice values mock.
        $this->choiceValues = [
            $this->getMockBuilder(ChoiceValueInterface::class)->getMock(),
            $this->getMockBuilder(ChoiceValueInterface::class)->getMock(),
        ];

        $this->choiceValues[0]->expects($this->any())->method("getChoiceValue")->willReturn(null);
        $this->choiceValues[1]->expects($this->any())->method("getChoiceValue")->willReturn("value");

        // Set a choices mock.
        $this->choices = [
            0 => "0",
            1 => "1",
            2 => "2",
        ];

        // Set an entities mock.
        $this->entities = [
            new NavigationNode("id1"),
            new NavigationNode("id2"),
            new NavigationNode("id3"),
        ];
    }

    /**
     * Tests getChoiceLabelCallback()
     *
     * @return void
     */
    public function testGetChoiceLabelCallback(): void {

        $res = TestFormFactory::getChoiceLabelCallback([]);
        $this->assertIsCallable($res);

        $this->assertEquals("This option must implements [Translated]ChoiceLabelInterface", $res($this->choiceValues[0]));
        $this->assertEquals("This option must implements [Translated]ChoiceLabelInterface", $res($this->choiceValues[1]));

        $this->assertEquals("This option must implements [Translated]ChoiceLabelInterface", $res($this->choices[0]));
        $this->assertEquals("This option must implements [Translated]ChoiceLabelInterface", $res($this->choices[1]));

        $this->assertEquals("Empty selection", $res(null));
        $this->assertEquals("─ This option must implements [Translated]ChoiceLabelInterface", $res($this->entities[0]));
        $this->assertEquals("─ This option must implements [Translated]ChoiceLabelInterface", $res($this->entities[1]));
        $this->assertEquals("─ This option must implements [Translated]ChoiceLabelInterface", $res($this->entities[2]));
    }

    /**
     * Tests getChoiceValueCallback()
     *
     * @return void
     */
    public function testGetChoiceValueCallback(): void {

        $res = TestFormFactory::getChoiceValueCallback();
        $this->assertIsCallable($res);

        $this->assertEquals("", $res($this->choiceValues[0]));
        $this->assertEquals("value", $res($this->choiceValues[1]));
    }

    /**
     * Tests newChoiceType()
     *
     * @return void
     */
    public function testNewChoiceType(): void {

        $res = FormFactory::newChoiceType($this->choices);
        $this->assertCount(1, $res);
        $this->assertArrayHasKey("choices", $res);

        $this->assertCount(3, $res["choices"]);
        $this->assertArrayHasKey(0, $res["choices"]);
        $this->assertArrayHasKey(1, $res["choices"]);
        $this->assertArrayHasKey(2, $res["choices"]);

        $this->assertEquals("0", $res["choices"][0]);
        $this->assertEquals("1", $res["choices"][1]);
        $this->assertEquals("2", $res["choices"][2]);
    }

    /**
     * Tests newChoiceType()
     *
     * @return void
     */
    public function testNewChoiceTypeWithGroup(): void {

        $res = FormFactory::newChoiceType(["optgroup" => $this->choices], true);
        $this->assertCount(1, $res);
        $this->assertArrayHasKey("choices", $res);

        $this->assertCount(3, $res["choices"]["optgroup"]);
        $this->assertArrayHasKey(0, $res["choices"]["optgroup"]);
        $this->assertArrayHasKey(1, $res["choices"]["optgroup"]);
        $this->assertArrayHasKey(2, $res["choices"]["optgroup"]);

        $this->assertEquals("0", $res["choices"]["optgroup"][0]);
        $this->assertEquals("1", $res["choices"]["optgroup"][1]);
        $this->assertEquals("2", $res["choices"]["optgroup"][2]);
    }

    /**
     * Tests the newEntityType method.
     *
     * @return void
     */
    public function testNewEntityType(): void {

        $res = FormFactory::newEntityType(NavigationNode::class, $this->entities);
        $this->assertCount(3, $res);
        $this->assertArrayHasKey("class", $res);
        $this->assertArrayHasKey("choice_label", $res);
        $this->assertArrayHasKey("choices", $res);

        $this->assertEquals(NavigationNode::class, $res["class"]);

        $this->assertCount(3, $res["choices"]);
        $this->assertSame($this->entities[0], $res["choices"][0]);
        $this->assertSame($this->entities[1], $res["choices"][1]);
        $this->assertSame($this->entities[2], $res["choices"][2]);

        $this->assertIsCallable($res["choice_label"]);
        $this->assertEquals("─ This option must implements [Translated]ChoiceLabelInterface", $res["choice_label"]($res["choices"][0]));
        $this->assertEquals("─ This option must implements [Translated]ChoiceLabelInterface", $res["choice_label"]($res["choices"][1]));
        $this->assertEquals("─ This option must implements [Translated]ChoiceLabelInterface", $res["choice_label"]($res["choices"][2]));
    }

    /**
     * Tests the newEntityType method.
     *
     * @return void
     */
    public function testNewEntityTypeWithChoiceValueInterface(): void {

        $arg = [
            new TestChoiceValue(),
            new TestChoiceValue(),
        ];

        $res = FormFactory::newEntityType(TestChoiceValue::class, $arg);
        $this->assertCount(4, $res);
        $this->assertArrayHasKey("class", $res);
        $this->assertArrayHasKey("choice_label", $res);
        $this->assertArrayHasKey("choice_value", $res);
        $this->assertArrayHasKey("choices", $res);

        $this->assertEquals(TestChoiceValue::class, $res["class"]);

        $this->assertCount(2, $res["choices"]);
        $this->assertSame($arg[0], $res["choices"][0]);
        $this->assertSame($arg[1], $res["choices"][1]);

        $this->assertIsCallable($res["choice_label"]);

        $this->assertIsCallable($res["choice_value"]);
    }

    /**
     * Tests the newEntityType method.
     *
     * @return void
     */
    public function testNewEntityTypeWithEmpty(): void {

        $res = FormFactory::newEntityType(NavigationNode::class, $this->entities, ["empty" => true]);
        $this->assertCount(3, $res);
        $this->assertArrayHasKey("class", $res);
        $this->assertArrayHasKey("choice_label", $res);
        $this->assertArrayHasKey("choices", $res);

        $this->assertEquals(NavigationNode::class, $res["class"]);

        $this->assertCount(4, $res["choices"]);
        $this->assertNull($res["choices"][0]);
        $this->assertSame($this->entities[0], $res["choices"][1]);
        $this->assertSame($this->entities[1], $res["choices"][2]);
        $this->assertSame($this->entities[2], $res["choices"][3]);

        $this->assertIsCallable($res["choice_label"]);
    }

    /**
     * Tests the newEntityType method.
     *
     * @return void
     */
    public function testNewEntityTypeWithReflectionException(): void {

        $res = FormFactory::newEntityType("GitHub", $this->entities);
        $this->assertCount(3, $res);
    }
}
