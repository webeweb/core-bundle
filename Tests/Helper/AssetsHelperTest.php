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
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Helper\TestAssetsHelper;

/**
 * Assets helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Helper
 */
class AssetsHelperTest extends AbstractTestCase {

    /**
     * Directory "assets".
     *
     * @var string
     */
    private $directoryAssets;

    /**
     * Directory "illegal".
     *
     * @var string
     */
    private $directoryIllegal;

    /**
     * Directory "public".
     *
     * @var string
     */
    private $directoryPublic;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set the directories.
        $this->directoryAssets  = getcwd() . "/Resources/assets";
        $this->directoryIllegal = getcwd() . "/composer.json";
        $this->directoryPublic  = getcwd() . "/Resources/public";
    }

    /**
     * Tests the listAssets() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testListAssets() {

        $res = TestAssetsHelper::listAssets($this->directoryAssets);
        $this->assertCount(12, $res);

        $this->assertRegExp("/animate\.css\-.*\.zip$/", $res[0]);
        $this->assertRegExp("/fontawesome\-.*\.zip$/", $res[1]);
        $this->assertRegExp("/jquery\-.*\.zip$/", $res[2]);
        $this->assertRegExp("/jquery\-easyautocomplete\-.*\.zip$/", $res[3]);
        $this->assertRegExp("/jquery\-inputmask\-.*\.zip$/", $res[4]);
        $this->assertRegExp("/jquery\-select2\-.*\.zip$/", $res[5]);
        $this->assertRegExp("/material\-design\-color\-palette\-.*\.zip$/", $res[6]);
        $this->assertRegExp("/material\-design\-hierarchical\-display\-.*\.zip$/", $res[7]);
        $this->assertRegExp("/material\-design\-iconic\-font\-.*\.zip$/", $res[8]);
        $this->assertRegExp("/meteocons\.zip$/", $res[9]);
        $this->assertRegExp("/sweetalert\-.*\.zip$/", $res[10]);
        $this->assertRegExp("/waitme\-.*\.zip$/", $res[11]);
    }

    /**
     * Tests the listAssets() method.
     *
     * @return void
     */
    public function testListAssetsWithInvalidArgumentException() {

        try {

            TestAssetsHelper::listAssets($this->directoryIllegal);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("\"" . $this->directoryIllegal . "\" is not a directory", $ex->getMessage());
        }
    }

    /**
     * Tests the unzipAssets() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testUnzipAssets() {

        $res = TestAssetsHelper::unzipAssets($this->directoryAssets, $this->directoryPublic);
        $this->assertCount(12, $res);

        foreach ($res as $k => $v) {
            $this->assertDirectoryExists(str_replace([$this->directoryAssets, ".zip"], [$this->directoryPublic, ""], $k));
            $this->assertTrue($v);
        }
    }

    /**
     * Tests the unzipAssets() method.
     *
     * @return void
     */
    public function testUnzipAssetsWithInvalidArgumentException() {

        try {

            TestAssetsHelper::unzipAssets($this->directoryAssets, $this->directoryIllegal);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("\"" . $this->directoryIllegal . "\" is not a directory", $ex->getMessage());
        }
    }
}
