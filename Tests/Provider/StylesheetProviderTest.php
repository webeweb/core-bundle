<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Provider;

use WBW\Bundle\CoreBundle\Provider\StylesheetProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Provider\ProviderInterface;
use WBW\Library\Symfony\Provider\StylesheetProviderInterface;

/**
 * Stylesheet provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Provider
 */
class StylesheetProviderTest extends AbstractTestCase {

    /**
     * Test getStylesheets()
     *
     * @return void
     */
    public function testGetStylesheets(): void {

        $obj = new StylesheetProvider();

        $this->assertEquals([], $obj->getStylesheets());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.provider.stylesheet", StylesheetProvider::SERVICE_NAME);

        $obj = new StylesheetProvider();

        $this->assertInstanceOf(ProviderInterface::class, $obj);
        $this->assertInstanceOf(StylesheetProviderInterface::class, $obj);
    }
}
