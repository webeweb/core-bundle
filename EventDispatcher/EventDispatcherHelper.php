<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\EventDispatcher;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * Event dispatcher helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\EventDispatcher
 */
class EventDispatcherHelper {

    /**
     * Dispatch an event.
     *
     * @param EventDispatcherInterface|null $eventDispatcher The event dispatcher.
     * @param string $eventName The event name.
     * @param Event $event The event.
     * @return Event Returns the event.
     */
    public static function dispatch(?EventDispatcherInterface $eventDispatcher, string $eventName, Event $event): Event {
        return null === $eventDispatcher ? $event : $eventDispatcher->dispatch($event, $eventName);
    }
}
