<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Utility;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Utility\TestTokenGeneratorTrait;
use WBW\Bundle\CoreBundle\Utility\TokenGeneratorInterface;

/**
 * Token generator trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Utility
 */
class TokenGeneratorTraitTest extends AbstractTestCase {

    /**
     * Tests setTokenGenerator()
     *
     * @return void
     */
    public function testSetTokenGenerator(): void {

        // Set a Token generator mock.
        $tokenGenerator = $this->getMockBuilder(TokenGeneratorInterface::class)->getMock();

        $obj = new TestTokenGeneratorTrait();

        $obj->setTokenGenerator($tokenGenerator);
        $this->assertSame($tokenGenerator, $obj->getTokenGenerator());
    }
}
