<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\EventListener;

use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\Manager\ThemeManager;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\EventListener\TestKernelEventListenerTrait;

/**
 * Kernel event listener trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\EventListener
 */
class EventDispatcherTraitTest extends AbstractTestCase {

    /**
     * Theme manager.
     *
     * @var ThemeManager
     */
    private $themeManager;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Theme manager mock.
        $this->themeManager = new ThemeManager($this->logger, $this->twigEnvironment);
    }

    /**
     * Tests the setEventDispatcher() method.
     *
     * @return void
     */
    public function testSetEventDispatcher(): void {

        // Set a Kernel event listener mock.
        $kernelEventListener = new KernelEventListener($this->tokenStorage, $this->themeManager);

        $obj = new TestKernelEventListenerTrait();

        $obj->setKernelEventListener($kernelEventListener);
        $this->assertSame($kernelEventListener, $obj->getKernelEventListener());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestKernelEventListenerTrait();

        $this->assertNull($obj->getKernelEventListener());
    }
}
