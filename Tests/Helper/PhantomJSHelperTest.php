<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Helper;

use WBW\Bundle\CoreBundle\Helper\PhantomJSHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

function realpath($path) {
    return $path;
}

/**
 * PhantomJS helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Helper
 */
class PhantomJSHelperTest extends AbstractTestCase {

    /**
     * Base.
     *
     * @var string
     */
    private $base;

    /**
     * Path.
     *
     * @var string
     */
    private $path;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Base mock.
        $this->base = "phantomjs";

        // Set a Path mock.
        $this->path = getcwd() . "/Tests/Fixtures/bin";
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new PhantomJSHelper($this->path, $this->base);

        $this->assertEquals($this->base, $obj->getBase());
        $this->assertEquals($this->path, $obj->getPath());
    }

    /**
     * Tests the getCommand() method.
     *
     * @return void.
     */
    public function testGetCommand() {

        $obj = new PhantomJSHelper($this->path, $this->base);

        $res = $this->path . "/" . $this->base;
        if ("\\" === DIRECTORY_SEPARATOR) {
            $res .= ".exe";
        }
        $this->assertEquals($res, $obj->getCommand());
    }

}
