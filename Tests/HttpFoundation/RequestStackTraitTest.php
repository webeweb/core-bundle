<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\HttpFoundation;

use Symfony\Component\HttpFoundation\RequestStack;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\HttpFoundation\TestRequestStackTrait;

/**
 * Request stack trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\HttpFoundation
 */
class RequestStackTraitTest extends AbstractTestCase {

    /**
     * Test setRequestStack()
     *
     * @return void
     */
    public function testSetRequestStack(): void {

        // Set a Request stack mock.
        $requestStack = new RequestStack();

        $obj = new TestRequestStackTrait();

        $obj->setRequestStack($requestStack);
        $this->assertSame($requestStack, $obj->getRequestStack());
    }
}
