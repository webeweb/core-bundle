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
 * Navigation theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Theme
 */
trait NavigationThemeProviderTrait {

    /**
     * Navigation theme provider.
     *
     * @var NavigationThemeProviderInterface
     */
    private $navigationThemeProvider;

    /**
     * Get the navigation theme provider.
     *
     * @return NavigationThemeProviderInterface Returns the navigation theme provider.
     */
    public function getNavigationThemeProvider() {
        return $this->navigationThemeProvider;
    }

    /**
     * Set the navigation theme provider.
     *
     * @param NavigationThemeProviderInterface|null $navigationThemeProvider The navigation theme provider.
     */
    protected function setNavigationThemeProvider(NavigationThemeProviderInterface $navigationThemeProvider = null) {
        $this->navigationThemeProvider = $navigationThemeProvider;
        return $this;
    }
}
