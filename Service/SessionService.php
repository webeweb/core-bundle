<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Kernel;
use Throwable;
use WBW\Bundle\CoreBundle\DependencyInjection\Container\ContainerTrait;

/**
 * Session service.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Service
 */
class SessionService {

    use ContainerTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.service.session";

    /**
     * Constructor.
     *
     * @param ContainerInterface $container The container.
     */
    public function __construct(ContainerInterface $container) {
        $this->setContainer($container);
    }

    /**
     * Get the sessions.
     *
     * @return SessionInterface|null Returns the session.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function getSession(): ?SessionInterface {

        if (Kernel::MAJOR_VERSION < 6) {
            return $this->getContainer()->get("session");
        }

        return $this->getContainer()->get("request_stack")->getSession();
    }
}
