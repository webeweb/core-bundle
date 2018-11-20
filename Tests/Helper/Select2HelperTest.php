<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Helper;

use Exception;
use WBW\Bundle\CoreBundle\Helper\Select2Helper;
use WBW\Bundle\CoreBundle\Navigation\NavigationNode;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Entity\TestSelect2Item;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;

/**
 * Select2 helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Helper\Model
 */
class Select2HelperTest extends AbstractFrameworkTestCase {

    /**
     * Items.
     *
     * @var array
     */
    private $items;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a items array mock.
        $this->items = [];

        $this->items[] = new TestSelect2Item("1", "item1");
        $this->items[] = new TestSelect2Item("2", "item2");
        $this->items[] = new TestSelect2Item("3", "item3");
    }

    /**
     * Tests the toResults() method.
     *
     * @retrurn void
     */
    public function testToResults() {

        $res = [
            [
                "id"   => "1",
                "text" => "item1",
            ],
            [
                "id"   => "2",
                "text" => "item2",
            ],
            [
                "id"   => "3",
                "text" => "item3",
            ],
        ];
        $this->assertEquals($res, Select2Helper::toResults($this->items));
    }

    /**
     * Tests the toResults() method.
     *
     * @retrurn void
     */
    public function testToResultsWithIllegalArgumentException() {

        try {

            $this->items[] = new NavigationNode("id4");
            Select2Helper::toResults($this->items);
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The item must implements Select2ItemInterface", $ex->getMessage());
        }
    }

}