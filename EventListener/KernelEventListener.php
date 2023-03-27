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

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Throwable;
use WBW\Bundle\CoreBundle\Exception\BadUserRoleException;
use WBW\Bundle\CoreBundle\HttpFoundation\RequestTrait;
use WBW\Bundle\CoreBundle\Mailer\MailerTrait;
use WBW\Bundle\CoreBundle\Manager\ThemeManager;
use WBW\Bundle\CoreBundle\Manager\ThemeManagerTrait;
use WBW\Bundle\CoreBundle\Security\Core\Authentication\Token\Storage\TokenStorageTrait;
use WBW\Bundle\CoreBundle\Security\Core\User\UserTrait;
use WBW\Library\Symfony\Exception\RedirectResponseException;

/**
 * Kernel event listener.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\EventListener
 */
class KernelEventListener {

    use RequestTrait;
    use MailerTrait {
        setMailer as public;
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
     * @param ExceptionEvent $event The event.
     * @param BadUserRoleException $ex The exception.
     * @return void
     */
    protected function handleBadUserRoleException(ExceptionEvent $event, BadUserRoleException $ex): void {
        if (null !== $ex->getRedirectUrl()) {
            $event->setResponse(new RedirectResponse($ex->getRedirectUrl()));
        }
    }

    /**
     * Handle a redirect response exception.
     *
     * @param ExceptionEvent $event The event.
     * @param RedirectResponseException $ex The exception.
     * @return void
     */
    protected function handleRedirectResponseException(ExceptionEvent $event, RedirectResponseException $ex): void {
        if (null !== $ex->getRedirectUrl()) {
            $event->setResponse(new RedirectResponse($ex->getRedirectUrl()));
        }
    }

    /**
     * Handle an unexpected exception.
     *
     * @param ExceptionEvent $event The event.
     * @param Throwable $ex The exception.
     * @return void
     */
    protected function handleUnexpectedException(ExceptionEvent $event, Throwable $ex): void {

    }

    /**
     * On kernel exception.
     *
     * @param ExceptionEvent $event The event.
     * @return ExceptionEvent Returns the event.
     */
    public function onKernelException(ExceptionEvent $event): ExceptionEvent {

        $ex = $event->getThrowable();

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
     * @param RequestEvent $event The event.
     * @return RequestEvent Returns the event.
     */
    public function onKernelRequest(RequestEvent $event): RequestEvent {

        $this->setRequest($event->getRequest());

        // Register the theme providers.
        $this->getThemeManager()->addGlobal();

        return $event;
    }
}
