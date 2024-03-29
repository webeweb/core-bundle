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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\Assets\TestMeteoconsTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\MeteoconsTwigExtension;

/**
 * Meteocons Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Assets
 */
class MeteoconsTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Test setMeteoconsTwigExtension()
     *
     * @return void
     */
    public function testSetMeteoconsTwigExtension(): void {

        // Set a Meteocons Twig extension mock.
        $meteoconsTwigExtension = new MeteoconsTwigExtension($this->twigEnvironment);

        $obj = new TestMeteoconsTwigExtensionTrait();

        $obj->setMeteoconsTwigExtension($meteoconsTwigExtension);
        $this->assertSame($meteoconsTwigExtension, $obj->getMeteoconsTwigExtension());
    }
}
