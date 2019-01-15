<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider\Theme;

/**
 * HookDropDown theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Theme
 */
trait HookDropDownThemeProviderTrait {

    /**
     * Hook drop down theme provider.
     *
     * @var HookDropDownThemeProviderInterface
     */
    private $hookDropDownThemeProvider;

    /**
     * Get the hook drop down theme provider.
     *
     * @return HookDropDownThemeProviderInterface Returns the hook drop down theme provider.
     */
    public function getHookDropDownThemeProvider() {
        return $this->hookDropDownThemeProvider;
    }

    /**
     * Set the hook drop down theme provider.
     *
     * @param HookDropDownThemeProviderInterface|null $hookDropDownThemeProvider The hook drop down theme provider.
     */
    protected function setHookDropDownThemeProvider(HookDropDownThemeProviderInterface $hookDropDownThemeProvider = null) {
        $this->hookDropDownThemeProvider = $hookDropDownThemeProvider;
        return $this;
    }
}
