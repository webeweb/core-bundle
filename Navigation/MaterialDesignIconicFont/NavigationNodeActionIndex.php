<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Navigation\MaterialDesignIconicFont;

use WBW\Bundle\CoreBundle\Navigation\NavigationNode;

/**
 * Navigation node action "index".
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Navigation\MaterialDesignIconicFont
 */
class NavigationNodeActionIndex extends NavigationNode {

    /**
     * Constructor.
     *
     * @param string|null $uri The URI.
     * @param string $matcher The matcher.
     */
    public function __construct(string $uri = null, string $matcher = self::NAVIGATION_MATCHER_URL) {
        parent::__construct("navigation.node.action.index", "zmdi:view-list", $uri, $matcher);
    }
}
