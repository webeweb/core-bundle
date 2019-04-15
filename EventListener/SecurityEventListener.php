<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\EventListener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Translation\TranslatorInterface;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\Event\NotificationEvents;
use WBW\Bundle\CoreBundle\Notification\NotificationFactory;
use WBW\Bundle\CoreBundle\Service\TranslatorTrait;

/**
 * Security event listener.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\EventListener
 */
class SecurityEventListener {

    use TranslatorTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.event_listener.security";

    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator The translator.
     */
    public function __construct(TranslatorInterface $translator) {
        $this->setTranslator($translator);
    }

    /**
     * On interactive login.
     *
     * @param InteractiveLoginEvent $event The event.
     * @return InteractiveLoginEvent Returns the event.
     */
    public function onInteractiveLogin(InteractiveLoginEvent $event) {

        $content = $this->getTranslator()->trans("notification.welcome");

        $notification = NotificationFactory::newDefaultNotification($content, "core-welcome");

        $eventListener = new NotificationEventListener($event->getRequest()->getSession());
        $eventListener->onNotify(new NotificationEvent(NotificationEvents::NOTIFICATION_SUCCESS, $notification));

        return $event;
    }
}
