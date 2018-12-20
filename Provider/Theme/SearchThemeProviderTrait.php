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
 * Search theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Theme
 */
trait SearchThemeProviderTrait {

    /**
     * Search theme provider.
     *
     * @var SearchThemeProviderInterface
     */
    private $searchThemeProvider;

    /**
     * Get the search theme provider.
     *
     * @return SearchThemeProviderInterface Returns the search theme provider.
     */
    public function getSearchThemeProvider() {
        return $this->searchThemeProvider;
    }

    /**
     * Set the search theme provider.
     *
     * @param SearchThemeProviderInterface $searchThemeProvider The search theme provider.
     */
    protected function setSearchThemeProvider(SearchThemeProviderInterface $searchThemeProvider = null) {
        $this->searchThemeProvider = $searchThemeProvider;
        return $this;
    }

}