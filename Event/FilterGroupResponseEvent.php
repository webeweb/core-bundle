<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Event;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use WBW\Bundle\CoreBundle\Component\HttpFoundation\ResponseTrait;
use WBW\Bundle\CoreBundle\Model\GroupInterface;

/**
 * Filter group response event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Event
 */
class FilterGroupResponseEvent extends GroupEvent {

    use ResponseTrait;

    /**
     * Constructor.
     *
     * @param GroupInterface $group The group.
     * @param Request $request The request.
     * @param Response $response The response.
     */
    public function __construct(GroupInterface $group, Request $request, Response $response) {
        parent::__construct($group, $request);

        $this->setResponse($response);
    }
}
