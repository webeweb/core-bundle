<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\EventListener;

use WBW\Bundle\CoreBundle\EventListener\ToastEventListener;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\EventListener\TestToastEventListenerTrait;

/**
 * Toast event listener trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\EventListener
 */
class ToastEventListenerTraitTest extends AbstractTestCase {

    /**
     * Tests the setToastEventListener() method.
     *
     * @return void
     */
    public function testSetToastEventListener(): void {

        // Set a Toast event listener mock.
        $toastEventListener = new ToastEventListener($this->session);

        $obj = new TestToastEventListenerTrait();

        $obj->setToastEventListener($toastEventListener);
        $this->assertSame($toastEventListener, $obj->getToastEventListener());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestToastEventListenerTrait();

        $this->assertNull($obj->getToastEventListener());
    }
}
