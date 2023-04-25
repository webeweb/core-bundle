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

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\EventDispatcher\Event;

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
     * @return callable Returns dispatch() function for an event dispatcher.
     */
    public static function getEventDispatcherDispatchFunction(): callable {

        return function(Event $event, string $eventName = null): Event {
            return $event;
        };
    }

    /**
     * Get generate() function for a router.
     *
     * @return callable Returns generate() function for a router.
     */
    public static function getRouterGenerateFunction(): callable {

        return function($name, array $parameters = [], int $referenceType = UrlGeneratorInterface::ABSOLUTE_PATH) {
            return $name;
        };
    }

    /**
     * Get a trans() function for a translator.
     *
     * @return callable Returns the trans() function for a translator.
     */
    public static function getTranslatorTransFunction(): callable {

        return function($id, array $parameters = [], string $domain = null, string $locale = null): ?string {
            return $id;
        };
    }
}
