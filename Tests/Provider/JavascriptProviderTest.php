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
     * Test getJavascripts()
     *
     * @return void
     */
    public function testGetJavascripts(): void {

        $obj = new JavascriptProvider();

        $exp = [
            "WBWCoreJQueryInputMask"            => "@WBWCore/assets/WBWCoreJQueryInputMask.js.twig",
            "WBWCoreLeaflet"                    => "@WBWCore/assets/WBWCoreLeaflet.js.twig",
            "WBWCoreMaterialDesignColorPalette" => "@WBWCore/assets/WBWCoreMaterialDesignColorPalette.js.twig",
            "WBWCoreSweetAlert"                 => "@WBWCore/assets/WBWCoreSweetAlert.js.twig",
            "WBWCoreWaitMe"                     => "@WBWCore/assets/WBWCoreWaitMe.js.twig",
        ];

        $this->assertEquals($exp, $obj->getJavascripts());
    }

    /**
     * Test __construct()
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
