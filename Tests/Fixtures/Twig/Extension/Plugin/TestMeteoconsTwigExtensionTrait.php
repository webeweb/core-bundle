<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\Plugin;

use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MeteoconsTwigExtensionTrait;

/**
 * Test Meteocons Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\Plugin
 */
class TestMeteoconsTwigExtensionTrait {

    use MeteoconsTwigExtensionTrait {
        setMeteoconsTwigExtension as public;
    }
}
