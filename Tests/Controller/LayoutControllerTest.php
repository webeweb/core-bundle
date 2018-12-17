<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Controller;

use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Layout controller test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Controller
 */
class LayoutControllerTest extends AbstractWebTestCase {

    /**
     * Tests the emailAction() method.
     *
     * @return void
     */
    public function testEmailAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/email");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * Tests the javascriptsAction() method.
     *
     * @return void
     */
    public function testJavascriptsAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/javascripts");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * Tests the stylesheetsAction() method.
     *
     * @return void
     */
    public function testStylesheetsAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/stylesheets");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}
