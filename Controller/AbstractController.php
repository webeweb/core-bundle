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
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\User\User;
use WBW\Bundle\CoreBundle\Asset\Notification\NotificationInterface;
use WBW\Bundle\CoreBundle\Asset\Toast\ToastInterface;
use WBW\Bundle\CoreBundle\Component\EventDispatcher\BaseEvent;
use WBW\Bundle\CoreBundle\Component\Translation\BaseTranslatorInterface;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\Event\ToastEvent;
use WBW\Bundle\CoreBundle\EventDispatcher\EventDispatcherHelper;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\Exception\BadUserRoleException;
use WBW\Bundle\CoreBundle\Helper\FormHelper;
use WBW\Bundle\CoreBundle\Helper\UserHelper;
use WBW\Bundle\CoreBundle\Repository\RepositoryHelper;

/**
 * Abstract controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Controller
 * @abstract
 */
abstract class AbstractController extends BaseController {

    /**
     * Dispatch an event.
     *
     * @param string $eventName The event name.
     * @param BaseEvent $event The event.
     * @return BaseEvent|null Returns the event in case of success, null otherwise.
     */
    protected function dispatchEvent(string $eventName, $event) {
        $this->getLogger()->debug(sprintf('A controller dispatch an event with name "%s"', $eventName), ["_controller" => get_class($this), "_event" => get_class($event)]);
        return EventDispatcherHelper::dispatch($this->getEventDispatcher(), $eventName, $event);
    }

    /**
     * Get the container.
     *
     * @return Container|null Returns the container in case of success, null otherwise.
     */
    protected function getContainer(): ?Container {
        return $this->get("service_container");
    }

    /**
     * Get the event dispatcher.
     *
     * @return EventDispatcherInterface|null Returns the event dispatcher in case of success, null otherwise.
     */
    protected function getEventDispatcher(): ?EventDispatcherInterface {
        return $this->get("event_dispatcher");
    }

    /**
     * Get the form helper.
     *
     * @return FormHelper|null Returns the form helper in case of success, null otherwise.
     */
    protected function getFormHelper(): ?FormHelper {
        return $this->get(FormHelper::SERVICE_NAME);
    }

    /**
     * Get the kernel event listener.
     *
     * @return KernelEventListener|null Returns the kernel event listener in case of success, null otherwise.
     */
    protected function getKernelEventListener(): ?KernelEventListener {
        return $this->get(KernelEventListener::SERVICE_NAME);
    }

    /**
     * Get the logger.
     *
     * @return LoggerInterface|null Returns the logger in case of success, null otherwise.
     */
    protected function getLogger(): ?LoggerInterface {
        return $this->get("logger");
    }

    /**
     * Get the repository helper.
     *
     * @return RepositoryHelper|null Returns the repository helper in case of success, null otherwise.
     */
    protected function getRepositoryHelper(): ?RepositoryHelper {
        return $this->get(RepositoryHelper::SERVICE_NAME);
    }

    /**
     * Get the router.
     *
     * @return RouterInterface|null Returns the router in case of success, null otherwise.
     */
    protected function getRouter(): ?RouterInterface {
        return $this->get("router");
    }

    /**
     * Get the session.
     *
     * @return SessionInterface|null Returns the session in case of success, null otherwise.
     */
    protected function getSession(): ?SessionInterface {
        return $this->get("session");
    }

    /**
     * Get the translator.
     *
     * @return BaseTranslatorInterface|null Returns the translator in case of success, null otherwise.
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
    protected function hasRolesOrRedirect(array $roles, bool $or, string $redirectUrl, string $originUrl = ""): bool {

        $user = $this->getKernelEventListener()->getUser();
        if (false === UserHelper::hasRoles($user, $roles, $or)) {

            // Throw a bad user role exception with an anonymous user if user is null.
            $user = null !== $user ? $user : new User("anonymous", "");
            throw new BadUserRoleException($user, $roles, $redirectUrl, $originUrl);
        }

        return true;
    }

    /**
     * Notify.
     *
     * @param string $eventName The event name.
     * @param NotificationInterface $notification The notification.
     * @return NotificationEvent|null Returns the event in case of success, null otherwise.
     */
    protected function notify(string $eventName, NotificationInterface $notification): ?NotificationEvent {
        return $this->dispatchEvent($eventName, new NotificationEvent($eventName, $notification));
    }

    /**
     * Toast.
     *
     * @param string $eventName The event name.
     * @param ToastInterface $toast The toast.
     * @return ToastEvent|null Returns the event in case of success, null otherwise.
     */
    protected function toast(string $eventName, ToastInterface $toast): ?ToastEvent {
        return $this->dispatchEvent($eventName, new ToastEvent($eventName, $toast));
    }

    /**
     * Translate.
     *
     * @param string $id The id.
     * @param array $parameters The parameters.
     * @param string|null $domain The domain.
     * @param string|null $locale The locale.
     * @return string Returns the translation in case of success, $id otherwise.
     */
    protected function translate(string $id, array $parameters = [], string $domain = null, string $locale = null): string {
        return $this->getTranslator()->trans($id, $parameters, $domain, $locale);
    }
}
