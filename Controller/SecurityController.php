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

use RuntimeException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use WBW\Bundle\CoreBundle\Component\Security\Csrf\CsrfTokenManagerTrait;

/**
 * Security controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Controller
 */
class SecurityController extends AbstractController {

    use CsrfTokenManagerTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.controller.security";

    /**
     * SecurityController constructor.
     *
     * @param CsrfTokenManagerInterface $csrfTokenManager The CSRF token manager.
     */
    public function __construct(CsrfTokenManagerInterface $csrfTokenManager) {
        $this->setCsrfTokenManager($csrfTokenManager);
    }

    /**
     * Check action.
     *
     * @throws RuntimeException Throws a runtime exception.
     */
    public function checkAction() {
        throw new RuntimeException("You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.");
    }

    /**
     * Login action.
     *
     * @param Request $request The request.
     * @return Response Returns the response.
     */
    public function loginAction(Request $request): Response {

        $session = $request->getSession();

        $lastUsername = (null === $session) ? "" : $session->get(Security::LAST_USERNAME);
        $error        = null;

        $authErrorKey = Security::AUTHENTICATION_ERROR;
        if ($request->attributes->has($authErrorKey)) {

            $error = $request->attributes->get($authErrorKey);
        } else if (null !== $session && $session->has($authErrorKey)) {

            $error = $session->get($authErrorKey);
            $session->remove($authErrorKey);
        }

        if (false === ($error instanceof AuthenticationException)) {
            $error = null;
        }

        return $this->render("@WBWCore/Security/login.html.twig", [
            "last_username" => $lastUsername,
            "error"         => $error,
            "csrf_token"    => null,
        ]);
    }

    /**
     * Logout action.
     *
     * @throws RuntimeException Throws a runtime exception.
     */
    public function logoutAction() {
        throw new RuntimeException("You must activate the logout in your security firewall configuration.");
    }
}
