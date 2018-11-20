<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Form\Type;

use WBW\Bundle\CoreBundle\Form\Type\DateTimeTypeInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;

/**
 * Date/time type interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\Type
 */
class DateTimeTypeInterfaceTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("dd/MM/yyyy", DateTimeTypeInterface::FORMAT_DATE);
        $this->assertEquals("HH:mm", DateTimeTypeInterface::FORMAT_TIME);
        $this->assertEquals("dd/MM/yyyy HH:mm", DateTimeTypeInterface::FORMAT_DATETIME);
    }

}