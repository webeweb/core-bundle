<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Assets;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\Assets\TestJQueryInputMaskTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\JQueryInputMaskTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\AssetsTwigExtension;

/**
 * jQuery InputMask Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Assets
 */
class JQueryInputMaskTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Test setJQueryInputMaskTwigExtension()
     *
     * @return void
     */
    public function testSetJQueryInputMaskTwigExtension(): void {

        // Set an Assets Twig extension mock.
        $assetsTwigExtension = new AssetsTwigExtension($this->twigEnvironment);

        // Set a jQuery InputMask Twig extension mock.
        $jQueryInputMaskTwigExtension = new JQueryInputMaskTwigExtension($this->twigEnvironment, $assetsTwigExtension);

        $obj = new TestJQueryInputMaskTwigExtensionTrait();

        $obj->setJQueryInputMaskTwigExtension($jQueryInputMaskTwigExtension);
        $this->assertSame($jQueryInputMaskTwigExtension, $obj->getJQueryInputMaskTwigExtension());
    }
}
