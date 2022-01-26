<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests;

use Closure;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouterInterface;

/**
 * Test case helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests
 */
class TestCaseHelper {

    /**
     * Get the dispatch() method for an event dispatcher.
     *
     * @return Closure Returns the dispatch() method for an event dispatcher.
     */
    public static function getEventDispatcherDispatchFunction(): Closure {

        if (Kernel::VERSION_ID < 40300) {
            return function($eventName, $event) {
                return $event;
            };
        }

        return function($event, $eventName) {
            return $event;
        };
    }

    /**
     * Get the generate() method for a router.
     *
     * @return Closure Returns the generate() method for a router.
     */
    public static function getRouterGenerateFunction(): Closure {
        return function($name, array $parameters = [], $referenceType = RouterInterface::ABSOLUTE_PATH) {
            return $name;
        };
    }
}
