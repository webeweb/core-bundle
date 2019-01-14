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

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\Service\SessionTrait;

/**
 * Notification event listener.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\EventListener
 */
class NotificationEventListener {

    use SessionTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.event_listener.notification";

    /**
     * Constructor.
     *
     * @param SessionInterface $session The session.
     */
    public function __construct(SessionInterface $session) {
        $this->setSession($session);
    }

    /**
     * On notify.
     *
     * @param NotificationEvent $event The notification event.
     * @return void
     */
    public function onNotify(NotificationEvent $event) {
        $this->getSession()->getFlashBag()->add($event->getNotification()->getType(), $event->getNotification()->getContent());
    }
}
