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

use Exception;
use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Helper\TestAssetsHelper;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;

/**
 * Assets helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Helper
 */
class AssetsHelperTest extends AbstractFrameworkTestCase {

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
     */
    public function testListAssets() {

        $res = TestAssetsHelper::listAssets($this->directoryAssets);
        $this->assertCount(12, $res);

        $this->assertRegexp("/animate\.css\-.*\.zip$/", $res[0]);
        $this->assertRegexp("/fontawesome\-.*\.zip$/", $res[1]);
        $this->assertRegexp("/jquery\-.*\.zip$/", $res[2]);
        $this->assertRegexp("/jquery\-easyautocomplete\-.*\.zip$/", $res[3]);
        $this->assertRegexp("/jquery\-inputmask\-.*\.zip$/", $res[4]);
        $this->assertRegexp("/jquery\-select2\-.*\.zip$/", $res[5]);
        $this->assertRegexp("/material\-design\-color\-palette\-.*\.zip$/", $res[6]);
        $this->assertRegexp("/material\-design\-hierarchical\-display\-.*\.zip$/", $res[7]);
        $this->assertRegexp("/material\-design\-iconic\-font\-.*\.zip$/", $res[8]);
        $this->assertRegexp("/meteocons\.zip$/", $res[9]);
        $this->assertRegexp("/sweetalert\-.*\.zip$/", $res[10]);
        $this->assertRegexp("/waitme\-.*\.zip$/", $res[11]);
    }

    /**
     * Tests the listAssets() method.
     *
     * @return void
     */
    public function testListAssetsWithIllegalArgumentException() {

        try {

            TestAssetsHelper::listAssets($this->directoryIllegal);
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("\"" . $this->directoryIllegal . "\" is not a directory", $ex->getMessage());
        }
    }

    /**
     * Tests the unzipAssets() method.
     *
     * @return void
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
    public function testUnzipAssetsWithIllegalArgumentException() {

        try {

            TestAssetsHelper::unzipAssets($this->directoryAssets, $this->directoryIllegal);
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("\"" . $this->directoryIllegal . "\" is not a directory", $ex->getMessage());
        }
    }

}
