<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Event;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use WBW\Bundle\CoreBundle\Event\FormEvent;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Form event test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Event
 */
class FormEventTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        // Set a Form mock.
        $form = $this->getMockBuilder(FormInterface::class)->getMock();

        // Set a Request mock.
        $request = new Request();

        $obj = new FormEvent($form, $request);

        $this->assertEquals("WBW\\Bundle\\CoreBundle\\Event\\FormEvent", $obj->getEventName());
        $this->assertSame($form, $obj->getForm());
        $this->assertSame($request, $obj->getRequest());
    }
}
