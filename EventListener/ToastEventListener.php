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

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use WBW\Bundle\CoreBundle\Component\HttpFoundation\Session\SessionTrait;
use WBW\Bundle\CoreBundle\Event\ToastEvent;

/**
 * Toast event listener.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\EventListener
 */
class ToastEventListener {

    use SessionTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.event_listener.toast";

    /**
     * Constructor.
     *
     * @param SessionInterface $session The session.
     */
    public function __construct(SessionInterface $session) {
        $this->setSession($session);
    }

    /**
     * On toast.
     *
     * @param ToastEvent $event The event.
     * @return ToastEvent Returns the event.
     */
    public function onToast(ToastEvent $event): ToastEvent {
        if (true === ($this->getSession() instanceof Session)) {
            $this->getSession()->getFlashBag()->add($event->getToast()->getType(), $event->getToast()->getContent());
        }
        return $event;
    }
}
