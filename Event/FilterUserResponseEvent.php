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
use WBW\Bundle\CoreBundle\Model\UserInterface;

/**
 * Filter user response event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Event
 */
class FilterUserResponseEvent extends UserEvent {

    use ResponseTrait;

    /**
     * Constructor.
     *
     * @param UserInterface $user The user.
     * @param Request $request The request.
     * @param Response $response The response.
     */
    public function __construct(UserInterface $user, Request $request, Response $response) {
        parent::__construct($user, $request);

        $this->setResponse($response);
    }
}