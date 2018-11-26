<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Manager;

use WBW\Bundle\CoreBundle\Manager\ThemeManager;

/**
 * Theme manager trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager
 */
trait ThemeManagerTrait {

    /**
     * Theme manager.
     *
     * @var ThemeManager
     */
    private $themeManager;

    /**
     * Get the theme manager.
     *
     * @return ThemeManager Returns the theme manager.
     */
    public function getThemeManager() {
        return $this->themeManager;
    }

    /**
     * Set the theme manager.
     *
     * @param ThemeManager $themeManager The theme manager.
     */
    protected function setThemeManager(ThemeManager $themeManager = null) {
        $this->themeManager = $themeManager;
        return $this;
    }

}
