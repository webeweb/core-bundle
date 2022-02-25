<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Environment;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Environment\TestTwigEnvironmentTrait;

/**
 * Twig environment trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Environment
 */
class TwigEnvironmentTraitTest extends AbstractTestCase {

    /**
     * Tests setTwigEnvironment()
     *
     * @return void
     */
    public function testSetTwigEnvironment(): void {

        $obj = new TestTwigEnvironmentTrait();

        $obj->setTwigEnvironment($this->twigEnvironment);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
