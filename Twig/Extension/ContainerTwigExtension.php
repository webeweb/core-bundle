<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension;

use Symfony\Component\DependencyInjection\Container;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\DependencyInjection\ContainerTrait;

/**
 * Container Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
class ContainerTwigExtension extends AbstractTwigExtension {

    use ContainerTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.container";

    /**
     * Constructor.
     *
     * @param Container $container The container.
     */
    public function __construct(Container $container) {
        $this->setContainer($container);
    }

    /**
     * Get a container parameter.
     *
     * @param string $name The name.
     * @return mixed|null Returns the container parameter in case of success, null otherwise.
     */
    public function getContainerParameterFunction(string $name) {
        return $this->getContainer()->getParameter($name);
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {
        return [];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("getContainerParameter", [$this, "getContainerParameterFunction"]),
        ];
    }
}
