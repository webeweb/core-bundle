<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider\Theme;

/**
 * Footer theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Theme
 */
trait FooterThemeProviderTrait {

    /**
     * Footer theme provider.
     *
     * @var FooterThemeProviderInterface
     */
    private $footerThemeProvider;

    /**
     * Get the footer theme provider.
     *
     * @return FooterThemeProviderInterface Returns the footer theme provider.
     */
    public function getFooterThemeProvider() {
        return $this->footerThemeProvider;
    }

    /**
     * Set the footer theme provider.
     *
     * @param FooterThemeProviderInterface $footerThemeProvider The footer theme provider.
     */
    protected function setFooterThemeProvider(FooterThemeProviderInterface $footerThemeProvider = null) {
        $this->footerThemeProvider = $footerThemeProvider;
        return $this;
    }

}