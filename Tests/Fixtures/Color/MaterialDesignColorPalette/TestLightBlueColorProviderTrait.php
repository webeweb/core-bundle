<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette;

use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\LightBlueColorProviderTrait;

/**
 * Test light blue color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Color\MaterialDesignColorPalette
 */
class TestLightBlueColorProviderTrait {

    use LightBlueColorProviderTrait {
        setLightBlueColorProvider as public;
    }
}
