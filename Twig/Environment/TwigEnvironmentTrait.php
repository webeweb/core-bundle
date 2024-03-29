<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Environment;

use Twig\Environment;

/**
 * Twig environment trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Environment
 */
trait TwigEnvironmentTrait {

    /**
     * Twig environment.
     *
     * @var Environment|null
     */
    private $twigEnvironment;

    /**
     * Get the Twig environment.
     *
     * @return Environment|null Returns the Twig environment.
     */
    public function getTwigEnvironment(): ?Environment {
        return $this->twigEnvironment;
    }

    /**
     * Set the Twig environment.
     *
     * @param Environment|null $twigEnvironment The Twig environment.
     * @return self Returns this instance.
     */
    protected function setTwigEnvironment(?Environment $twigEnvironment): self {
        $this->twigEnvironment = $twigEnvironment;
        return $this;
    }
}
