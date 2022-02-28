<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Controller;

use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\TwigFunction;

/**
 * Twig controller.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Controller
 */
class TwigController extends AbstractController {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.controller.twig";

    /**
     * Function.
     *
     * @param Request $request The request.
     * @param string $name The name.
     * @return Response Returns the response.
     */
    public function functionAction(Request $request, string $name): Response {

        /** @var Environment $twig */
        $twig = $this->get("twig");

        $function = $twig->getFunction($name);
        if (false === ($function instanceof TwigFunction)) {
            return new JsonResponse([], 500);
        }

        $callable = $function->getCallable();

        try {

            $content = call_user_func_array([
                $callable[0],
                $callable[1],
            ], $request->get("args", []));

            return new JsonResponse(true === is_array($content) ? $content : [$content]);
        } catch (Exception $ex) {
            return new JsonResponse([], 500);
        }
    }
}
