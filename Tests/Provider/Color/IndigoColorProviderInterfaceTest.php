<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Provider\Color;

use WBW\Bundle\CoreBundle\Provider\Color\IndigoColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Indigo color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Color
 */
class IndigoColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("#E8EAF6", IndigoColorProviderInterface::COLOR_INDIGO_50);
        $this->assertEquals("#C5CAE9", IndigoColorProviderInterface::COLOR_INDIGO_100);
        $this->assertEquals("#9FA8DA", IndigoColorProviderInterface::COLOR_INDIGO_200);
        $this->assertEquals("#7986CB", IndigoColorProviderInterface::COLOR_INDIGO_300);
        $this->assertEquals("#5C6BC0", IndigoColorProviderInterface::COLOR_INDIGO_400);
        $this->assertEquals("#3F51B5", IndigoColorProviderInterface::COLOR_INDIGO_500);
        $this->assertEquals("#3949AB", IndigoColorProviderInterface::COLOR_INDIGO_600);
        $this->assertEquals("#303F9F", IndigoColorProviderInterface::COLOR_INDIGO_700);
        $this->assertEquals("#283593", IndigoColorProviderInterface::COLOR_INDIGO_800);
        $this->assertEquals("#1A237E", IndigoColorProviderInterface::COLOR_INDIGO_900);
        $this->assertEquals("#8C9EFF", IndigoColorProviderInterface::COLOR_INDIGO_A100);
        $this->assertEquals("#536DFE", IndigoColorProviderInterface::COLOR_INDIGO_A200);
        $this->assertEquals("#3D5AFE", IndigoColorProviderInterface::COLOR_INDIGO_A400);
        $this->assertEquals("#304FFE", IndigoColorProviderInterface::COLOR_INDIGO_A700);
    }

}
