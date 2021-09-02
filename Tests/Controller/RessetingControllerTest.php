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

use WBW\Bundle\CoreBundle\Controller\ResettingController;
use WBW\Bundle\CoreBundle\Form\Factory\FormFactoryInterface;
use WBW\Bundle\CoreBundle\Manager\UserManagerInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;
use WBW\Bundle\CoreBundle\Utility\TokenGeneratorInterface;

/**
 * Resetting controller test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Controller
 */
class ResettingControllerTest extends AbstractWebTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Form factory mock.
        $formFactory = $this->getMockBuilder(FormFactoryInterface::class)->getMock();

        // Set a Token generator mock.
        $tokenGenerator = $this->getMockBuilder(TokenGeneratorInterface::class)->getMock();

        // Set an User manager mock.
        $userManager = $this->getMockBuilder(UserManagerInterface::class)->getMock();

        $this->assertEquals("wbw.core.controller.resetting", ResettingController::SERVICE_NAME);

        $obj = new ResettingController($formFactory, $userManager, $tokenGenerator);

        $this->assertSame($formFactory, $obj->getFormFactory());
        $this->assertSame($tokenGenerator, $obj->getTokenGenerator());
        $this->assertSame($userManager, $obj->getUserManager());
    }
}