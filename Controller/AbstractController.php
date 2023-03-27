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

use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as BaseController;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Contracts\EventDispatcher\Event;
use Symfony\Contracts\Translation\TranslatorInterface;
use Throwable;
use Twig\Environment;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\Event\ToastEvent;
use WBW\Bundle\CoreBundle\EventDispatcher\EventDispatcherHelper;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\Exception\BadUserRoleException;
use WBW\Bundle\CoreBundle\Helper\FormHelper;
use WBW\Bundle\CoreBundle\Model\User;
use WBW\Bundle\CoreBundle\Security\Core\User\UserHelper;
use WBW\Library\Symfony\Assets\NotificationInterface;
use WBW\Library\Symfony\Assets\ToastInterface;
use WBW\Library\Symfony\Response\DefaultJsonResponseData;
use WBW\Library\Symfony\Response\DefaultJsonResponseDataInterface;

/**
 * Abstract controller.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Controller
 * @abstract
 */
abstract class AbstractController extends BaseController {

    /**
     * Dispatch an event.
     *
     * @param string $eventName The event name.
     * @param Event $event The event.
     * @return Event|null Returns the event.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function dispatchEvent(string $eventName, Event $event): Event {

        $this->getLogger()->debug(sprintf('A controller dispatch an event with name "%s"', $eventName), [
            "_controller" => get_class($this),
            "_event"      => get_class($event),
        ]);

        return EventDispatcherHelper::dispatch($this->getEventDispatcher(), $eventName, $event);
    }

    /**
     * Get the container.
     *
     * @return ContainerInterface|null Returns the container.
     */
    protected function getContainer(): ?ContainerInterface {
        return $this->container;
    }

    /**
     * Get the entity manager.
     *
     * @return EntityManagerInterface|null Returns the entity manager.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function getEntityManager(): ?EntityManagerInterface {
        return $this->container->get("doctrine.orm.entity_manager");
    }

    /**
     * Get the event dispatcher.
     *
     * @return EventDispatcherInterface|null Returns the event dispatcher.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function getEventDispatcher(): ?EventDispatcherInterface {
        return $this->container->get("event_dispatcher");
    }

    /**
     * Get the form helper.
     *
     * @return FormHelper|null Returns the form helper.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function getFormHelper(): ?FormHelper {
        return $this->container->get(FormHelper::SERVICE_NAME);
    }

    /**
     * Get the kernel event listener.
     *
     * @return KernelEventListener|null Returns the kernel event listener.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function getKernelEventListener(): ?KernelEventListener {
        return $this->container->get(KernelEventListener::SERVICE_NAME);
    }

    /**
     * Get the logger.
     *
     * @return LoggerInterface|null Returns the logger.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function getLogger(): ?LoggerInterface {
        return $this->container->get("logger");
    }

    /**
     * Get the mailer.
     *
     * @return MailerInterface|null Returns the mailer.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function getMailer(): ?MailerInterface {
        return $this->container->get("mailer");
    }

    /**
     * Get the router.
     *
     * @return RouterInterface|null Returns the router.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function getRouter(): ?RouterInterface {
        return $this->container->get("router");
    }

    /**
     * Get the session.
     *
     * @return SessionInterface|null Returns the session.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function getSession(): ?SessionInterface {
        return $this->container->get("session");
    }

    /**
     * Get the translator.
     *
     * @return TranslatorInterface|null Returns the translator.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function getTranslator() {
        return $this->container->get("translator");
    }

    /**
     * Get Twig.
     *
     * @return Environment|null Returns Twig.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function getTwig(): ?Environment {
        return $this->container->get("twig");
    }

    /**
     * Determines if the connected user have roles or redirect.
     *
     * @param array $roles The roles.
     * @param bool $or OR ?
     * @param string $redirectUrl The redirect URL.
     * @param string $originUrl The origin URL.
     * @return bool Returns true.
     * @throws Throwable Throws an exception if an error occurs.
     * @throws BadUserRoleException Throws a bad user role exception.
     */
    protected function hasRolesOrRedirect(array $roles, bool $or, string $redirectUrl, string $originUrl = ""): bool {

        $user = $this->getKernelEventListener()->getUser();
        if (false === UserHelper::hasRoles($user, $roles, $or)) {

            // Throw a bad user role exception with an anonymous user if user is null.
            $user = null === $user ? new User("anonymous", "") : $user;
            throw new BadUserRoleException($user, $roles, $redirectUrl, $originUrl);
        }

        return true;
    }

    /**
     * Creates a default JSON response data.
     *
     * @param bool $success The success.
     * @param array $data The data.
     * @param string|null $message The message.
     * @return DefaultJsonResponseDataInterface Returns the default JSON response data.
     */
    protected function newDefaultJsonResponseData(bool $success, array $data, string $message = null): DefaultJsonResponseDataInterface {

        $model = new DefaultJsonResponseData();
        $model->setSuccess($success);
        $model->setData($data);
        $model->setMessage($message);

        return $model;
    }

    /**
     * Notify.
     *
     * @param string $eventName The event name.
     * @param NotificationInterface $notification The notification.
     * @return NotificationEvent|null Returns the event.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function notify(string $eventName, NotificationInterface $notification): ?NotificationEvent {
        return $this->dispatchEvent($eventName, new NotificationEvent($eventName, $notification));
    }

    /**
     * Toast.
     *
     * @param string $eventName The event name.
     * @param ToastInterface $toast The toast.
     * @return ToastEvent|null Returns the event.
     * @throws Throwable Throws an exception if an error occurs.
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
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function translate(string $id, array $parameters = [], string $domain = null, string $locale = null): string {
        return $this->getTranslator()->trans($id, $parameters, $domain, $locale);
    }
}
