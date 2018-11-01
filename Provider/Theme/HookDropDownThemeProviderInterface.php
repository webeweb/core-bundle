<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider\Theme;

use WBW\Bundle\CoreBundle\Provider\ThemeProviderInterface;

/**
 * Hook drop down theme provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Theme
 */
interface HookDropDownThemeProviderInterface extends ThemeProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.provider.theme.hookdropdown";

    /**
     * Get the items.
     *
     * @return array Returns the items.
     */
    public function getItems();
}
