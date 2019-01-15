<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Event dispatcher trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait EventDispatcherTrait {

    /**
     * Event dispatcher.
     *
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * Get the event dispatcher.
     *
     * @return EventDispatcherInterface Returns the event dispatcher.
     */
    public function getEventDispatcher() {
        return $this->eventDispatcher;
    }

    /**
     * Set the event dispatcher.
     *
     * @param EventDispatcherInterface|null $eventDispatcher The event dispatcher.
     */
    protected function setEventDispatcher(EventDispatcherInterface $eventDispatcher = null) {
        $this->eventDispatcher = $eventDispatcher;
        return $this;
    }
}
