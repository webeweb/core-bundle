<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Renderer;

use WBW\Bundle\CoreBundle\Assets\TranslatedChoiceLabelInterface;
use WBW\Bundle\CoreBundle\Renderer\FormRenderer;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Library\Sorter\Model\AlphabeticalTreeNodeInterface;
use WBW\Library\Symfony\Assets\ChoiceLabelInterface;

/**
 * Form renderer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Renderer
 */
class FormRendererTest extends AbstractTestCase {

    /**
     * Test renderOption()
     *
     * @return void
     */
    public function testRenderOption(): void {

        $this->assertEquals("This option must implements [Translated]ChoiceLabelInterface", FormRenderer::renderOption($this));
    }

    /**
     * Test renderOption()
     *
     * @return void
     */
    public function testRenderWithAlphabeticalTreeNodeInterface(): void {

        // Set an Alphabetical tree node mock.
        $arg = $this->getMockBuilder(AlphabeticalTreeNodeInterface::class)->getMock();
        $arg->expects($this->any())->method("getAlphabeticalTreeNodeParent")->willReturn(null);

        $this->assertEquals("─ This option must implements [Translated]ChoiceLabelInterface", FormRenderer::renderOption($arg));
    }

    /**
     * Test renderOption()
     *
     * @return void
     */
    public function testRenderWithChoiceInterface(): void {

        // Set a Choice label mock.
        $arg = $this->getMockBuilder(ChoiceLabelInterface::class)->getMock();
        $arg->expects($this->any())->method("getChoiceLabel")->willReturn("choiceLabel");

        $this->assertEquals("choiceLabel", FormRenderer::renderOption($arg));
    }

    /**
     * Test renderOption()
     *
     * @return void
     */
    public function testRenderWithNull(): void {

        $this->assertEquals("Empty selection", FormRenderer::renderOption(null));
    }

    /**
     * Test renderOption()
     *
     * @return void
     */
    public function testRenderWithTranslatedChoiceInterface(): void {

        // Set a Translated choice label mock.
        $arg = $this->getMockBuilder(TranslatedChoiceLabelInterface::class)->getMock();
        $arg->expects($this->any())->method("getTranslatedChoiceLabel")->willReturn("translatedChoiceLabel");

        $this->assertEquals("translatedChoiceLabel", FormRenderer::renderOption($arg));
    }
}
