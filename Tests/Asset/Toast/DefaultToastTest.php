<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Toast;

use WBW\Bundle\CoreBundle\Asset\Toast\DefaultToast;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Default toast test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Toast
 */
class DefaultToastTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultToast("type", "default");

        $this->assertEquals("type", $obj->getType());
        $this->assertEquals("default", $obj->getContent());
    }
}
