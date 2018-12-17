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
 * Kernel event listener trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\EventListener
 */
trait KernelEventListenerTrait {

    /**
     * Kernel event listener.
     *
     * @var KernelEventListener
     */
    private $KernelEventListener;

    /**
     * Get the kernel event listener.
     *
     * @return KernelEventListener Returns the kernel event listener.
     */
    public function getKernelEventListener() {
        return $this->KernelEventListener;
    }

    /**
     * Set the kernel event listener.
     *
     * @param KernelEventListener $kernelEventListener The kernel event listener.
     */
    protected function setKernelEventListener(KernelEventListener $kernelEventListener = null) {
        $this->KernelEventListener = $kernelEventListener;
        return $this;
    }

}
