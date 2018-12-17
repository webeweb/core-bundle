<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model;

/**
 * Origin URL trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model
 */
trait OriginUrlTrait {

    /**
     * Origin URL.
     *
     * @var string
     */
    private $originUrl;

    /**
     * Get the origin URL.
     *
     * @return string Returns the origin URL.
     */
    public function getOriginUrl() {
        return $this->originUrl;
    }

    /**
     * Set the origin URL.
     *
     * @param string $originUrl The origin URL.
     */
    protected function setOriginUrl($originUrl) {
        $this->originUrl = $originUrl;
        return $this;
    }

}
