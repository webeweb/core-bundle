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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\Assets\TestMaterialDesignColorPaletteTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\MaterialDesignColorPaletteTwigExtension;

/**
 * Material Design color palette Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Assets
 */
class MaterialDesignColorPaletteTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Test setMaterialDesignColorPaletteTwigExtension()
     *
     * @return void
     */
    public function testSetMaterialDesignColorPaletteTwigExtension(): void {

        // Set a Material Design color palette Twig extension mock.
        $materialDesignColorPaletteTwigExtension = new MaterialDesignColorPaletteTwigExtension($this->twigEnvironment);

        $obj = new TestMaterialDesignColorPaletteTwigExtensionTrait();

        $obj->setMaterialDesignColorPaletteTwigExtension($materialDesignColorPaletteTwigExtension);
        $this->assertSame($materialDesignColorPaletteTwigExtension, $obj->getMaterialDesignColorPaletteTwigExtension());
    }
}
