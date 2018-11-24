<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Navigation\MaterialDesignIconicFont;

use WBW\Bundle\CoreBundle\Navigation\BreadcrumbNode;

/**
 * Breadcrumb node action "Import".
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Navigation\MaterialDesignIconicFont
 */
class BreadcrumbNodeActionImport extends BreadcrumbNode {

    /**
     * Constructor.
     *
     * @param string $uri The URI.
     * @param string $matcher The matcher.
     */
    public function __construct($uri = null, $matcher = self::NAVIGATION_MATCHER_URL) {
        parent::__construct("navigation.node.action.import", "zmdi:upload", $uri, $matcher);
    }

}