<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Theme;

use WBW\Bundle\CoreBundle\Asset\Theme\DefaultApplicationThemeProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Default application theme provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Theme
 */
class DefaultApplicationThemeProviderTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Date/time mock.
        $now = new \DateTime();

        $obj = new DefaultApplicationThemeProvider();

        $this->assertEquals("Core bundle", $obj->getDescription());
        $this->assertEquals("/", $obj->getHome());
        $this->assertEquals("Core<b>bundle</b>", $obj->getName());
        $this->assertEquals("/", $obj->getRoute());
        $this->assertEquals("Core bundle", $obj->getTitle());
        $this->assertEquals("dev-master", $obj->getVersion());
        $this->assertNull($obj->getView());
        $this->assertEquals("2018-{$now->format("Y")}", $obj->getYear());

        $this->assertEquals("2019-{$now->format("Y")}", $obj->getYear("2019"));
        $this->assertEquals("2020-{$now->format("Y")}", $obj->getYear("2020"));
        $this->assertEquals("{$now->format("Y")}", $obj->getYear($now->format("Y")));
        $this->assertEquals("{$now->format("Y")}", $obj->getYear($now->format("Y") + 1));
    }
}
