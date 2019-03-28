<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

use Twig\Environment;

/**
 * Twig environment trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait TwigEnvironmentTrait {

    /**
     * Twig environment.
     *
     * @var Environment
     */
    private $twigEnvironment;

    /**
     * Get the Twig environment.
     *
     * @return Environment Returns the Twig environment.
     */
    public function getTwigEnvironment() {
        return $this->twigEnvironment;
    }

    /**
     * Set the Twig environment.
     *
     * @param Environment|null $twigEnvironment The Twig environment.
     */
    protected function setTwigEnvironment(Environment $twigEnvironment = null) {
        $this->twigEnvironment = $twigEnvironment;
        return $this;
    }
}
