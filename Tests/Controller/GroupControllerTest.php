<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Controller;

use WBW\Bundle\CoreBundle\Controller\GroupController;
use WBW\Bundle\CoreBundle\Form\Factory\FormFactoryInterface;
use WBW\Bundle\CoreBundle\Manager\GroupManagerInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Group controller test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Controller
 */
class GroupControllerTest extends AbstractWebTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Form factory mock.
        $formFactory = $this->getMockBuilder(FormFactoryInterface::class)->getMock();

        // Set a Group manager mock.
        $groupManager = $this->getMockBuilder(GroupManagerInterface::class)->getMock();

        $this->assertEquals("wbw.core.controller.group", GroupController::SERVICE_NAME);

        $obj = new GroupController($formFactory, $groupManager);

        $this->assertSame($formFactory, $obj->getFormFactory());
        $this->assertSame($groupManager, $obj->getGroupManager());
    }
}
