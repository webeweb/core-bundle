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

use WBW\Library\Symfony\Assets\Toast\ToastInterface;
use WBW\Library\Symfony\Assets\Toast\ToastTrait;

/**
 * Toast event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Event
 */
class ToastEvent extends AbstractEvent {

    use ToastTrait;
    /**
     * Event "danger".
     *
     * @var string
     */
    const DANGER = "wbw.core.event.toast.danger";

    /**
     * Event "info".
     *
     * @var string
     */
    const INFO = "wbw.core.event.toast.info";

    /**
     * Event "success".
     *
     * @var string
     */
    const SUCCESS = "wbw.core.event.toast.success";

    /**
     * Event "warning".
     *
     * @var string
     */
    const WARNING = "wbw.core.event.toast.warning";


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
}
