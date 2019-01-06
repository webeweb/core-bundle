<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Icon;

use WBW\Bundle\CoreBundle\Icon\FontAwesomeIconInterface;
use WBW\Bundle\CoreBundle\Icon\IconFactory;
use WBW\Bundle\CoreBundle\Icon\MaterialDesignIconicFontIconInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Icon factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Icon
 */
class IconFactoryTest extends AbstractTestCase {

    /**
     * Tests the newFontAwesomeIcon() method.
     *
     * @return void
     */
    public function testNewFontAwesomeIcon() {

        $obj = IconFactory::newFontAwesomeIcon();

        $this->assertNotNull($obj);
        $this->assertInstanceOf(FontAwesomeIconInterface::class, $obj);
    }

    /**
     * Tests the newMaterialDesignIconicFontIcon() method.
     *
     * @return void
     */
    public function testNewMaterialDesignIconicFontIcon() {

        $obj = IconFactory::newMaterialDesignIconicFontIcon();

        $this->assertNotNull($obj);
        $this->assertInstanceOf(MaterialDesignIconicFontIconInterface::class, $obj);
    }
}
