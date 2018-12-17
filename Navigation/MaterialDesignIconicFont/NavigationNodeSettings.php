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
 * Navigation node "Settings".
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Navigation\MaterialDesignIconicFont
 */
class NavigationNodeSettings extends NavigationNode {

    /**
     * Constructor.
     *
     * @param string $uri The URI.
     * @param string $matcher The matcher.
     */
    public function __construct($uri = null, $matcher = self::NAVIGATION_MATCHER_URL) {
        parent::__construct("navigation.node.settings", "zmdi:settings", $uri, $matcher);
    }

}
