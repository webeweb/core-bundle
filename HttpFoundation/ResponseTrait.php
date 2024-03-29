<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\HttpFoundation;

use Symfony\Component\HttpFoundation\Response;

/**
 * Response trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\HttpFoundation
 */
trait ResponseTrait {

    /**
     * Response.
     *
     * @var Response|null
     */
    private $response;

    /**
     * Get the response.
     *
     * @return Response|null Returns the response.
     */
    public function getResponse(): ?Response {
        return $this->response;
    }

    /**
     * Set the response.
     *
     * @param Response|null $response The response.
     * @return self Returns this instance.
     */
    protected function setResponse(?Response $response): self {
        $this->response = $response;
        return $this;
    }
}
