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

use Closure;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Twig\Environment;
use Twig\Loader\LoaderInterface;
use WBW\Bundle\CoreBundle\Translation\BaseTranslatorInterface;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests
 * @abstract
 */
abstract class AbstractTestCase extends TestCase {

    /**
     * Container builder.
     *
     * @var ContainerBuilder
     */
    protected $containerBuilder;

    /**
     * CSRF token manager.
     *
     * @var CsrfTokenManagerInterface
     */
    protected $csrfTokenManager;

    /**
     * Encoder factory.
     *
     * @var EncoderFactoryInterface
     */
    protected $encoderFactory;

    /**
     * Entity manager.
     *
     * @var EntityManagerInterface;
     */
    protected $entityManager;

    /**
     * Event dispatcher.
     *
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * Flash bag.
     *
     * @var FlashBagInterface
     */
    protected $flashBag;

    /**
     * Form factory.
     *
     * @var FormFactoryInterface
     */
    protected $formFactory;

    /**
     * Kernel.
     *
     * @var KernelInterface
     */
    protected $kernel;

    /**
     * Logger.
     *
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Mailer.
     *
     * @var MailerInterface
     */
    protected $mailer;

    /**
     * Router.
     *
     * @var RouterInterface
     */
    protected $router;

    /**
     * Session.
     *
     * @var SessionInterface
     */
    protected $session;

    /**
     * Session bag.
     *
     * @var SessionBagInterface
     */
    protected $sessionBag;

    /**
     * Token
     *
     * @var TokenInterface
     */
    protected $token;

    /**
     * Token storage.
     *
     * @var TokenStorageInterface
     */
    protected $tokenStorage;

    /**
     * Translator.
     *
     * @var BaseTranslatorInterface
     */
    protected $translator;

    /**
     * Twig environment.
     *
     * @var Environment
     */
    protected $twigEnvironment;

    /**
     * Twig globals.
     *
     * @var array
     */
    private $twigGlobals = [];

    /**
     * Twig loader.
     *
     * @var LoaderInterface
     */
    protected $twigLoader;

    /**
     * User.
     *
     * @var UserInterface
     */
    protected $user;

    /**
     * Get the dispatch() method for an EventDispatcher.
     *
     * @return Closure Returns the dispatch() method for an EventDispatcher.
     */
    public static function getEventDispatcherDispatchFunction(): Closure {
        return TestCaseHelper::getEventDispatcherDispatchFunction();
    }

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a CSRF token manager.
        $this->csrfTokenManager = $this->getMockBuilder(CsrfTokenManagerInterface::class)->getMock();

        // Set an Encoder factory mock.
        $this->encoderFactory = $this->getMockBuilder(EncoderFactoryInterface::class)->getMock();

        // Set an Entity manager mock.
        $this->entityManager = $this->getMockBuilder(EntityManagerInterface::class)->getMock();

        // Set an Event dispatcher mock.
        $this->eventDispatcher = $this->getMockBuilder(EventDispatcherInterface::class)->getMock();

        // Set a Flash bag mock.
        $this->flashBag = $this->getMockBuilder(FlashBagInterface::class)->getMock();

        // Set a Form factory mock.
        $this->formFactory = $this->getMockBuilder(FormFactoryInterface::class)->getMock();

        // Set a Kernel mock.
        $this->kernel = $this->getMockBuilder(KernelInterface::class)->getMock();

        // Set a Logger mock.
        $this->logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        // Set a Mailer mock.
        $this->mailer = $this->getMockBuilder(MailerInterface::class)->getMock();

        // Set a Router mock.
        $this->router = $this->getMockBuilder(RouterInterface::class)->getMock();

        // Set a Session mock.
        $this->session = $this->getMockBuilder(SessionInterface::class)->getMock();

        // Set a Session bag mock.
        $this->sessionBag = $this->getMockBuilder(SessionBagInterface::class)->getMock();

        // Set a trans() callback.
        $trans = TestCaseHelper::getTranslatorTransFunction();

        // Set a Translator mock.
        $this->translator = $this->getMockBuilder(BaseTranslatorInterface::class)->getMock();
        $this->translator->expects($this->any())->method("trans")->willReturnCallback($trans);

        // Set getUser() callback.
        $getUser = function(): ?UserInterface {
            return $this->user;
        };

        // Set a Token mock.
        $this->token = $this->getMockBuilder(TokenInterface::class)->getMock();
        $this->token->expects($this->any())->method("getUser")->willReturnCallback($getUser);

        // Set a Token storage mock.
        $this->tokenStorage = $this->getMockBuilder(TokenStorageInterface::class)->getMock();
        $this->tokenStorage->expects($this->any())->method("getToken")->willReturn($this->token);

        // Set a Twig loader mock.
        $this->twigLoader = $this->getMockBuilder(LoaderInterface::class)->getMock();

        // Set addGlobal() callback.
        $addGlobal = function(string $name, $value): void {
            $this->twigGlobals[$name] = $value;
        };

        // Set getGlobals() callback.
        $getGlobals = function(): array {
            return $this->twigGlobals;
        };

        // Set a Twig environment mock.
        $this->twigEnvironment = $this->getMockBuilder(Environment::class)->setConstructorArgs([$this->twigLoader, []])->getMock();
        $this->twigEnvironment->expects($this->any())->method("addGlobal")->willReturnCallback($addGlobal);
        $this->twigEnvironment->expects($this->any())->method("getGlobals")->willReturnCallback($getGlobals);

        // Set a Parameter bag mock.
        $parameterBag = new ParameterBag([
            "kernel.environment" => "test",
            "kernel.project_dir" => realpath(__DIR__ . "/Fixtures/app"),
        ]);

        // We set a container builder with only the necessary.
        $this->containerBuilder = new ContainerBuilder($parameterBag);
        $this->containerBuilder->set("doctrine.orm.entity_manager", $this->entityManager);
        $this->containerBuilder->set("event_dispatcher", $this->eventDispatcher);
        $this->containerBuilder->set("form.factory", $this->formFactory);
        $this->containerBuilder->set("kernel", $this->kernel);
        $this->containerBuilder->set("logger", $this->logger);
        $this->containerBuilder->set("router", $this->router);
        $this->containerBuilder->set("session", $this->session);
        $this->containerBuilder->set("security.csrf.token_manager", $this->csrfTokenManager);
        $this->containerBuilder->set("security.encoder_factory", $this->encoderFactory);
        $this->containerBuilder->set("security.token_storage", $this->tokenStorage);
        $this->containerBuilder->set("swiftmailer.mailer", $this->mailer);
        $this->containerBuilder->set("translator", $this->translator);
        $this->containerBuilder->set("twig", $this->twigEnvironment);
    }
}
