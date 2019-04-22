<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\DependencyInjection;

use Exception;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\AmberColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\BlueColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\BlueGreyColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\BrownColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\CyanColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\DeepOrangeColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\DeepPurpleColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\GreenColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\GreyColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\IndigoColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\LightBlueColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\LightGreenColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\LimeColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\OrangeColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\PinkColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\PurpleColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\TealColorProvider;
use WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette\YellowColorProvider;
use WBW\Bundle\CoreBundle\Command\UnzipAssetsCommand;
use WBW\Bundle\CoreBundle\DependencyInjection\CoreExtension;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\EventListener\NotificationEventListener;
use WBW\Bundle\CoreBundle\Helper\FormHelper;
use WBW\Bundle\CoreBundle\Manager\ColorManager;
use WBW\Bundle\CoreBundle\Manager\ThemeManager;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\FontAwesomeTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\JQueryInputMaskTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MaterialDesignColorPaletteTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MaterialDesignIconicFontTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Plugin\MeteoconsTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\QuoteTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\RendererTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\StylesheetTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\UtilityTwigExtension;

/**
 * Core extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\DependencyInjection
 */
class CoreExtensionTest extends AbstractTestCase {

    /**
     * Tests the getAlias() method.
     *
     * @return void
     */
    public function testGetAlias() {

        $obj = new CoreExtension();

        $this->assertEquals("core", $obj->getAlias());
    }

    /**
     * Tests the load() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLoad() {

        $obj = new CoreExtension();

        $this->assertNull($obj->load([], $this->containerBuilder));

        // Commands
        $this->assertInstanceOf(UnzipAssetsCommand::class, $this->containerBuilder->get(UnzipAssetsCommand::SERVICE_NAME));

        // Event listeners
        $this->assertInstanceOf(KernelEventListener::class, $this->containerBuilder->get(KernelEventListener::SERVICE_NAME));
        $this->assertInstanceOf(NotificationEventListener::class, $this->containerBuilder->get(NotificationEventListener::SERVICE_NAME));

        // Helpers
        $this->assertInstanceOf(FormHelper::class, $this->containerBuilder->get(FormHelper::SERVICE_NAME));

        // Managers
        $this->assertInstanceOf(ColorManager::class, $this->containerBuilder->get(ColorManager::SERVICE_NAME));
        $this->assertInstanceOf(ThemeManager::class, $this->containerBuilder->get(ThemeManager::SERVICE_NAME));

        // Providers
        $this->assertInstanceOf(AmberColorProvider::class, $this->containerBuilder->get(AmberColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(BlueColorProvider::class, $this->containerBuilder->get(BlueColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(BlueGreyColorProvider::class, $this->containerBuilder->get(BlueGreyColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(BrownColorProvider::class, $this->containerBuilder->get(BrownColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(CyanColorProvider::class, $this->containerBuilder->get(CyanColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(DeepOrangeColorProvider::class, $this->containerBuilder->get(DeepOrangeColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(DeepPurpleColorProvider::class, $this->containerBuilder->get(DeepPurpleColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(GreenColorProvider::class, $this->containerBuilder->get(GreenColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(GreyColorProvider::class, $this->containerBuilder->get(GreyColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(IndigoColorProvider::class, $this->containerBuilder->get(IndigoColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(LightBlueColorProvider::class, $this->containerBuilder->get(LightBlueColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(LightGreenColorProvider::class, $this->containerBuilder->get(LightGreenColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(LimeColorProvider::class, $this->containerBuilder->get(LimeColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(OrangeColorProvider::class, $this->containerBuilder->get(OrangeColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(PinkColorProvider::class, $this->containerBuilder->get(PinkColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(PurpleColorProvider::class, $this->containerBuilder->get(PurpleColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(RedColorProvider::class, $this->containerBuilder->get(RedColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(TealColorProvider::class, $this->containerBuilder->get(TealColorProvider::SERVICE_NAME));
        $this->assertInstanceOf(YellowColorProvider::class, $this->containerBuilder->get(YellowColorProvider::SERVICE_NAME));

        // Plug-ins Twig extensions
        $this->assertInstanceOf(FontAwesomeTwigExtension::class, $this->containerBuilder->get(FontAwesomeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(JQueryInputMaskTwigExtension::class, $this->containerBuilder->get(JQueryInputMaskTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MaterialDesignColorPaletteTwigExtension::class, $this->containerBuilder->get(MaterialDesignColorPaletteTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MaterialDesignIconicFontTwigExtension::class, $this->containerBuilder->get(MaterialDesignIconicFontTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MeteoconsTwigExtension::class, $this->containerBuilder->get(MeteoconsTwigExtension::SERVICE_NAME));

        // Quote Twig extension
        $this->assertInstanceOf(QuoteTwigExtension::class, $this->containerBuilder->get(QuoteTwigExtension::SERVICE_NAME));

        // Renderer Twig extension
        $this->assertInstanceOf(RendererTwigExtension::class, $this->containerBuilder->get(RendererTwigExtension::SERVICE_NAME));

        // Stylesheet Twig extension
        $this->assertInstanceOf(StylesheetTwigExtension::class, $this->containerBuilder->get(StylesheetTwigExtension::SERVICE_NAME));

        // Utility Twig extension
        $this->assertInstanceOf(UtilityTwigExtension::class, $this->containerBuilder->get(UtilityTwigExtension::SERVICE_NAME));
    }
}
