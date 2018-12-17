<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Navigation\FontAwesome;

use WBW\Bundle\CoreBundle\Navigation\BreadcrumbNode;

/**
 * Breadcrumb node action "New user".
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Navigation\FontAwesome
 */
class BreadcrumbNodeActionNewUser extends BreadcrumbNode {

    /**
     * Constructor.
     *
     * @param string $uri The URI.
     * @param string $matcher The matcher.
     */
    public function __construct($uri = null, $matcher = self::NAVIGATION_MATCHER_URL) {
        parent::__construct("navigation.node.action.new", "fa:user-plus", $uri, $matcher);
    }

}
