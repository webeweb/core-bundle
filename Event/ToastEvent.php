<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Event;

use WBW\Bundle\CoreBundle\Toast\ToastInterface;

/**
 * Toast event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Event
 */
class ToastEvent extends AbstractEvent {

    /**
     * Toast.
     *
     * @var ToastInterface
     */
    private $toast;

    /**
     * Constructor.
     *
     * @param string $eventName The event name.
     * @param ToastInterface $toast The toast.
     */
    public function __construct(string $eventName, ToastInterface $toast) {
        parent::__construct($eventName);

        $this->setToast($toast);
    }

    /**
     * Get the toast.
     *
     * @return ToastInterface Returns the toast.
     */
    public function getToast(): ToastInterface {
        return $this->toast;
    }

    /**
     * Set the toast.
     *
     * @param ToastInterface $toast The toast.
     * @return ToastEvent Returns this toast event.
     */
    protected function setToast(ToastInterface $toast): ToastEvent {
        $this->toast = $toast;
        return $this;
    }
}
