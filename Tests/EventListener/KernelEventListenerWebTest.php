<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\EventListener;

use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Kernel event listener web test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\EventListener
 */
class KernelEventListenerWebTest extends AbstractWebTestCase {

    /**
     * Tests the onKernelException() method.
     *
     * @return void
     */
    public function testOnKernelExceptionWithUnexpectedException(): void {

        // Set an Exception mock.
        $ex = new Exception("testOnKernelExceptionWithUnexpectedException", 500, new Exception());

        /** @var KernelEventListener $em */
        $obj = static::$kernel->getContainer()->get(KernelEventListener::SERVICE_NAME);

        $arg = new GetResponseForExceptionEvent(static::$kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, $ex);
        $this->assertSame($arg, $obj->onKernelException($arg));
        $this->assertNull($arg->getResponse());
    }
}