<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\TestUtilityTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\UtilityTwigExtension;

/**
 * Utility Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class UtilityTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestUtilityTwigExtensionTrait();

        $this->assertNull($obj->getUtilityTwigExtension());
    }

    /**
     * Tests the setUser() method.
     *
     * @return void
     */
    public function testSetUser() {

        // Set a Utility Twig extension mock.
        $utilityTwigExtension = new UtilityTwigExtension($this->twigEnvironment);

        $obj = new TestUtilityTwigExtensionTrait();

        $obj->setUtilityTwigExtension($utilityTwigExtension);
        $this->assertSame($utilityTwigExtension, $obj->getUtilityTwigExtension());
    }
}
