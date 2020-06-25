<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Exception;

use Exception;
use WBW\Bundle\CoreBundle\Exception\AlreadyRegisteredProviderException;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Theme\DefaultApplicationThemeProvider;

/**
 * Already registered provider exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package  WBW\Bundle\CoreBundle\Tests\Exception
 */
class AlreadyRegisteredProviderExceptionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function test__construct() {

        // Set a Provider mock.
        $provider = new DefaultApplicationThemeProvider();

        $obj = new AlreadyRegisteredProviderException($provider);

        $this->assertEquals('The provider "WBW\\Bundle\\CoreBundle\\Theme\\DefaultApplicationThemeProvider" is already registered', $obj->getMessage());
    }
}
