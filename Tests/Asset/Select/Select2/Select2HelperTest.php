<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Select\Select2;

use Exception;
use InvalidArgumentException;
use WBW\Bundle\CoreBundle\Asset\Navigation\NavigationNode;
use WBW\Bundle\CoreBundle\Asset\Select\Select2\Select2Helper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Select\Select2\TestSelect2Option;

/**
 * Select2 helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset\Select\Select2
 */
class Select2HelperTest extends AbstractTestCase {

    /**
     * Options.
     *
     * @var array
     */
    private $options;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set an Option array mock.
        $this->options = [];

        $this->options[] = new TestSelect2Option("1", "option1");
        $this->options[] = new TestSelect2Option("2", "option2");
        $this->options[] = new TestSelect2Option("3", "option3");
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
                "text" => "option1",
            ],
            [
                "id"   => "2",
                "text" => "option2",
            ],
            [
                "id"   => "3",
                "text" => "option3",
            ],
        ];
        $this->assertEquals($res, Select2Helper::toResults($this->options));
    }

    /**
     * Tests toResults()
     *
     * @retrurn void
     */
    public function testToResultsWithInvalidArgumentException(): void {

        try {

            $this->options[] = new NavigationNode("id4");
            Select2Helper::toResults($this->options);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The option must implements Select2OptionInterface", $ex->getMessage());
        }
    }
}
