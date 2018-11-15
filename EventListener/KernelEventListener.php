<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\EventListener;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\CoreBundle\Exception\BadUserRoleException;
use WBW\Bundle\CoreBundle\Exception\RedirectResponseException;
use WBW\Bundle\CoreBundle\Manager\ThemeManager;
use WBW\Bundle\CoreBundle\Service\TokenStorageTrait;

/**
 * Kernel event listener.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\EventListener
 */
class KernelEventListener {

    use TokenStorageTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.event_listener.kernel";

    /**
     * Request.
     *
     * @var Request
     */
    protected static $request;

    /**
     * Theme manager.
     *
     * @var ThemeManager
     */
    private $themeManager;

    /**
     * User.
     *
     * @var UserInterface
     */
    private $user;

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
     * Get the theme manager.
     *
     * @return ThemeManager Returns the theme manager.
     */
    public function getThemeManager() {
        return $this->themeManager;
    }

    /**
     * Get the request.
     *
     * @return Request Returns the request.
     */
    public function getRequest() {
        return self::$request;
    }

    /**
     * Get the current user.
     *
     * @return UserInterface Returns the current user in case of success, null otherwise.
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
     * @return GetResponseForExceptionEvent Return the event.
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
     * @return GetResponseForExceptionEvent Return the event.
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
     * @return Event Returns the event.
     */
    public function onKernelException(GetResponseForExceptionEvent $event) {

        // Get the exception.
        $ex = $event->getException();

        // Handle the exception.
        if (true === ($ex instanceOf BadUserRoleException)) {
            $this->handleBadUserRoleException($event, $ex);
        }
        if (true === ($ex instanceOf RedirectResponseException)) {
            $this->handleRedirectResponseException($event, $ex);
        }

        // Return the event.
        return $event;
    }

    /**
     * On kernel request.
     *
     * @param GetResponseEvent $event The event.
     * @return void
     */
    public function onKernelRequest(GetResponseEvent $event) {

        // Initialize the request.
        $this->setRequest($event->getRequest());

        // Register the providers.
        $this->getThemeManager()->addGlobal();
    }

    /**
     * Set the theme manager.
     *
     * @param ThemeManager $themeManager The theme manager.
     * @return KernelEventListener Returns this kernel event listener.
     */
    protected function setThemeManager(ThemeManager $themeManager) {
        $this->themeManager = $themeManager;
        return $this;
    }

    /**
     * Set the request.
     *
     * @param Request $request The request.
     * @return KernelEventListener Returns this kernel event listener.
     */
    protected function setRequest(Request $request) {
        self::$request = $request;
        return $this;
    }

}
