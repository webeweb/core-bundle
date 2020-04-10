<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Asset;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\Asset\TestMaterialDesignIconicFontTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\MaterialDesignIconicFontTwigExtension;

/**
 * Material Design Iconic font Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Asset
 */
class MaterialDesignIconicFontTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the setMaterialDesignIconicFontTwigExtension() method.
     *
     * @return void
     */
    public function testSetMaterialDesignIconicFontTwigExtension() {

        // Set a Material Design Iconic font Twig extension mock.
        $materialDesignIconicFontTwigExtension = new MaterialDesignIconicFontTwigExtension($this->twigEnvironment);

        $obj = new TestMaterialDesignIconicFontTwigExtensionTrait();

        $obj->setMaterialDesignIconicFontTwigExtension($materialDesignIconicFontTwigExtension);
        $this->assertSame($materialDesignIconicFontTwigExtension, $obj->getMaterialDesignIconicFontTwigExtension());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestMaterialDesignIconicFontTwigExtensionTrait();

        $this->assertNull($obj->getMaterialDesignIconicFontTwigExtension());
    }
}
