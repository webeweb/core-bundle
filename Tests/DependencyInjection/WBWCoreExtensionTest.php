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
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
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
use WBW\Bundle\CoreBundle\DependencyInjection\Configuration;
use WBW\Bundle\CoreBundle\DependencyInjection\WBWCoreExtension;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\EventListener\NotificationEventListener;
use WBW\Bundle\CoreBundle\EventListener\ToastEventListener;
use WBW\Bundle\CoreBundle\Helper\FormHelper;
use WBW\Bundle\CoreBundle\Manager\ColorManager;
use WBW\Bundle\CoreBundle\Manager\QuoteManager;
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
class WBWCoreExtensionTest extends AbstractTestCase {

    /**
     * Configs.
     *
     * @var array
     */
    private $configs;

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a configs array mock.
        $this->configs = [
            "wbw_core" => [
                "commands"        => true,
                "event_listeners" => true,
                "providers"       => true,
                "twig"            => true,
            ],
        ];
    }

    /**
     * Tests the getConfiguration() method.
     *
     * @return void
     */
    public function testGetConfiguration() {

        $obj = new WBWCoreExtension();

        $this->assertInstanceOf(Configuration::class, $obj->getConfiguration([], $this->containerBuilder));
    }

    /**
     * Tests the load() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLoad() {

        $obj = new WBWCoreExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        // Commands
        $this->assertInstanceOf(UnzipAssetsCommand::class, $this->containerBuilder->get(UnzipAssetsCommand::SERVICE_NAME));

        // Event listeners
        $this->assertInstanceOf(KernelEventListener::class, $this->containerBuilder->get(KernelEventListener::SERVICE_NAME));
        $this->assertInstanceOf(NotificationEventListener::class, $this->containerBuilder->get(NotificationEventListener::SERVICE_NAME));
        $this->assertInstanceOf(ToastEventListener::class, $this->containerBuilder->get(ToastEventListener::SERVICE_NAME));

        // Helpers
        $this->assertInstanceOf(FormHelper::class, $this->containerBuilder->get(FormHelper::SERVICE_NAME));

        // Managers
        $this->assertInstanceOf(ColorManager::class, $this->containerBuilder->get(ColorManager::SERVICE_NAME));
        $this->assertInstanceOf(QuoteManager::class, $this->containerBuilder->get(QuoteManager::SERVICE_NAME));
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

        // Twig extensions
        $this->assertInstanceOf(QuoteTwigExtension::class, $this->containerBuilder->get(QuoteTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(RendererTwigExtension::class, $this->containerBuilder->get(RendererTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(StylesheetTwigExtension::class, $this->containerBuilder->get(StylesheetTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(UtilityTwigExtension::class, $this->containerBuilder->get(UtilityTwigExtension::SERVICE_NAME));
    }

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoadWithoutCommands() {

        // Set the configs mock.
        $this->configs["wbw_core"]["commands"] = false;

        $obj = new WBWCoreExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        try {

            $this->containerBuilder->get(UnzipAssetsCommand::SERVICE_NAME);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ServiceNotFoundException::class, $ex);
            $this->assertContains(UnzipAssetsCommand::SERVICE_NAME, $ex->getMessage());
        }
    }

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoadWithoutEventListeners() {

        // Set the configs mock.
        $this->configs["wbw_core"]["event_listeners"] = false;

        $obj = new WBWCoreExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        try {

            $this->containerBuilder->get(KernelEventListener::SERVICE_NAME);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ServiceNotFoundException::class, $ex);
            $this->assertContains(KernelEventListener::SERVICE_NAME, $ex->getMessage());
        }
    }

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoadWithoutProviders() {

        // Set the configs mock.
        $this->configs["wbw_core"]["providers"] = false;

        $obj = new WBWCoreExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        try {

            $this->containerBuilder->get(RedColorProvider::SERVICE_NAME);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ServiceNotFoundException::class, $ex);
            $this->assertContains(RedColorProvider::SERVICE_NAME, $ex->getMessage());
        }
    }

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoadWithoutTwig() {

        // Set the configs mock.
        $this->configs["wbw_core"]["twig"] = false;

        $obj = new WBWCoreExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        try {

            $this->containerBuilder->get(QuoteTwigExtension::SERVICE_NAME);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ServiceNotFoundException::class, $ex);
            $this->assertContains(QuoteTwigExtension::SERVICE_NAME, $ex->getMessage());
        }
    }
}
