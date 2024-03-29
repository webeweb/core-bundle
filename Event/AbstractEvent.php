<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Event;

use Symfony\Contracts\EventDispatcher\Event as BaseEvent;

/**
 * Abstract event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Event
 * @abstract
 */
abstract class AbstractEvent extends BaseEvent {

    /**
     * Event name.
     *
     * @var string
     */
    private $eventName;

    /**
     * Constructor.
     *
     * @param string $eventName The event name.
     */
    protected function __construct(string $eventName) {
        $this->setEventName($eventName);
    }

    /**
     * Get the event name.
     *
     * @return string Returns the event name.
     */
    public function getEventName(): string {
        return $this->eventName;
    }

    /**
     * Set the event name.
     *
     * @param string $eventName The event name.
     * @return AbstractEvent Returns this event.
     */
    protected function setEventName(string $eventName): AbstractEvent {
        $this->eventName = $eventName;
        return $this;
    }
}
