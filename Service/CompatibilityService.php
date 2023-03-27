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
use WBW\Bundle\CoreBundle\DependencyInjection\Container\ContainerTrait;

/**
 * Compatibility service.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Service
 */
class CompatibilityService implements CompatibilityServiceInterface {

    use ContainerTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.service.compatibility";

    /**
     * Constructor.
     *
     * @param ContainerInterface $container The container.
     */
    public function __construct(ContainerInterface $container) {
        $this->setContainer($container);
    }

    /**
     * {@inheritdoc}
     */
    public function getSession(): ?SessionInterface {

        if (6 <= Kernel::MAJOR_VERSION) {
            return $this->getContainer()->get("request_stack")->getSession();
        }

        return $this->getContainer()->get("session");
    }
}
