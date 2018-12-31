<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Color;

use WBW\Bundle\CoreBundle\Color\IndigoColorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Indigo color interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Color
 */
class IndigoColorInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#E8EAF6", IndigoColorInterface::COLOR_INDIGO_50);
        $this->assertEquals("#C5CAE9", IndigoColorInterface::COLOR_INDIGO_100);
        $this->assertEquals("#9FA8DA", IndigoColorInterface::COLOR_INDIGO_200);
        $this->assertEquals("#7986CB", IndigoColorInterface::COLOR_INDIGO_300);
        $this->assertEquals("#5C6BC0", IndigoColorInterface::COLOR_INDIGO_400);
        $this->assertEquals("#3F51B5", IndigoColorInterface::COLOR_INDIGO_500);
        $this->assertEquals("#3949AB", IndigoColorInterface::COLOR_INDIGO_600);
        $this->assertEquals("#303F9F", IndigoColorInterface::COLOR_INDIGO_700);
        $this->assertEquals("#283593", IndigoColorInterface::COLOR_INDIGO_800);
        $this->assertEquals("#1A237E", IndigoColorInterface::COLOR_INDIGO_900);
        $this->assertEquals("#8C9EFF", IndigoColorInterface::COLOR_INDIGO_A100);
        $this->assertEquals("#536DFE", IndigoColorInterface::COLOR_INDIGO_A200);
        $this->assertEquals("#3D5AFE", IndigoColorInterface::COLOR_INDIGO_A400);
        $this->assertEquals("#304FFE", IndigoColorInterface::COLOR_INDIGO_A700);
    }

}