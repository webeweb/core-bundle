<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Manager\Asset;

use WBW\Bundle\CoreBundle\Manager\Asset\ColorManager;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\Asset\TestColorManagerTrait;

/**
 * Color manager trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Manager\Asset
 */
class ColorManagerTraitTest extends AbstractTestCase {

    /**
     * Tests setColorManager()
     *
     * @return void
     */
    public function testSetColorManager(): void {

        // Set a Color manager mock.
        $colorManager = new ColorManager($this->logger);

        $obj = new TestColorManagerTrait();

        $obj->setColorManager($colorManager);
        $this->assertSame($colorManager, $obj->getColorManager());
    }
}
