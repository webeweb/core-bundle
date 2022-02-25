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

use Exception;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Utility\TokenGenerator;

/**
 * Token generator test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Utility
 */
class TokenGeneratorTest extends AbstractTestCase {

    /**
     * Tests generateToken()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGenerateToken(): void {

        $obj = new TokenGenerator();

        for ($i = 0; $i < 32; ++$i) {
            $this->assertRegExp("/[A-Za-z0-9_\-]{32}/", $obj->generateToken());
        }
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.utility.token_generator.default", TokenGenerator::SERVICE_NAME);
    }
}
