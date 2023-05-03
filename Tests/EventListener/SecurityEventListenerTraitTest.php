<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\EventListener;

use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\CoreBundle\EventListener\SecurityEventListener;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\EventListener\TestSecurityEventListenerTrait;

/**
 * Security event listener trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\EventListener
 */
class SecurityEventListenerTraitTest extends AbstractTestCase {

    /**
     * Test setSecurityEventListener()
     *
     * @return void
     */
    public function testSetSecurityEventListener(): void {

        // Set a User mock.
        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();

        // Set a Security event listener mock.
        $securityEventListener = new SecurityEventListener($this->translator, $this->user);

        $obj = new TestSecurityEventListenerTrait();

        $obj->setSecurityEventListener($securityEventListener);
        $this->assertSame($securityEventListener, $obj->getSecurityEventListener());
    }
}
