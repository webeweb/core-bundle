<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Exception;

use WBW\Bundle\CoreBundle\Exception\RedirectResponseException;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;

/**
 * Redirect response exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Exception
 */
class RedirectResponseExceptionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $originUrl   = "https://github.com/webeweb";
        $redirectUrl = "https://github.com";

        $ex = new RedirectResponseException($redirectUrl, $originUrl);

        $this->assertEquals("You're not allowed to access to \"https://github.com/webeweb\"", $ex->getMessage());

        $this->assertEquals($originUrl, $ex->getOriginUrl());
        $this->assertEquals($redirectUrl, $ex->getRedirectUrl());
    }

}