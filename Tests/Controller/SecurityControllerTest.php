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

use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use WBW\Bundle\CoreBundle\Controller\SecurityController;
use WBW\Bundle\CoreBundle\Form\Factory\FormFactoryInterface;
use WBW\Bundle\CoreBundle\Manager\UserManagerInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Security controller test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Controller
 */
class SecurityControllerTest extends AbstractWebTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a CSRF token manager mock.
        $csrfTokenManager = $this->getMockBuilder(CsrfTokenManagerInterface::class)->getMock();

        $this->assertEquals("wbw.core.controller.security", SecurityController::SERVICE_NAME);

        $obj = new SecurityController($csrfTokenManager);

        $this->assertSame($csrfTokenManager, $obj->getCsrfTokenManager());
    }
}