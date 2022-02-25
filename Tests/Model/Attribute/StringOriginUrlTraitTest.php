<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model\Attribute;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute\TestStringOriginUrlTrait;

/**
 * String origin URL trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Attribute
 */
class StringOriginUrlTraitTest extends AbstractTestCase {

    /**
     * Tests setOriginUrl()
     *
     * @return void
     */
    public function testSetOriginUrl(): void {

        $obj = new TestStringOriginUrlTrait();

        $obj->setOriginUrl("originUrl");
        $this->assertEquals("originUrl", $obj->getOriginUrl());
    }
}
