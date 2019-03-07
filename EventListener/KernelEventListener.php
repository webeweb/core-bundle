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
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\CoreBundle\Exception\BadUserRoleException;
use WBW\Bundle\CoreBundle\Exception\RedirectResponseException;
use WBW\Bundle\CoreBundle\Manager\ThemeManager;
use WBW\Bundle\CoreBundle\Manager\ThemeManagerTrait;
use WBW\Bundle\CoreBundle\Model\RequestTrait;
use WBW\Bundle\CoreBundle\Model\UserTrait;
use WBW\Bundle\CoreBundle\Service\TokenStorageTrait;

/**
 * Kernel event listener.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\EventListener
 */
class KernelEventListener {

    use RequestTrait;
    use ThemeManagerTrait;
    use TokenStorageTrait;
    use UserTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.event_listener.kernel";

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
    public function getUser() {
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
     * @param GetResponseForExceptionEvent $event The event.
     * @param BadUserRoleException $ex The exception.
     * @return GetResponseForExceptionEvent Returns the event.
     */
    protected function handleBadUserRoleException(GetResponseForExceptionEvent $event, BadUserRoleException $ex) {
        if (null !== $ex->getRedirectUrl()) {
            $event->setResponse(new RedirectResponse($ex->getRedirectUrl()));
        }
        return $event;
    }

    /**
     * Handle a redirect response exception.
     *
     * @param GetResponseForExceptionEvent $event The event.
     * @param RedirectResponseException $ex The exception.
     * @return GetResponseForExceptionEvent Returns the event.
     */
    protected function handleRedirectResponseException(GetResponseForExceptionEvent $event, RedirectResponseException $ex) {
        if (null !== $ex->getRedirectUrl()) {
            $event->setResponse(new RedirectResponse($ex->getRedirectUrl()));
        }
        return $event;
    }

    /**
     * On kernel exception.
     *
     * @param GetResponseForExceptionEvent $event The event.
     * @return GetResponseForExceptionEvent Returns the event.
     */
    public function onKernelException(GetResponseForExceptionEvent $event) {

        $ex = $event->getException();

        // Handle the exception.
        if (true === ($ex instanceof BadUserRoleException)) {
            $this->handleBadUserRoleException($event, $ex);
        }
        if (true === ($ex instanceof RedirectResponseException)) {
            $this->handleRedirectResponseException($event, $ex);
        }

        return $event;
    }

    /**
     * On kernel request.
     *
     * @param GetResponseEvent $event The event.
     * @return GetResponseEvent Returns the event.
     */
    public function onKernelRequest(GetResponseEvent $event) {

        $this->setRequest($event->getRequest());

        // Register the theme providers.
        $this->getThemeManager()->addGlobal();

        return $event;
    }
}
