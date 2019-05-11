<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Controller;

use Symfony\Component\HttpFoundation\Response;
use WBW\Bundle\CoreBundle\Controller\AbstractController;

/**
 * Test layout controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Controller
 */
class TestLayoutController extends AbstractController {

    /**
     * Displays an email template.
     *
     * @return Response Returns the response.
     */
    public function emailAction() {
        return $this->render("@WBWCore/email/layout.html.twig");
    }

    /**
     * Displays a javascripts template.
     *
     * @return Response Returns the response.
     */
    public function javascriptsAction() {
        return $this->render("@WBWCore/layout/javascripts.html.twig");
    }

    /**
     * Displays a stylesheets template.
     *
     * @return Response Returns the response.
     */
    public function stylesheetsAction() {
        return $this->render("@WBWCore/layout/stylesheets.html.twig");
    }
}
