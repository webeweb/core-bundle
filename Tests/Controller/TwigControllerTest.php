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

use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase;

/**
 * Twig controller test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Controller
 */
class TwigControllerTest extends AbstractWebTestCase {

    /**
     * Tests the functionAction() method.
     *
     * @return void
     */
    public function testFunctionAction(): void {

        $arg = ["font" => "s", "name" => "camera-retro", "size" => "lg", "fixedWidth" => true, "bordered" => true, "pull" => "left", "animation" => "spin", "style" => "color: #FFFFFF;"];
        $exp = '<i class="fas fa-camera-retro fa-lg fa-fw fa-border fa-pull-left fa-spin" style="color: #FFFFFF;"></i>';

        $client = $this->client;

        $client->request("POST", "/twig/function/fontAwesomeIcon", ["args" => [$arg]]);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("application/json", $client->getResponse()->headers->get("Content-Type"));

        // Check the JSON response.
        $res = json_decode($client->getResponse()->getContent(), true);

        $this->assertEquals($exp, $res[0]);
    }

    /**
     * Tests the functionAction() method.
     *
     * @return void
     */
    public function testFunctionActionWithStatus500(): void {

        $client = $this->client;

        $client->request("POST", "/twig/function/exception");
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
        $this->assertEquals("application/json", $client->getResponse()->headers->get("Content-Type"));
    }
}
