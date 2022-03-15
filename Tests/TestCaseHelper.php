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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests
 */
class TestCaseHelper {

    /**
     * Get dispatch() function for an event dispatcher.
     *
     * @return Closure Returns dispatch() function for an event dispatcher.
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
     * Get generate() function for a router.
     *
     * @return Closure Returns generate() function for a router.
     */
    public static function getRouterGenerateFunction(): Closure {
        return function($name, array $parameters = [], int $referenceType = RouterInterface::ABSOLUTE_PATH) {
            return $name;
        };
    }

    /**
     * Get a trans() function for a translator.
     *
     * @return Closure Returns the trans() function for a translator.
     */
    public static function getTranslatorTransFunction(): Closure {
        return function($id, array $parameters = [], string $domain = null, string $locale = null) {
            return $id;
        };
    }
}
