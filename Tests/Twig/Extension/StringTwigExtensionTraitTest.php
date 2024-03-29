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
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\TestStringTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\StringTwigExtension;

/**
 * String Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class StringTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Test setStringTwigExtension()
     *
     * @return void
     */
    public function testSetStringTwigExtension(): void {

        // Set a String Twig extension mock.
        $stringTwigExtension = new StringTwigExtension($this->twigEnvironment);

        $obj = new TestStringTwigExtensionTrait();

        $obj->setStringTwigExtension($stringTwigExtension);
        $this->assertSame($stringTwigExtension, $obj->getStringTwigExtension());
    }
}
