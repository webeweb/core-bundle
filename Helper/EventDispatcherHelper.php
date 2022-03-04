<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Helper;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpKernel\Kernel;
use WBW\Bundle\CoreBundle\Component\EventDispatcher\BaseEvent;

/**
 * Event dispatcher helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Helper
 */
class EventDispatcherHelper {

    /**
     * Dispatch an event.
     *
     * @param EventDispatcherInterface|null $eventDispatcher The event dispatcher.
     * @param string $eventName The event name.
     * @param BaseEvent $event The event.
     * @return BaseEvent|null Returns the event in case of success, null otherwise.
     */
    public static function dispatch(?EventDispatcherInterface $eventDispatcher, string $eventName, $event) {

        if (null === $eventDispatcher || false === $eventDispatcher->hasListeners($eventName)) {
            return null;
        }

        if (Kernel::VERSION_ID < 40300) {
            return $eventDispatcher->dispatch($eventName, $event);
        }

        return $eventDispatcher->dispatch($event, $eventName);
    }
}
