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
     * Get the dispatch() method for an EventDispatcher.
     *
     * @return Closure Returns the dispatch() method for an EventDispatcher.
     */
    public static function getEventDispatcherDispatchFunction(): Closure {

        $dispatchFunction = function($event, $eventName) {
            return $event;
        };

        if (Kernel::VERSION_ID < 40300) {
            $dispatchFunction = function($eventName, $event) {
                return $event;
            };
        }

        return $dispatchFunction;
    }

    /**
     * Get the generate() method for a Router.
     *
     * @return Closure Returns the generate() method for a Router.
     */
    public static function getRouterGenerateFunction(): Closure {
        return function($name, array $parameters = [], $referenceType = RouterInterface::ABSOLUTE_PATH) {
            return $name;
        };
    }
}
