<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\HttpFoundation;

use Symfony\Component\HttpFoundation\Response;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\HttpFoundation\TestResponseTrait;

/**
 * Response trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\HttpFoundation
 */
class ResponseTraitTest extends AbstractTestCase {

    /**
     * Test setResponse()
     *
     * @return void
     */
    public function testSetResponse(): void {

        // Set a Response mock.
        $response = new Response();

        $obj = new TestResponseTrait();

        $obj->setResponse($response);
        $this->assertSame($response, $obj->getResponse());
    }
}
