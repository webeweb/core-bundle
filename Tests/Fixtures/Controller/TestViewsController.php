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

use RuntimeException;
use Symfony\Component\HttpFoundation\Response;
use WBW\Bundle\CoreBundle\Controller\AbstractController;

/**
 * Test views controller.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Controller
 */
class TestViewsController extends AbstractController {

    /**
     * Render assets/_javascripts.html.twig
     *
     * @return Response Returns the response.
     */
    public function assetsJavascriptsAction(): Response {
        return $this->render("@WBWCore/assets/_javascripts.html.twig");
    }

    /**
     * Render assets/_stylesheets.html.twig
     *
     * @return Response Returns the response.
     */
    public function assetsStylesheetsAction(): Response {
        return $this->render("@WBWCore/assets/_stylesheets.html.twig");
    }

    /**
     * Render email/layout.html.twig
     *
     * @return Response Returns the response.
     */
    public function emailLayoutAction(): Response {
        return $this->render("@WBWCore/email/layout.html.twig");
    }

    /**
     * Throws an exception.
     *
     * @return Response Returns the response.
     */
    public function kernelExceptionAction(): Response {
        throw new RuntimeException();
    }
}
