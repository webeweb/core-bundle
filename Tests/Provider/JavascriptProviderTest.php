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

use WBW\Bundle\CoreBundle\Provider\JavascriptProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Provider\JavascriptProviderInterface;
use WBW\Library\Symfony\Provider\ProviderInterface;

/**
 * Javascript provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Provider
 */
class JavascriptProviderTest extends AbstractTestCase {

    /**
     * Tests getJavascripts()
     *
     * @return void
     */
    public function testGetJaavscripts(): void {

        $obj = new JavascriptProvider();

        $res = [
            "wbwCoreLeaflet"                    => "@WBWCore/assets/wbwCoreLeaflet.js.twig",
            "wbwCoreMaterialDesignColorPalette" => "@WBWCore/assets/wbwCoreMaterialDesignColorPalette.js.twig",
            "wbwCoreSweetAlert"                 => "@WBWCore/assets/wbwCoreSweetAlert.js.twig",
            "wbwCoreWaitMe"                     => "@WBWCore/assets/wbwCoreWaitMe.js.twig",
        ];

        $this->assertEquals($res, $obj->getJavascripts());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.provider.javascript", JavascriptProvider::SERVICE_NAME);

        $obj = new JavascriptProvider();

        $this->assertInstanceOf(ProviderInterface::class, $obj);
        $this->assertInstanceOf(JavascriptProviderInterface::class, $obj);
    }
}
