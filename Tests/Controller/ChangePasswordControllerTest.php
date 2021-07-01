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

use WBW\Bundle\CoreBundle\Controller\ChangePasswordController;
use WBW\Bundle\CoreBundle\Form\Factory\FormFactoryInterface;
use WBW\Bundle\CoreBundle\Manager\UserManagerInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Change password controller test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Controller
 */
class ChangePasswordControllerTest extends AbstractWebTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Form factory mock.
        $formFactory = $this->getMockBuilder(FormFactoryInterface::class)->getMock();

        // Set an User manager mock.
        $userManager = $this->getMockBuilder(UserManagerInterface::class)->getMock();

        $this->assertEquals("wbw.core.controller.change_password", ChangePasswordController::SERVICE_NAME);

        $obj = new ChangePasswordController($formFactory, $userManager);

        $this->assertSame($formFactory, $obj->getFormFactory());
        $this->assertSame($userManager, $obj->getUserManager());
    }
}