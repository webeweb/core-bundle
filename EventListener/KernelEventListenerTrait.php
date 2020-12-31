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
     * @var KernelEventListener|null
     */
    private $kernelEventListener;

    /**
     * Get the kernel event listener.
     *
     * @return KernelEventListener|null Returns the kernel event listener.
     */
    public function getKernelEventListener(): ?KernelEventListener {
        return $this->kernelEventListener;
    }

    /**
     * Set the kernel event listener.
     *
     * @param KernelEventListener|null $kernelEventListener The kernel event listener.
     */
    protected function setKernelEventListener(?KernelEventListener $kernelEventListener): self {
        $this->kernelEventListener = $kernelEventListener;
        return $this;
    }
}
