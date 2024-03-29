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

use DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Throwable;
use Twig\Environment;
use Twig\TwigFunction;
use WBW\Library\Symfony\Manager\JavascriptManager;
use WBW\Library\Symfony\Manager\JavascriptManagerTrait;
use WBW\Library\Symfony\Manager\StylesheetManager;
use WBW\Library\Symfony\Manager\StylesheetManagerTrait;
use WBW\Library\Symfony\Provider\JavascriptProviderInterface;
use WBW\Library\Symfony\Provider\StylesheetProviderInterface;

/**
 * Twig controller.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Controller
 */
class TwigController extends AbstractController {

    use JavascriptManagerTrait {
        setJavascriptManager as public;
    }
    use StylesheetManagerTrait {
        setStylesheetManager as public;
    }

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
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function functionAction(Request $request, string $name): Response {

        /** @var Environment $twig */
        $twig = $this->getTwig();

        $function = $twig->getFunction($name);
        if (false === ($function instanceof TwigFunction)) {
            return new JsonResponse([], 404);
        }

        $callable = $function->getCallable();

        $content = call_user_func_array([
            $callable[0],
            $callable[1],
        ], $request->get("args", []));

        return new JsonResponse(true === is_array($content) ? $content : [$content]);
    }

    /**
     * Get the last modified.
     *
     * @param string $view The view.
     * @return DateTime|null Returns the last modified.
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected function getLastModified(string $view): ?DateTime {

        $twig = $this->getTwig();
        if (null === $twig) {
            return null;
        }

        $path = $twig->getLoader()->getSourceContext($view)->getPath();
        $time = filemtime($path);
        if (false === $time) {
            return null;
        }

        return new DateTime("@$time");
    }

    /**
     * Resource.
     *
     * @param Request $request The request.
     * @param string $type The type.
     * @param string $name The name.
     * @return Response Returns the response.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function resourceAction(Request $request, string $type, string $name): Response {

        $resources   = [];
        $contentType = null;

        switch ($type) {

            case JavascriptProviderInterface::JAVASCRIPT_PROVIDER_EXTENSION:

                /** @var JavascriptManager $manager */
                $manager   = $this->getJavascriptManager();
                $resources = $manager->getJavascripts();

                $contentType = JavascriptProviderInterface::JAVASCRIPT_PROVIDER_CONTENT_TYPE;
                break;

            case StylesheetProviderInterface::STYLESHEET_PROVIDER_EXTENSION:

                /** @var StylesheetManager $manager */
                $manager   = $this->getStylesheetManager();
                $resources = $manager->getStylesheets();

                $contentType = StylesheetProviderInterface::STYLESHEET_PROVIDER_CONTENT_TYPE;
                break;
        }

        if (false === array_key_exists($name, $resources)) {
            throw $this->createNotFoundException();
        }

        $modified = $this->getLastModified($resources[$name]);
        if (null === $modified) {
            $modified = new DateTime();
        }

        $content = $this->renderView($resources[$name], $request->query->all());

        return new Response($content, 200, [
            "Content-Type"  => $contentType,
            "Last-Modified" => $modified->format("D, d M Y H:i:s T"),
        ]);
    }
}
