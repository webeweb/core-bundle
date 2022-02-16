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

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use WBW\Bundle\CoreBundle\Controller\RegistrationController;
use WBW\Bundle\CoreBundle\Form\Factory\FormFactoryInterface;
use WBW\Bundle\CoreBundle\Manager\UserManagerInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Registration controller test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Controller
 */
class RegistrationControllerTest extends AbstractWebTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Form factory mock.
        $formFactory = $this->getMockBuilder(FormFactoryInterface::class)->getMock();

        // Set a Token storage mock.
        $tokenStorage = $this->getMockBuilder(TokenStorageInterface::class)->getMock();

        // Set an User manager mock.
        $userManager = $this->getMockBuilder(UserManagerInterface::class)->getMock();

        $this->assertEquals("wbw.core.controller.registration", RegistrationController::SERVICE_NAME);

        $obj = new RegistrationController($formFactory, $userManager, $tokenStorage);

        $this->assertSame($formFactory, $obj->getFormFactory());
        $this->assertSame($tokenStorage, $obj->getTokenStorage());
        $this->assertSame($userManager, $obj->getUserManager());
    }
}
