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

use Symfony\Component\Routing\RouterInterface;
use WBW\Bundle\CoreBundle\Provider\JavascriptProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Views controller test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Controller
 */
class ViewsControllerTest extends AbstractWebTestCase {

    /**
     * Test Resources/views/assets/_javascripts.html.twig
     *
     * @return void
     */
    public function testAssetsJavascriptsAction(): void {

        $client = $this->client;

        $client->request("GET", "/assets/javascripts");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        /** @var RouterInterface $router */
        $router = static::$kernel->getContainer()->get("router");

        $provider = new JavascriptProvider();
        foreach ($provider->getJavascripts() as $k => $v) {

            $uri = $router->generate("wbw_core_twig_resource", ["name" => $k, "type" => "js"]);

            $client->request("GET", $uri);
            $this->assertEquals(200, $client->getResponse()->getStatusCode(), $v);
            $this->assertEquals("application/javascript", $client->getResponse()->headers->get("Content-Type"), $v);
        }
    }

    /**
     * Test Resources/views/assets/_stylesheets.html.twig
     *
     * @return void
     */
    public function testAssetsStylesheetsAction(): void {

        $client = $this->client;

        $client->request("GET", "/assets/stylesheets");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Test Resources/views/email/layout.html.twig
     *
     * @return void
     */
    public function testEmailLayoutAction(): void {

        $client = $this->client;

        $client->request("GET", "/email/layout");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Test kernelExceptionAction()
     *
     * @return void
     */
    public function testKernelExceptionAction(): void {

        $client = $this->client;

        $client->request("GET", "/kernel-exception");
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }
}
