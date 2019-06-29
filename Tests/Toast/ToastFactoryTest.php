<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Toast;

use WBW\Bundle\CoreBundle\Toast\ToastFactory;
use WBW\Bundle\CoreBundle\Toast\ToastInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Toast factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Toast
 */
class ToastFactoryTest extends AbstractTestCase {

    /**
     * Tests the newDangerToast() method.
     *
     * @return void
     */
    public function testNewDangerToast() {

        $obj = ToastFactory::newDangerToast("content");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(ToastInterface::TOAST_DANGER, $obj->getType());
    }

    /**
     * Tests the newDefaultToast() method.
     *
     * @return void
     */
    public function testNewDefaultToast() {

        $obj = ToastFactory::newDefaultToast("content", "type");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the newInfoToast() method.
     *
     * @return void
     */
    public function testNewInfoToast() {

        $obj = ToastFactory::newInfoToast("content");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(ToastInterface::TOAST_INFO, $obj->getType());
    }

    /**
     * Tests the newSuccessToast() method.
     *
     * @return void
     */
    public function testNewSuccessToast() {

        $obj = ToastFactory::newSuccessToast("content");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(ToastInterface::TOAST_SUCCESS, $obj->getType());
    }

    /**
     * Tests the newWarningToast() method.
     *
     * @return void
     */
    public function testNewWarningToast() {

        $obj = ToastFactory::newWarningToast("content");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(ToastInterface::TOAST_WARNING, $obj->getType());
    }
}