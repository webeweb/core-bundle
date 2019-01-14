<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Form\Renderer;

use DateTime;
use WBW\Bundle\CoreBundle\Renderer\DateTimeRenderer;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Date/time renderer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\Renderer
 */
class DateTimeRendererTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("Y-m-d H:i", DateTimeRenderer::DATETIME_FORMAT);
    }

    /**
     * Tests the renderDateTime() method.
     *
     * @return void
     */
    public function testRenderDateTime() {

        $this->assertEquals("2018-01-14 17:00", DateTimeRenderer::renderDateTime(new DateTime("2018-01-14 17:00")));
    }

    /**
     * Tests the renderDateTime() method.
     *
     * @return void
     */
    public function testRenderDateTimeWithFormat() {

        $this->assertEquals("14/01/2018 17:00", DateTimeRenderer::renderDateTime(new DateTime("2018-01-14 17:00"), "d/m/Y H:i"));
    }

    /**
     * Tests the renderDateTime() method.
     *
     * @return void
     */
    public function testRenderDateTimeWithoutArguments() {

        $this->assertEquals("", DateTimeRenderer::renderDateTime());
    }
}
