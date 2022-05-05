<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Abstract kernel.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests
 * @abstract
 */
abstract class AbstractKernel extends Kernel {

    /**
     * {@inheritdoc}
     */
    public function getCacheDir(): string {
        return getcwd() . "/Tests/Fixtures/app/var/cache";
    }

    /**
     * {@inheritdoc}
     */
    public function getLogDir(): string {
        return getcwd() . "/Tests/Fixtures/app/var/logs";
    }

    /**
     * {@inheritdoc}
     */
    public function getProjectDir(): string {
        return getcwd() . "/Tests/Fixtures/app";
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader): void {
        $loader->load(getcwd() . "/Tests/Fixtures/app/config/config_test.yml");
    }
}
