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

use Throwable;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\Service\SymfonyBCServiceInterface;
use WBW\Bundle\CoreBundle\Service\SymfonyBCServiceTrait;

/**
 * Notification event listener.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\EventListener
 */
class NotificationEventListener {

    use SymfonyBCServiceTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.event_listener.notification";

    /**
     * Constructor.
     *
     * @param SymfonyBCServiceInterface $symfonyBC The Symfony backward compatibility service.
     */
    public function __construct(SymfonyBCServiceInterface $symfonyBC) {
        $this->setSymfonyBCService($symfonyBC);
    }

    /**
     * On notify.
     *
     * @param NotificationEvent $event The event.
     * @return NotificationEvent Returns the event.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function onNotify(NotificationEvent $event): NotificationEvent {
        $this->getSymfonyBCService()->getSession()->getFlashBag()->add($event->getNotification()->getType(), $event->getNotification()->getContent());
        return $event;
    }
}
