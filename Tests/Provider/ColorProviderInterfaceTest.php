<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Provider;

use WBW\Bundle\CoreBundle\Provider\Asset\ColorProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider
 */
class ColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.provider.color", ColorProviderInterface::COLOR_TAG_NAME);
    }
}
