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
     * Binary path.
     *
     * @var string
     */
    private $binaryPath;

    /**
     * Output path.
     *
     * @var string
     */
    private $outputPath;

    /**
     * Scripts path.
     *
     * @var string
     */
    private $scriptsPath;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Binary path mock.
        $this->binaryPath = getcwd() . "/Tests/Fixtures/bin/phantomjs";

        // Set an Output path mock.
        $this->outputPath = getcwd() . "/Tests/Fixtures/app/var/phantomjs/output";

        // Set a Scripts path mock.
        $this->scriptsPath = getcwd() . "/Tests/Fixtures/app/var/phantomjs/scripts";
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new PhantomJSHelper($this->binaryPath, $this->scriptsPath, $this->outputPath);

        $this->assertEquals($this->binaryPath, $obj->getBinaryPath());
        $this->assertEquals($this->outputPath, $obj->getOutputPath());
        $this->assertEquals($this->scriptsPath, $obj->getScriptsPath());
    }

    /**
     * Tests the getCommand() method.
     *
     * @return void.
     */
    public function testGetCommand() {

        $obj = new PhantomJSHelper($this->binaryPath, $this->scriptsPath, $this->outputPath);

        $res = $this->binaryPath;
        if ("\\" === DIRECTORY_SEPARATOR) {
            $res .= ".exe";
        }
        $this->assertEquals($res, $obj->getCommand());
    }
}
