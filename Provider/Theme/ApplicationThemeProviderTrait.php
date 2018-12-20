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
 * Application theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Theme
 */
trait ApplicationThemeProviderTrait {

    /**
     * Application theme provider.
     *
     * @var ApplicationThemeProviderInterface
     */
    private $applicationThemeProvider;

    /**
     * Get the application theme provider.
     *
     * @return ApplicationThemeProviderInterface Returns the application theme provider.
     */
    public function getApplicationThemeProvider() {
        return $this->applicationThemeProvider;
    }

    /**
     * Set the application theme provider.
     *
     * @param ApplicationThemeProviderInterface $applicationThemeProvider The application theme provider.
     */
    protected function setApplicationThemeProvider(ApplicationThemeProviderInterface $applicationThemeProvider = null) {
        $this->applicationThemeProvider = $applicationThemeProvider;
        return $this;
    }

}
