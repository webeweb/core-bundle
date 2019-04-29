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

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Filesystem\Filesystem;
use TestKernel;

/**
 * Abstract web test case.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests
 * @abstract
 */
abstract class AbstractWebTestCase extends WebTestCase {

    /**
     * {@inheritDoc}
     */
    protected static function getKernelClass() {
        require_once getcwd() . "/Tests/Fixtures/app/TestKernel.php";
        return TestKernel::class;
    }

    /**
     * {@inheritDoc}
     */
    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();

        static::$kernel = static::createKernel();

        // Clean the cache to avoid issues due to cache files.
        $filesystem = new Filesystem();
        $filesystem->remove(static::$kernel->getCacheDir());

        static::$kernel->boot();
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown() {
        static::$kernel->shutdown();
    }
}
