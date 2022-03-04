<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Navigation\MaterialDesignIconicFont;

use WBW\Library\Symfony\Component\Navigation\NavigationNode;

/**
 * Navigation node "users".
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Asset\Navigation\MaterialDesignIconicFont
 */
class NavigationNodeUsers extends NavigationNode {

    /**
     * Constructor.
     *
     * @param string|null $uri The URI.
     * @param string $matcher The matcher.
     */
    public function __construct(string $uri = null, string $matcher = self::MATCHER_URL) {
        parent::__construct("navigation.node.users", "zmdi:account", $uri, $matcher);
    }
}
