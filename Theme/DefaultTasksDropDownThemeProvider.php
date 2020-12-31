<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Theme;

use WBW\Bundle\CoreBundle\Provider\Theme\TasksDropDownThemeProviderInterface;

/**
 * Default tasks drop down theme provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Theme
 */
class DefaultTasksDropDownThemeProvider implements TasksDropDownThemeProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritDoc}
     */
    public function getTasks(): array {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    public function getView(): ?string {
        return null;
    }
}
