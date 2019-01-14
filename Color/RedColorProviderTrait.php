<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Color;

/**
 * Red color provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Color
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
     * @return RedColorProvider Returns the red color provider.
     */
    public function getRedColorProvider() {
        return $this->redColorProvider;
    }

    /**
     * Set the red color provider.
     *
     * @param RedColorProvider $redColorProvider The red color provider.
     */
    protected function setRedColorProvider(RedColorProvider $redColorProvider = null) {
        $this->redColorProvider = $redColorProvider;
        return $this;
    }
}
