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

use Doctrine\Persistence\Mapping\ClassMetadata;
use Exception;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use WBW\Bundle\CoreBundle\Command\CopySkeletonCommand;
use WBW\Bundle\CoreBundle\Command\UnzipAssetsCommand;
use WBW\Bundle\CoreBundle\Controller\TwigController;
use WBW\Bundle\CoreBundle\DependencyInjection\Configuration;
use WBW\Bundle\CoreBundle\DependencyInjection\WBWCoreExtension;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\EventListener\NotificationEventListener;
use WBW\Bundle\CoreBundle\EventListener\SecurityEventListener;
use WBW\Bundle\CoreBundle\EventListener\ToastEventListener;
use WBW\Bundle\CoreBundle\Helper\FormHelper;
use WBW\Bundle\CoreBundle\Manager\ThemeManager;
use WBW\Bundle\CoreBundle\Provider\SyntaxHighlighterProvider;
use WBW\Bundle\CoreBundle\Service\RepositoryService;
use WBW\Bundle\CoreBundle\Service\RepositoryServiceInterface;
use WBW\Bundle\CoreBundle\Service\StatementService;
use WBW\Bundle\CoreBundle\Service\StatementServiceInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestUser;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\FontAwesomeTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\JQueryInputMaskTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\MaterialDesignColorPaletteTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\MaterialDesignIconicFontTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\MeteoconsTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\Assets\SyntaxHighlighterTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\AssetsTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\ContainerTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\QuoteTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\StringTwigExtension;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\AmberColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\BlueColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\BlueGreyColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\BrownColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\CyanColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\DeepOrangeColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\DeepPurpleColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\GreenColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\GreyColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\IndigoColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\LightBlueColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\LightGreenColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\LimeColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\OrangeColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\PinkColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\PurpleColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\TealColorProvider;
use WBW\Library\Symfony\Color\MaterialDesignColorPalette\YellowColorProvider;
use WBW\Library\Symfony\Manager\ColorManager;
use WBW\Library\Symfony\Manager\JavascriptManager;
use WBW\Library\Symfony\Manager\QuoteManager;
use WBW\Library\Symfony\Manager\StylesheetManager;
use WBW\Library\Symfony\Provider\Quote\WorldsWisdomQuoteProvider;
use WBW\Library\Symfony\Provider\Quote\YamlQuoteProvider;
use WBW\Library\Symfony\Service\TokenGeneratorService;
use WBW\Library\Symfony\Service\TokenGeneratorServiceInterface;

/**
 * Core extension test.
 *
 * @author webeweb <https://github.com/webeweb>
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
     * {@inheritdoc}
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

        // Set a Class metadata mock.
        $classMetadata = $this->getMockBuilder(ClassMetadata::class)->getMock();
        $classMetadata->expects($this->any())->method("getName")->willReturn(TestUser::class);

        // Set the Entity manager mock.
        $this->entityManager->expects($this->any())->method("getClassMetadata")->willReturn($classMetadata);
    }

    /**
     * Tests getAlias()
     *
     * @return void
     */
    public function testGetAlias(): void {

        $obj = new WBWCoreExtension();

        $this->assertEquals("wbw_core", $obj->getAlias());
    }

    /**
     * Tests getConfiguration()
     *
     * @return void
     */
    public function testGetConfiguration(): void {

        $obj = new WBWCoreExtension();

        $this->assertInstanceOf(Configuration::class, $obj->getConfiguration([], $this->containerBuilder));
    }

    /**
     * Tests load()
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

        // Controllers
        $this->assertInstanceOf(TwigController::class, $this->containerBuilder->get(TwigController::SERVICE_NAME));

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

        // Managers
        $this->assertInstanceOf(ColorManager::class, $this->containerBuilder->get(ColorManager::SERVICE_NAME));
        $this->assertInstanceOf(JavascriptManager::class, $this->containerBuilder->get(JavascriptManager::SERVICE_NAME));
        $this->assertInstanceOf(QuoteManager::class, $this->containerBuilder->get(QuoteManager::SERVICE_NAME));
        $this->assertInstanceOf(StylesheetManager::class, $this->containerBuilder->get(StylesheetManager::SERVICE_NAME));
        $this->assertInstanceOf(ThemeManager::class, $this->containerBuilder->get(ThemeManager::SERVICE_NAME));

        // Providers
        $this->assertInstanceOf(SyntaxHighlighterProvider::class, $this->containerBuilder->get(SyntaxHighlighterProvider::SERVICE_NAME));
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

            $this->containerBuilder->get(WorldsWisdomQuoteProvider::SERVICE_NAME);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ServiceNotFoundException::class, $ex);
            $this->assertStringContainsString(WorldsWisdomQuoteProvider::SERVICE_NAME, $ex->getMessage());
        }

        // Services
        $this->assertInstanceOf(RepositoryService::class, $this->containerBuilder->get("wbw.core.repository.repository_helper"));
        $this->assertInstanceOf(RepositoryService::class, $this->containerBuilder->get(RepositoryServiceInterface::SERVICE_NAME));
        $this->assertInstanceOf(StatementService::class, $this->containerBuilder->get(StatementServiceInterface::SERVICE_NAME));
        $this->assertInstanceOf(TokenGeneratorService::class, $this->containerBuilder->get(TokenGeneratorServiceInterface::SERVICE_NAME));

        // Twig extensions
        $this->assertInstanceOf(AssetsTwigExtension::class, $this->containerBuilder->get(AssetsTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ContainerTwigExtension::class, $this->containerBuilder->get(ContainerTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(QuoteTwigExtension::class, $this->containerBuilder->get(QuoteTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(StringTwigExtension::class, $this->containerBuilder->get(StringTwigExtension::SERVICE_NAME));

        // Assets Twig extensions
        $this->assertInstanceOf(FontAwesomeTwigExtension::class, $this->containerBuilder->get(FontAwesomeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(JQueryInputMaskTwigExtension::class, $this->containerBuilder->get(JQueryInputMaskTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MaterialDesignColorPaletteTwigExtension::class, $this->containerBuilder->get(MaterialDesignColorPaletteTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MaterialDesignIconicFontTwigExtension::class, $this->containerBuilder->get(MaterialDesignIconicFontTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MeteoconsTwigExtension::class, $this->containerBuilder->get(MeteoconsTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(SyntaxHighlighterTwigExtension::class, $this->containerBuilder->get(SyntaxHighlighterTwigExtension::SERVICE_NAME));
    }

    /**
     * Tests load()
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
     * Tests load()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLoadWithWorldsWisdomQuote(): void {

        // Set the configs mock.
        $this->configs[WBWCoreExtension::EXTENSION_ALIAS]["quote"]["worlds_wisdom"] = true;

        $obj = new WBWCoreExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        $this->assertInstanceOf(YamlQuoteProvider::class, $this->containerBuilder->get(WorldsWisdomQuoteProvider::SERVICE_NAME));
    }

    /**
     * Tests load()
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
     * Tests load()
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
     * Tests load()
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
     * Tests load()
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
