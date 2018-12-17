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

use Symfony\Component\HttpFoundation\Request;

/**
 * Request trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model
 */
trait RequestTrait {

    /**
     * Request.
     *
     * @var Request
     */
    private $request;

    /**
     * Get the request.
     *
     * @return Request Returns the request.
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * Set the request.
     *
     * @param Request $request The request.
     */
    protected function setRequest(Request $request) {
        $this->request = $request;
        return $this;
    }

}
