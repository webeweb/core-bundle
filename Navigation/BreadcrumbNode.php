<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Navigation;

/**
 * Breadcrumb node.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Navigation
 */
class BreadcrumbNode extends AbstractNavigationNode {

    /**
     * Constructor.
     *
     * @param string $name The name.
     * @param string $icon The icon.
     * @param string $uri The URI.
     * @param string $matcher The matcher.
     */
    public function __construct($name, $icon = null, $uri = null, $matcher = self::NAVIGATION_MATCHER_URL) {
        parent::__construct($name, $icon, $uri, $matcher);
        $this->setVisible(false);
    }

}
