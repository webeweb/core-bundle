<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Provider;

use WBW\Bundle\CoreBundle\Provider\SkeletonProviderInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Skeleton provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider
 */
class SkeletonProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("/Resources/skeleton", SkeletonProviderInterface::SKELETON_RELATIVE_DIRECTORY);
    }
}
