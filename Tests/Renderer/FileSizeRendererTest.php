<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Renderer;

use WBW\Bundle\CoreBundle\Renderer\FileSizeRenderer;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * File size renderer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Renderer
 */
class FileSizeRendererTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals(1024, FileSizeRenderer::SIZE_DIVIDER_KIO);
        $this->assertEquals(1024 * 1024, FileSizeRenderer::SIZE_DIVIDER_MIO);
        $this->assertEquals(1024 * 1024 * 1024, FileSizeRenderer::SIZE_DIVIDER_GIO);
    }

    /**
     * Tests the renderSize() method.
     *
     * @return void
     */
    public function testFormatFileSize() {

        $this->assertEquals("", FileSizeRenderer::renderSize(null));
        $this->assertEquals("", FileSizeRenderer::renderSize(-1));
        $this->assertEquals("1.00 Kio", FileSizeRenderer::renderSize(1024));
        $this->assertEquals("1.00 Mio", FileSizeRenderer::renderSize(1048576));
        $this->assertEquals("1.00 Gio", FileSizeRenderer::renderSize(1073741842));
    }
}
