<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Translation\TranslatorInterface;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\Exception\BadUserRoleException;
use WBW\Bundle\CoreBundle\Helper\UserHelper;
use WBW\Bundle\CoreBundle\Notification\NotificationInterface;

/**
 * Abstract controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Controller
 * @abstract
 */
abstract class AbstractController extends Controller {

    /**
     * Get the container.
     *
     * @return Container Returns the container.
     */
    protected function getContainer() {
        return $this->get("service_container");
    }

    /**
     * Get the event dispatcher.
     *
     * @return EventDispatcherInterface Returns the event dispatcher.
     */
    protected function getEventDispatcher() {
        return $this->get("event_dispatcher");
    }

    /**
     * Get the kernel event listener.
     *
     * @return KernelEventListener Returns the kernel event listener.
     */
    protected function getKernelEventListener() {
        return $this->get(KernelEventListener::SERVICE_NAME);
    }

    /**
     * Get the logger.
     *
     * @return LoggerInterface Returns the logger.
     */
    protected function getLogger() {
        return $this->get("logger");
    }

    /**
     * Get the router.
     *
     * @return RouterInterface Returns the router.
     */
    protected function getRouter() {
        return $this->get("router");
    }

    /**
     * Get the session.
     *
     * @return SessionInterface Returns the session.
     */
    protected function getSession() {
        return $this->get("session");
    }

    /**
     * Get the translator.
     *
     * @return TranslatorInterface Returns the translator.
     */
    protected function getTranslator() {
        return $this->get("translator");
    }

    /**
     * Determines if the connected user have roles or redirect.
     *
     * @param array $roles The roles.
     * @param bool $or OR ?
     * @param string $redirectUrl The redirect URL.
     * @param string $originUrl The origin URL.
     * @return bool Returns true.
     * @throws BadUserRoleException Throws a bad user role exception.
     */
    protected function hasRolesOrRedirect(array $roles, $or, $redirectUrl, $originUrl = "") {

        // Get the user.
        $user = $this->getKernelEventListener()->getUser();

        // User have roles ?
        if (false === UserHelper::hasRoles($user, $roles, $or)) {

            // Throw a bad user role exception with an anonymous user if user is null.
            $user = null !== $user ? $user : new User("anonymous", "");
            throw new BadUserRoleException($user, $roles, $redirectUrl, $originUrl);
        }

        // Return
        return true;
    }

    /**
     * Notify.
     *
     * @param string $eventName The event name.
     * @param NotificationInterface $notification The notification.
     * @return Event Returns the event.
     */
    protected function notify($eventName, NotificationInterface $notification) {

        // Get and check the event dispatcher.
        $eventDispatcher = $this->getEventDispatcher();
        if (null === $eventDispatcher || false === $eventDispatcher->hasListeners($eventName)) {
            return null;
        }

        // Log a debug trace.
        $this->getLogger()->debug(sprintf("Core controller dispatch a notification event with name \"%s\"", $eventName));

        // Dispatch the event.
        return $eventDispatcher->dispatch($eventName, new NotificationEvent($eventName, $notification));
    }

}
