<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use WBW\Bundle\CoreBundle\DependencyInjection\Configuration;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Configuration test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\DependencyInjection
 */
class ConfigurationTest extends AbstractTestCase {

    /**
     * Tests the getConfigTreeBuilder() method.
     *
     * @return void
     */
    public function testGetConfigTreeBuilder() {

        $obj = new Configuration();

        $res = $obj->getConfigTreeBuilder();
        $this->assertInstanceOf(TreeBuilder::class, $res);

        $this->assertArrayHasKey("commands", $res->getRootNode()->getChildNodeDefinitions());
        $this->assertArrayHasKey("event_listeners", $res->getRootNode()->getChildNodeDefinitions());
        $this->assertArrayHasKey("twig", $res->getRootNode()->getChildNodeDefinitions());
    }
}
