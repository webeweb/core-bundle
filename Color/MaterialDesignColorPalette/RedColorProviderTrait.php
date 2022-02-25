<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette;

/**
 * Red color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Color\MaterialDesignColorPalette
 */
trait RedColorProviderTrait {

    /**
     * Red color provider.
     *
     * @var RedColorProvider
     */
    private $redColorProvider;

    /**
     * Get the red color provider.
     *
     * @return RedColorProvider|null Returns the red color provider.
     */
    public function getRedColorProvider(): ?RedColorProvider {
        return $this->redColorProvider;
    }

    /**
     * Set the red color provider.
     *
     * @param RedColorProvider|null $redColorProvider The red color provider.
     * @return self Returns this instance.
     */
    protected function setRedColorProvider(?RedColorProvider $redColorProvider): self {
        $this->redColorProvider = $redColorProvider;
        return $this;
    }
}
