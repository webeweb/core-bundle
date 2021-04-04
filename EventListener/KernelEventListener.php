<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\EventListener;

use Exception;
use Swift_Message;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\CoreBundle\Component\HttpFoundation\Request\RequestTrait;
use WBW\Bundle\CoreBundle\Component\HttpKernel\Event\BaseExceptionEvent;
use WBW\Bundle\CoreBundle\Component\HttpKernel\Event\BaseRequestEvent;
use WBW\Bundle\CoreBundle\Component\Security\Core\Authentication\Token\Storage\TokenStorageTrait;
use WBW\Bundle\CoreBundle\Component\Security\Core\User\UserTrait;
use WBW\Bundle\CoreBundle\Exception\BadUserRoleException;
use WBW\Bundle\CoreBundle\Exception\RedirectResponseException;
use WBW\Bundle\CoreBundle\Manager\Asset\ThemeManager;
use WBW\Bundle\CoreBundle\Manager\Asset\ThemeManagerTrait;
use WBW\Bundle\CoreBundle\Service\SwiftMailerTrait;

/**
 * Kernel event listener.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\EventListener
 */
class KernelEventListener {

    use RequestTrait;
    use SwiftMailerTrait {
        setSwiftMailer as public;
    }
    use ThemeManagerTrait;
    use TokenStorageTrait;
    use UserTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.event_listener.kernel";

    /**
     * Constructor.
     *
     * @param TokenStorageInterface $tokenStorage The token storage.
     * @param ThemeManager $themeManager The theme manager.
     */
    public function __construct(TokenStorageInterface $tokenStorage, ThemeManager $themeManager) {
        $this->setThemeManager($themeManager);
        $this->setTokenStorage($tokenStorage);
    }

    /**
     * Get the current user.
     *
     * @return UserInterface|null Returns the current user in case of success, null otherwise.
     */
    public function getUser(): ?UserInterface {

        $token = null;
        if (null === $this->user) {
            $token = $this->getTokenStorage()->getToken();
        }

        if (null !== $token) {
            $this->user = $token->getUser();
        }

        if (true === ($this->user instanceof UserInterface)) {
            return $this->user;
        }

        return null;
    }

    /**
     * Handle a bad user role exception.
     *
     * @param BaseExceptionEvent $event The event.
     * @param BadUserRoleException $ex The exception.
     * @return void
     */
    protected function handleBadUserRoleException($event, BadUserRoleException $ex): void {
        if (null !== $ex->getRedirectUrl()) {
            $event->setResponse(new RedirectResponse($ex->getRedirectUrl()));
        }
    }

    /**
     * Handle a redirect response exception.
     *
     * @param BaseExceptionEvent $event The event.
     * @param RedirectResponseException $ex The exception.
     * @return void
     */
    protected function handleRedirectResponseException($event, RedirectResponseException $ex): void {
        if (null !== $ex->getRedirectUrl()) {
            $event->setResponse(new RedirectResponse($ex->getRedirectUrl()));
        }
    }

    /**
     * Handle an unexpected exception.
     *
     * @param BaseExceptionEvent $event The event.
     * @param Exception $ex The exception.
     * @return void
     */
    protected function handleUnexpectedException($event, Exception $ex): void {

        $mailer = $this->getSwiftMailer();
        if (null === $mailer) {
            return;
        }

        $twig = $this->getThemeManager()->getTwigEnvironment();

        $body = $twig->render("@WBWCore/layout/exception.html.twig", [
            "exception" => $ex,
        ]);

        $message = new Swift_Message();
        $message->setBody($body, "text/html");
    }

    /**
     * On kernel exception.
     *
     * @param BaseExceptionEvent $event The event.
     * @return BaseExceptionEvent Returns the event.
     */
    public function onKernelException($event) {

        $ex = $event->getException();

        // Handle the exception.
        if (true === ($ex instanceof BadUserRoleException)) {
            $this->handleBadUserRoleException($event, $ex);
        }
        if (true === ($ex instanceof RedirectResponseException)) {
            $this->handleRedirectResponseException($event, $ex);
        }

        if (null === $event->getResponse()) {
            $this->handleUnexpectedException($event, $ex);
        }

        return $event;
    }

    /**
     * On kernel request.
     *
     * @param BaseRequestEvent $event The event.
     * @return BaseRequestEvent Returns the event.
     */
    public function onKernelRequest($event) {

        $this->setRequest($event->getRequest());

        // Register the theme providers.
        $this->getThemeManager()->addGlobal();

        return $event;
    }
}
