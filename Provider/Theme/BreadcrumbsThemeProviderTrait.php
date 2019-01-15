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
 * Breadcrumbs theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Theme
 */
trait BreadcrumbsThemeProviderTrait {

    /**
     * Breadcrumbs theme provider.
     *
     * @var BreadcrumbsThemeProviderInterface
     */
    private $breadcrumbsThemeProvider;

    /**
     * Get the breadcrumbs theme provider.
     *
     * @return BreadcrumbsThemeProviderInterface Returns the breadcrumbs theme provider.
     */
    public function getBreadcrumbsThemeProvider() {
        return $this->breadcrumbsThemeProvider;
    }

    /**
     * Set the breadcrumbs theme provider.
     *
     * @param BreadcrumbsThemeProviderInterface|null $breadcrumbsThemeProvider The breadcrumbs theme provider.
     */
    protected function setBreadcrumbsThemeProvider(BreadcrumbsThemeProviderInterface $breadcrumbsThemeProvider = null) {
        $this->breadcrumbsThemeProvider = $breadcrumbsThemeProvider;
        return $this;
    }
}
