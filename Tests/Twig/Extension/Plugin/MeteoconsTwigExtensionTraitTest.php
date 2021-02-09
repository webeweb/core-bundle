<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\Plugin\TestMeteoconsTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MeteoconsTwigExtension;

/**
 * Meteocons Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Plugin
 */
class MeteoconsTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the setMeteoconsTwigExtension() method.
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
