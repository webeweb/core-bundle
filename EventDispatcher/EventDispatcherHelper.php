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
     * @param Event $event The event.
     * @param string|null $eventName The event name.
     * @return Event Returns the event.
     */
    public static function dispatch(?EventDispatcherInterface $eventDispatcher, Event $event, string $eventName = null): Event {
        return null === $eventDispatcher ? $event : $eventDispatcher->dispatch($event, $eventName);
    }
}
