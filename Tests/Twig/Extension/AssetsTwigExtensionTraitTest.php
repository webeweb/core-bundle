<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\TestAssetsTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\AssetsTwigExtension;

/**
 * Assets Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class AssetsTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests setAssetsTwigExtension()
     *
     * @return void
     */
    public function testSetAssetsTwigExtension(): void {

        // Set an Assets Twig extension mock.
        $assetsTwigExtension = new AssetsTwigExtension($this->twigEnvironment);

        $obj = new TestAssetsTwigExtensionTrait();

        $obj->setAssetsTwigExtension($assetsTwigExtension);
        $this->assertSame($assetsTwigExtension, $obj->getAssetsTwigExtension());
    }
}
