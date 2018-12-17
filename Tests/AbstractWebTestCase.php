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
     * {@inheritdoc}
     */
    protected static function getKernelClass() {
        require_once getcwd() . "/Tests/Fixtures/app/TestKernel.php";
        return TestKernel::class;
    }

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();

        // Initialize and boot the kernel.
        static::$kernel = static::createKernel();
        static::$kernel->boot();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown() {

        // Shutdown the kernel.
        static::$kernel->shutdown();
    }

}
