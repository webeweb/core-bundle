<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Helper;

use Exception;
use InvalidArgumentException;
use WBW\Bundle\CoreBundle\Helper\Select2Helper;
use WBW\Bundle\CoreBundle\Navigation\NavigationNode;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Entity\TestSelect2Item;

/**
 * Select2 helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Helper\Model
 */
class Select2HelperTest extends AbstractTestCase {

    /**
     * Items.
     *
     * @var array
     */
    private $items;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set an Items array mock.
        $this->items = [];

        $this->items[] = new TestSelect2Item("1", "item1");
        $this->items[] = new TestSelect2Item("2", "item2");
        $this->items[] = new TestSelect2Item("3", "item3");
    }

    /**
     * Tests toResults()
     *
     * @retrurn void
     */
    public function testToResults(): void {

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
     * Tests toResults()
     *
     * @retrurn void
     */
    public function testToResultsWithInvalidArgumentException(): void {

        try {

            $this->items[] = new NavigationNode("id4");
            Select2Helper::toResults($this->items);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The item must implements Select2ItemInterface", $ex->getMessage());
        }
    }
}
