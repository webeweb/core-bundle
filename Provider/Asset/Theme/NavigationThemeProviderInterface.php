<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider\Asset\Theme;

use WBW\Bundle\CoreBundle\Asset\Navigation\NavigationTree;
use WBW\Bundle\CoreBundle\Provider\Asset\ThemeProviderInterface;

/**
 * Navigation theme provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Asset\Theme
 */
interface NavigationThemeProviderInterface extends ThemeProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.theme.navigation";

    /**
     * Get the tree.
     *
     * @return NavigationTree Returns the tree.
     */
    public function getTree(): NavigationTree;
}
