<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Navigation;

use WBW\Bundle\CoreBundle\Navigation\AbstractNavigationNode;

/**
 * Test navigation node.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Navigation
 */
class TestNavigationNode extends AbstractNavigationNode {

    /**
     * Constructor.
     *
     * @param string $label The name.
     * @param string|null $icon The icon.
     * @param string|null $uri The URI.
     * @param string $matcher The matcher.
     */
    public function __construct(string $label, string $icon = null, string $uri = null, string $matcher = self::NAVIGATION_MATCHER_URL) {
        parent::__construct($label, $icon, $uri, $matcher);
    }
}
