<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Command;

use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Translation\TranslatorInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Command\TestContainerAwareCommand;

/**
 * Abstract container aware command test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Command
 */
class AbstractContainerAwareCommandTest extends AbstractTestCase {

    /**
     * Tests the getEventDispatcher() method.
     *
     * @return void
     */
    public function testGetEventDispatcher() {

        $obj = new TestContainerAwareCommand();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getEventDispatcher();
        $this->assertInstanceOf(EventDispatcherInterface::class, $res);
        $this->assertSame($this->eventDispatcher, $res);
    }

    /**
     * Tests the getLogger() method.
     *
     * @return void
     */
    public function testGetLogger() {

        $obj = new TestContainerAwareCommand();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getLogger();
        $this->assertInstanceOf(LoggerInterface::class, $res);
        $this->assertSame($this->logger, $res);
    }

    /**
     * Tests the getRouter() method.
     *
     * @return void
     */
    public function testGetRouter() {

        $obj = new TestContainerAwareCommand();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getRouter();
        $this->assertInstanceOf(RouterInterface::class, $res);
        $this->assertSame($this->router, $res);
    }

    /**
     * Tests the getTranslator() method.
     *
     * @return void
     */
    public function testGetTranslator() {

        $obj = new TestContainerAwareCommand();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getTranslator();
        $this->assertInstanceOf(TranslatorInterface::class, $res);
        $this->assertSame($this->translator, $res);
    }
}
