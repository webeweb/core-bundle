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

/**
 * Toast event listener trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\EventListener
 */
trait ToastEventListenerTrait {

    /**
     * Toast event listener.
     *
     * @var ToastEventListener
     */
    private $toastEventListener;

    /**
     * Get the Toast event listener.
     *
     * @return ToastEventListener Returns the toast event listener.
     */
    public function getToastEventListener() {
        return $this->toastEventListener;
    }

    /**
     * Set the toast event listener.
     *
     * @param ToastEventListener|null $toastEventListener The toast event listener.
     */
    protected function setToastEventListener(ToastEventListener $toastEventListener = null) {
        $this->toastEventListener = $toastEventListener;
        return $this;
    }
}
