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

use Throwable;
use WBW\Bundle\CoreBundle\Event\ToastEvent;
use WBW\Bundle\CoreBundle\Service\SymfonyBCServiceInterface;
use WBW\Bundle\CoreBundle\Service\SymfonyBCServiceTrait;

/**
 * Toast event listener.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\EventListener
 */
class ToastEventListener {

    use SymfonyBCServiceTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.event_listener.toast";

    /**
     * Constructor.
     *
     * @param SymfonyBCServiceInterface $symfonyBC The Symfony backward compatibility service.
     */
    public function __construct(SymfonyBCServiceInterface $symfonyBC) {
        $this->setSymfonyBCService($symfonyBC);
    }

    /**
     * On toast.
     *
     * @param ToastEvent $event The event.
     * @return ToastEvent Returns the event.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function onToast(ToastEvent $event): ToastEvent {
        $this->getSymfonyBCService()->getSession()->getFlashBag()->add($event->getToast()->getType(), $event->getToast()->getContent());
        return $event;
    }
}
