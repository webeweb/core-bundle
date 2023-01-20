<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ServerBag;
use WBW\Bundle\CoreBundle\Controller\HostController;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Host controller test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Controller
 */
class HostControllerTest extends AbstractWebTestCase {

    /**
     * Tests cpuAction()
     *
     * @return void
     */
    public function testCpuAction(): void {

        $client = $this->client;

        $client->request("GET", "/host/cpu");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("application/json", $client->getResponse()->headers->get("Content-Type"));

        // Check the JSON response.
        $res = json_decode($client->getResponse()->getContent(), true);
        $this->assertCount(4, $res);

        $this->assertArrayHasKey("success", $res);
        $this->assertArrayHasKey("message", $res);
        $this->assertArrayHasKey("errors", $res);
        $this->assertArrayHasKey("data", $res);

        $this->assertTrue($res["success"]);
        $this->assertNull($res["message"]);
        $this->assertNull($res["errors"]);
        $this->assertCount(8, $res["data"]);

        $this->assertArrayHasKey("us", $res["data"]);
        $this->assertArrayHasKey("sy", $res["data"]);
        $this->assertArrayHasKey("ni", $res["data"]);
        $this->assertArrayHasKey("id", $res["data"]);
        $this->assertArrayHasKey("wa", $res["data"]);
        $this->assertArrayHasKey("hi", $res["data"]);
        $this->assertArrayHasKey("si", $res["data"]);
        $this->assertArrayHasKey("st", $res["data"]);
    }

    /**
     * Tests hardDisksAction()
     *
     * @return void
     */
    public function testHardDisksAction(): void {

        $client = $this->client;

        $client->request("GET", "/host/hard-disks");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("application/json", $client->getResponse()->headers->get("Content-Type"));

        // Check the JSON response.
        $res = json_decode($client->getResponse()->getContent(), true);
        $this->assertCount(4, $res);

        $this->assertArrayHasKey("success", $res);
        $this->assertArrayHasKey("message", $res);
        $this->assertArrayHasKey("errors", $res);
        $this->assertArrayHasKey("data", $res);

        $this->assertTrue($res["success"]);
        $this->assertNull($res["message"]);
        $this->assertNull($res["errors"]);
        $this->assertNotCount(0, $res["data"]);

        $this->assertArrayHasKey("available", $res["data"][0]);
        $this->assertArrayHasKey("fileSystem", $res["data"][0]);
        $this->assertArrayHasKey("mountedOn", $res["data"][0]);
        $this->assertArrayHasKey("name", $res["data"][0]);
        $this->assertArrayHasKey("type", $res["data"][0]);
        $this->assertArrayHasKey("used", $res["data"][0]);
        $this->assertArrayHasKey("usePercent", $res["data"][0]);
    }

    /**
     * Tests memoryAction()
     *
     * @return void
     */
    public function testMemoryAction(): void {

        $client = $this->client;

        $client->request("GET", "/host/memory");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("application/json", $client->getResponse()->headers->get("Content-Type"));

        // Check the JSON response.
        $res = json_decode($client->getResponse()->getContent(), true);
        $this->assertCount(4, $res);

        $this->assertArrayHasKey("success", $res);
        $this->assertArrayHasKey("message", $res);
        $this->assertArrayHasKey("errors", $res);
        $this->assertArrayHasKey("data", $res);

        $this->assertTrue($res["success"]);
        $this->assertNull($res["message"]);
        $this->assertNull($res["errors"]);
        $this->assertNotCount(0, $res["data"]);

        $this->assertArrayHasKey("MemAvailable", $res["data"]);
        $this->assertArrayHasKey("MemFree", $res["data"]);
        $this->assertArrayHasKey("MemTotal", $res["data"]);
        $this->assertArrayHasKey("SwapFree", $res["data"]);
        $this->assertArrayHasKey("SwapTotal", $res["data"]);
    }

    /**
     * Tests retrieveInformationDatabase()
     *
     * @return void
     */
    public function testRetrieveInformationDatabase(): void {

        $obj = new HostController();
        $obj->setContainer(static::$kernel->getContainer());

        $res = $obj->retrieveInformationDatabase();
        $this->assertCount(6, $res);

        $this->assertArrayHasKey("driver", $res);
        $this->assertArrayHasKey("dbname", $res);
        $this->assertArrayHasKey("host", $res);
        $this->assertArrayHasKey("port", $res);
        $this->assertArrayHasKey("user", $res);
        $this->assertArrayHasKey("serverVersion", $res);
    }

    /**
     * Tests retrieveInformationServer()
     *
     * @return void
     */
    public function testRetrieveInformationServer(): void {

        // Set a Request mock.
        $request         = $this->getMockBuilder(Request::class)->disableOriginalConstructor()->getMock();
        $request->server = $this->getMockBuilder(ServerBag::class)->disableOriginalConstructor()->getMock();

        $obj = new HostController();
        $obj->setContainer(static::$kernel->getContainer());

        $res = $obj->retrieveInformationServer($request);
        $this->assertCount(5, $res);

        $this->assertArrayHasKey("maxExecutionTime", $res);
        $this->assertArrayHasKey("memoryLimit", $res);
        $this->assertArrayHasKey("phpUname", $res);
        $this->assertArrayHasKey("phpVersion", $res);
        $this->assertArrayHasKey("serverSoftware", $res);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.controller.host", HostController::SERVICE_NAME);
    }
}
