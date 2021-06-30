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
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\AmberColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\BlueColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\BlueGreyColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\BrownColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\CyanColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\DeepOrangeColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\DeepPurpleColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\GreenColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\GreyColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\IndigoColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\LightBlueColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\LightGreenColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\LimeColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\OrangeColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\PinkColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\PurpleColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\TealColorProvider;
use WBW\Bundle\CoreBundle\Asset\Color\MaterialDesignColorPalette\YellowColorProvider;
use WBW\Bundle\CoreBundle\Asset\Quote\YamlQuoteProvider;
use WBW\Bundle\CoreBundle\Command\CopySkeletonCommand;
use WBW\Bundle\CoreBundle\Command\UnzipAssetsCommand;
use WBW\Bundle\CoreBundle\Component\Form\FormHelper;
use WBW\Bundle\CoreBundle\DependencyInjection\Configuration;
use WBW\Bundle\CoreBundle\DependencyInjection\WBWCoreExtension;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\EventListener\NotificationEventListener;
use WBW\Bundle\CoreBundle\EventListener\SecurityEventListener;
use WBW\Bundle\CoreBundle\EventListener\ToastEventListener;
use WBW\Bundle\CoreBundle\Manager\Asset\ColorManager;
use WBW\Bundle\CoreBundle\Manager\Asset\QuoteManager;
use WBW\Bundle\CoreBundle\Manager\Asset\ThemeManager;
use WBW\Bundle\CoreBundle\Provider\Asset\Highlighter\SyntaxHighlighterStringsProvider;
use WBW\Bundle\CoreBundle\Repository\RepositoryHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\FontAwesomeTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\JQueryInputMaskTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\MaterialDesignColorPaletteTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\MaterialDesignIconicFontTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\MeteoconsTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\QuoteTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\SyntaxHighlighterTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\ContainerTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\JavascriptTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\RendererTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\StylesheetTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\UtilityTwigExtension;
use WBW\Bundle\CoreBundle\Utility\Canonicalizer;
use WBW\Bundle\CoreBundle\Utility\PasswordUpdater;
use WBW\Bundle\CoreBundle\Utility\TokenGenerator;

/**
 * Core extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\DependencyInjection
 */
class WBWCoreExtensionTest extends AbstractTestCase {

    /**
     * World's wisdom quote provider.
     *
     * @var string
     */
    const WORLDS_WISDOM_QUOTE_PROVIDER_SERVICE_NAME = "wbw.core.provider.asset.quote.worlds_wisdom";

    /**
     * Configs.
     *
     * @var array
     */
    private $configs;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a configs array mock.
        $this->configs = [
            WBWCoreExtension::EXTENSION_ALIAS => [
                "commands"        => true,
                "event_listeners" => true,
                "providers"       => true,
                "twig"            => true,
                "quote"           => [],
            ],
        ];

        // Set an Encoder factory mock.
        $encoderFactory = $this->getMockBuilder(EncoderFactoryInterface::class)->getMock();

        // Set the Container builder mock.
        $this->containerBuilder->set("security.encoder_factory", $encoderFactory);
    }

    /**
     * Tests the getAlias() method.
     *
     * @return void
     */
    public function testGetAlias(): void {

        $obj = new WBWCoreExtension();

        $this->assertEquals("wbw_core", $obj->getAlias());
    }

    /**
     * Tests the getConfiguration() method.
     *
     * @return void
     */
    public function testGetConfiguration(): void {

        $obj = new WBWCoreExtension();

        $this->assertInstanceOf(Configuration::class, $obj->getConfiguration([], $this->containerBuilder));
    }

    /**
     * Tests the load() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLoad(): void {

        $obj = new WBWCoreExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        // Commands
        $this->assertInstanceOf(CopySkeletonCommand::class, $this->containerBuilder->get(CopySkeletonCommand::SERVICE_NAME));
        $this->assertInstanceOf(UnzipAssetsCommand::class, $this->containerBuilder->get(UnzipAssetsCommand::SERVICE_NAME));

        // Event listeners
        $this->assertInstanceOf(KernelEventListener::class, $this->containerBuilder->get(KernelEventListener::SERVICE_NAME));
        $this->assertInstanceOf(NotificationEventListener::class, $this->containerBuilder->get(NotificationEventListener::SERVICE_NAME));
        $this->assertInstanceOf(ToastEventListener::class, $this->containerBuilder->get(ToastEventListener::SERVICE_NAME));

        try {

            $this->containerBuilder->get(SecurityEventListener::SERVICE_NAME);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ServiceNotFoundException::class, $ex);
            $this->assertStringContainsString(SecurityEventListener::SERVICE_NAME, $ex->getMessage());
        }

        // Helpers
        $this->assertInstanceOf(FormHelper::class, $this->containerBuilder->get(FormHelper::SERVICE_NAME));
        $this->assertInstanceOf(RepositoryHelper::class, $this->containerBuilder->get(RepositoryHelper::SERVICE_NAME));

        // Managers
        $this->assertInstanceOf(ColorManager::class, $this->containerBuilder->get(ColorManager::SERVICE_NAME));
        $this->assertInstanceOf(QuoteManager::class, $this->containerBuilder->get(QuoteManager::SERVICE_NAME));
        $this->assertInstanceOf(ThemeManager::class, $this->containerBuilder->get(ThemeManager::SERVICE_NAME));

        // Providers
        $this->assertInstanceOf(SyntaxHighlighterStringsProvider::class, $this->containerBuilder->get(SyntaxHighlighterStringsProvider::SERVICE_NAME));
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

        try {

            $this->containerBuilder->get(self::WORLDS_WISDOM_QUOTE_PROVIDER_SERVICE_NAME);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ServiceNotFoundException::class, $ex);
            $this->assertStringContainsString(self::WORLDS_WISDOM_QUOTE_PROVIDER_SERVICE_NAME, $ex->getMessage());
        }

        // Twig extensions
        $this->assertInstanceOf(ContainerTwigExtension::class, $this->containerBuilder->get(ContainerTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(JavascriptTwigExtension::class, $this->containerBuilder->get(JavascriptTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(QuoteTwigExtension::class, $this->containerBuilder->get(QuoteTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(RendererTwigExtension::class, $this->containerBuilder->get(RendererTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(StylesheetTwigExtension::class, $this->containerBuilder->get(StylesheetTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(UtilityTwigExtension::class, $this->containerBuilder->get(UtilityTwigExtension::SERVICE_NAME));

        // Utility.
        $this->assertInstanceOf(Canonicalizer::class, $this->containerBuilder->get(Canonicalizer::SERVICE_NAME));
        $this->assertInstanceOf(PasswordUpdater::class, $this->containerBuilder->get(PasswordUpdater::SERVICE_NAME));
        $this->assertInstanceOf(TokenGenerator::class, $this->containerBuilder->get(TokenGenerator::SERVICE_NAME));

        // Assets Twig extensions
        $this->assertInstanceOf(FontAwesomeTwigExtension::class, $this->containerBuilder->get(FontAwesomeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(JQueryInputMaskTwigExtension::class, $this->containerBuilder->get(JQueryInputMaskTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MaterialDesignColorPaletteTwigExtension::class, $this->containerBuilder->get(MaterialDesignColorPaletteTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MaterialDesignIconicFontTwigExtension::class, $this->containerBuilder->get(MaterialDesignIconicFontTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MeteoconsTwigExtension::class, $this->containerBuilder->get(MeteoconsTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(SyntaxHighlighterTwigExtension::class, $this->containerBuilder->get(SyntaxHighlighterTwigExtension::SERVICE_NAME));
    }

    /**
     * Tests the load() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLoadWithSecurity(): void {

        // Set the configs mock.
        $this->configs[WBWCoreExtension::EXTENSION_ALIAS]["security"] = true;

        $obj = new WBWCoreExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        $this->assertInstanceOf(SecurityEventListener::class, $this->containerBuilder->get(SecurityEventListener::SERVICE_NAME));
    }

    /**
     * Tests the load() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLoadWithWorldsWisdomQuote(): void {

        // Set the configs mock.
        $this->configs[WBWCoreExtension::EXTENSION_ALIAS]["quote"]["worlds_wisdom"] = true;

        $obj = new WBWCoreExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        $this->assertInstanceOf(YamlQuoteProvider::class, $this->containerBuilder->get(self::WORLDS_WISDOM_QUOTE_PROVIDER_SERVICE_NAME));
    }

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoadWithoutCommands(): void {

        // Set the configs mock.
        $this->configs[WBWCoreExtension::EXTENSION_ALIAS]["commands"] = false;

        $obj = new WBWCoreExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        try {

            $this->containerBuilder->get(UnzipAssetsCommand::SERVICE_NAME);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ServiceNotFoundException::class, $ex);
            $this->assertStringContainsString(UnzipAssetsCommand::SERVICE_NAME, $ex->getMessage());
        }
    }

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoadWithoutEventListeners(): void {

        // Set the configs mock.
        $this->configs[WBWCoreExtension::EXTENSION_ALIAS]["event_listeners"] = false;

        $obj = new WBWCoreExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        try {

            $this->containerBuilder->get(KernelEventListener::SERVICE_NAME);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ServiceNotFoundException::class, $ex);
            $this->assertStringContainsString(KernelEventListener::SERVICE_NAME, $ex->getMessage());
        }
    }

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoadWithoutProviders(): void {

        // Set the configs mock.
        $this->configs[WBWCoreExtension::EXTENSION_ALIAS]["providers"] = false;

        $obj = new WBWCoreExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        try {

            $this->containerBuilder->get(RedColorProvider::SERVICE_NAME);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ServiceNotFoundException::class, $ex);
            $this->assertStringContainsString(RedColorProvider::SERVICE_NAME, $ex->getMessage());
        }
    }

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoadWithoutTwig(): void {

        // Set the configs mock.
        $this->configs[WBWCoreExtension::EXTENSION_ALIAS]["twig"] = false;

        $obj = new WBWCoreExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        try {

            $this->containerBuilder->get(QuoteTwigExtension::SERVICE_NAME);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ServiceNotFoundException::class, $ex);
            $this->assertStringContainsString(QuoteTwigExtension::SERVICE_NAME, $ex->getMessage());
        }
    }
}
