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

use WBW\Bundle\CoreBundle\Provider\JavascriptProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Layout controller test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Controller
 */
class LayoutControllerTest extends AbstractWebTestCase {

    /**
     * Tests assets.
     *
     * @return void
     */
    public function testAssets(): void {

        $client = $this->client;

        $provider = new JavascriptProvider();

        foreach ($provider->getJavascripts() as $k => $v) {

            $client->request("GET", "/twig/resource/$k.js");
            $this->assertEquals(200, $client->getResponse()->getStatusCode(), $v);
            $this->assertEquals("application/javascript", $client->getResponse()->headers->get("Content-Type"), $v);
        }
    }

    /**
     * Tests emailAction()
     *
     * @return void
     */
    public function testEmailAction(): void {

        $client = $this->client;

        $client->request("GET", "/email");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Tests javascriptsAction()
     *
     * @return void
     */
    public function testJavascriptsAction(): void {

        $client = $this->client;

        $client->request("GET", "/javascripts");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Tests kernelExceptionAction()
     *
     * @return void
     */
    public function testKernelExceptionAction(): void {

        $client = $this->client;

        $client->request("GET", "/kernel-exception");
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Tests stylesheetsAction()
     *
     * @return void
     */
    public function testStylesheetsAction(): void {

        $client = $this->client;

        $client->request("GET", "/stylesheets");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }
}
