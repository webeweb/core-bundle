<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Component\Security\Csrf;

use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Security\Csrf\TestCsrfTokenManagerTrait;

/**
 * CSRF token manager trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Component\Security\Csrf
 */
class CsrfTokenManagerTraitTest extends AbstractTestCase {

    /**
     * Tests setCsrfTokenManager()
     *
     * @return void
     */
    public function testSetCsrfTokenManager(): void {

        // Set a CSRF token manager mock.
        $csrfTokenManager = $this->getMockBuilder(CsrfTokenManagerInterface::class)->getMock();

        $obj = new TestCsrfTokenManagerTrait();

        $obj->setCsrfTokenManager($csrfTokenManager);
        $this->assertSame($csrfTokenManager, $obj->getCsrfTokenManager());
    }
}
