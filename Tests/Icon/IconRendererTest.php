<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\TestsIcon;

use WBW\Bundle\CoreBundle\Icon\IconInterface;
use WBW\Bundle\CoreBundle\Icon\IconRenderer;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Icon renderer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\TestsIcon
 */
class IconRendererTest extends AbstractTestCase {

    /**
     * Icon.
     *
     * @var IconInterface
     */
    private $icon;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set an Icon mock.
        $this->icon = $this->getMockBuilder(IconInterface::class)->getMock();
        $this->icon->expects($this->any())->method("getStyle")->willReturn("color: #000000;");
    }

    /**
     * Tests renderStyle()
     *
     * @return void.
     */
    public function testRenderStyle(): void {

        $res = IconRenderer::renderStyle($this->icon);
        $this->assertEquals("color: #000000;", $res);
    }
}
