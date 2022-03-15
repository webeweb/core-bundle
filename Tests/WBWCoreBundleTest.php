<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests;

use Exception;
use WBW\Bundle\CoreBundle\Config\ConfigurationHelper;
use WBW\Bundle\CoreBundle\DependencyInjection\WBWCoreExtension;
use WBW\Bundle\CoreBundle\Provider\AssetsProviderInterface;
use WBW\Bundle\CoreBundle\WBWCoreBundle;
use WBW\Library\Symfony\Helper\AssetsHelper;

/**
 * Core bundle test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests
 */
class WBWCoreBundleTest extends AbstractTestCase {

    /**
     * Tests build()
     *
     * @return void
     */
    public function testBuild(): void {

        $obj = new WBWCoreBundle();

        $this->assertNull($obj->build($this->containerBuilder));
    }

    /**
     * Tests getAssetsRelativeDirectory()
     *
     * @return void
     */
    public function testGetAssetsRelativeDirectory(): void {

        $obj = new WBWCoreBundle();

        $this->assertEquals(AssetsProviderInterface::ASSETS_RELATIVE_DIRECTORY, $obj->getAssetsRelativeDirectory());
    }

    /**
     * Tests getContainerExtension()
     *
     * @return void
     */
    public function testGetContainerExtension(): void {

        $obj = new WBWCoreBundle();

        $this->assertInstanceOf(WBWCoreExtension::class, $obj->getContainerExtension());
    }

    /**
     * Tests listAssets()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testListAssets(): void {

        $config = realpath(__DIR__ . "/../DependencyInjection");
        $assets = realpath(__DIR__ . "/../Resources/assets");

        // Load the YAML configuration.
        $config  = ConfigurationHelper::loadYamlConfig($config, "assets");
        $plugins = $config["assets"]["wbw.core.asset.core"]["plugins"];

        $res = AssetsHelper::listAssets($assets);
        $this->assertCount(23, $res);

        $i = -1;

        $this->assertRegExp("/animate\.css-" . preg_quote($plugins["animate_css"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/clippy\.js\.zip$/", $res[++$i]);
        $this->assertRegExp("/fontawesome-" . preg_quote($plugins["font_awesome"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/fontawesome-6\.0\.0\.zip$/", $res[++$i]);
        $this->assertRegExp("/fullcalendar-" . preg_quote($plugins["full_calendar"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-" . preg_quote($plugins["jquery"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-contextmenu-" . preg_quote($plugins["jquery_context_menu"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-easyautocomplete-" . preg_quote($plugins["jquery_easy_autocomplete"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-fancybox-" . preg_quote($plugins["jquery_fancy_box"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-inputmask-" . preg_quote($plugins["jquery_input_mask"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-select2-" . preg_quote($plugins["jquery_select2"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/leaflet-" . preg_quote($plugins["leaflet"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/leaflet-color-markers-" . preg_quote($plugins["leaflet_color_markers"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/leaflet-markercluster-" . preg_quote($plugins["leaflet_marker_cluster"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/material-design-color-palette-" . preg_quote($plugins["material_design_color_palette"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/material-design-hierarchical-display-" . preg_quote($plugins["material_design_hierarchical_display"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/material-design-iconic-font-" . preg_quote($plugins["material_design_iconic_font"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/meteocons\.zip$/", $res[++$i]);
        $this->assertRegExp("/sweetalert-" . preg_quote($plugins["sweet_alert"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/sweetalert2-" . preg_quote($plugins["sweet_alert2"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/syntaxhighlighter-" . preg_quote($plugins["syntax_highlighter"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/typed\.js-" . preg_quote($plugins["typed_js"]["version"]) . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/waitme-" . preg_quote($plugins["wait_me"]["version"]) . "\.zip$/", $res[++$i]);
    }
}
