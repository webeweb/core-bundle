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

use Symfony\Component\DependencyInjection\ContainerInterface;
use Twig\Environment;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\DependencyInjection\Container\ContainerTrait;

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
     * @param Environment $twigEnvironment The Twig environment.
     * @param ContainerInterface $container The container.
     */
    public function __construct(Environment $twigEnvironment, ContainerInterface $container) {
        parent::__construct($twigEnvironment);

        $this->setContainer($container);
    }

    /**
     * Call a native function.
     *
     * @param string|null $function The function.
     * @param array $arguments The arguments.
     * @return mixed|null Returns the native method result.
     */
    public function coreNativeMethodFunction(?string $function, array $arguments = []) {

        if (null === $function || false === function_exists($function)) {
            return null;
        }

        return call_user_func_array($function, $arguments);
    }

    /**
     * Call a static method.
     *
     * @param string|null $classname The classname.
     * @param string|null $method The method.
     * @param array $arguments The arguments.
     * @return mixed|null Returns the static method result.
     */
    public function coreStaticMethodFunction(?string $classname, ?string $method, array $arguments = []) {

        if (null === $classname || null === $method || false === method_exists($classname, $method)) {
            return null;
        }

        return call_user_func_array("$classname::$method", $arguments);
    }

    /**
     * Get a container parameter.
     *
     * @param string $name The name.
     * @return array|bool|string|int|float|null Returns the container parameter in case of success, null otherwise.
     */
    public function getContainerParameterFunction(string $name) {
        return $this->getContainer()->getParameter($name);
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {

        return [
            new TwigFunction("getContainerParameter", [$this, "getContainerParameterFunction"]),
            new TwigFunction("coreNativeMethod", [$this, "coreNativeMethodFunction"]),
            new TwigFunction("coreStaticMethod", [$this, "coreStaticMethodFunction"]),
        ];
    }
}
