<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider\Asset\Theme;

/**
 * HookDropDown theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Asset\Theme
 */
trait HookDropDownThemeProviderTrait {

    /**
     * Hook drop down theme provider.
     *
     * @var HookDropDownThemeProviderInterface|null
     */
    private $hookDropDownThemeProvider;

    /**
     * Get the hook drop down theme provider.
     *
     * @return HookDropDownThemeProviderInterface|null Returns the hook drop down theme provider.
     */
    public function getHookDropDownThemeProvider(): ?HookDropDownThemeProviderInterface {
        return $this->hookDropDownThemeProvider;
    }

    /**
     * Set the hook drop down theme provider.
     *
     * @param HookDropDownThemeProviderInterface|null $hookDropDownThemeProvider The hook drop down theme provider.
     * @return self Returns this instance.
     */
    protected function setHookDropDownThemeProvider(?HookDropDownThemeProviderInterface $hookDropDownThemeProvider): self {
        $this->hookDropDownThemeProvider = $hookDropDownThemeProvider;
        return $this;
    }
}
