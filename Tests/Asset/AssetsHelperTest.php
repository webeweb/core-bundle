<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset;

use Exception;
use InvalidArgumentException;
use WBW\Bundle\CoreBundle\Component\DependencyInjection\ConfigurationHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\TestAssetsHelper;

/**
 * Assets helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Asset
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
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the directories.
        $this->directoryAssets  = realpath(__DIR__ . "/../../Resources/assets");
        $this->directoryIllegal = realpath(__DIR__ . "/../../composer.json");
        $this->directoryPublic  = realpath(__DIR__ . "/../../Resources/public");
    }

    /**
     * Tests listAssets()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testListAssets(): void {

        $directory = realpath(__DIR__ . "/../../DependencyInjection");

        // Load the YAML configuration.
        $config  = ConfigurationHelper::loadYamlConfig($directory, "assets");
        $plugins = $config["assets"]["wbw.core.asset.core"]["plugins"];

        $res = TestAssetsHelper::listAssets($this->directoryAssets);
        $this->assertCount(22, $res);

        $i = -1;

        $this->assertRegExp("/animate\.css\-" . preg_quote($plugins["animate_css"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/clippy\.js\.zip$/", $res[++$i]);
        $this->assertRegExp("/fontawesome\-" . preg_quote($plugins["font_awesome"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/fullcalendar\-" . preg_quote($plugins["full_calendar"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery\-" . preg_quote($plugins["jquery"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery\-contextmenu\-" . preg_quote($plugins["jquery_context_menu"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery\-easyautocomplete\-" . preg_quote($plugins["jquery_easy_autocomplete"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery\-fancybox\-" . preg_quote($plugins["jquery_fancy_box"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery\-inputmask\-" . preg_quote($plugins["jquery_input_mask"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery\-select2\-" . preg_quote($plugins["jquery_select2"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/leaflet\-" . preg_quote($plugins["leaflet"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/leaflet-color-markers\-" . preg_quote($plugins["leaflet_color_markers"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/leaflet-markercluster\-" . preg_quote($plugins["leaflet_marker_cluster"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/material\-design\-color\-palette\-" . preg_quote($plugins["material_design_color_palette"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/material\-design\-hierarchical\-display\-" . preg_quote($plugins["material_design_hierarchical_display"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/material\-design\-iconic\-font\-" . preg_quote($plugins["material_design_iconic_font"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/meteocons\.zip$/", $res[++$i]);
        $this->assertRegExp("/sweetalert\-" . preg_quote($plugins["sweet_alert"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/sweetalert2\-" . preg_quote($plugins["sweet_alert2"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/syntaxhighlighter\-" . preg_quote($plugins["syntax_highlighter"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/typed\.js\-" . preg_quote($plugins["typed_js"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/waitme\-" . preg_quote($plugins["wait_me"]["version"]) . "\.zip$/", $res[++$i]);
    }

    /**
     * Tests listAssets()
     *
     * @return void
     */
    public function testListAssetsWithInvalidArgumentException(): void {

        try {

            TestAssetsHelper::listAssets($this->directoryIllegal);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('"' . $this->directoryIllegal . '" is not a directory', $ex->getMessage());
        }
    }

    /**
     * Tests unzipAssets()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testUnzipAssets(): void {

        $res = TestAssetsHelper::unzipAssets($this->directoryAssets, $this->directoryPublic);
        $this->assertCount(22, $res);

        foreach ($res as $k => $v) {
            $this->assertDirectoryExists(str_replace([$this->directoryAssets, ".zip"], [$this->directoryPublic, ""], $k));
            $this->assertTrue($v);
        }
    }

    /**
     * Tests unzipAssets()
     *
     * @return void
     */
    public function testUnzipAssetsWithInvalidArgumentException(): void {

        try {

            TestAssetsHelper::unzipAssets($this->directoryAssets, $this->directoryIllegal);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('"' . $this->directoryIllegal . '" is not a directory', $ex->getMessage());
        }
    }
}
