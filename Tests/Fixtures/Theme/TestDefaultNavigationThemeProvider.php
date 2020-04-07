<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Theme;

use WBW\Bundle\CoreBundle\Theme\DefaultNavigationThemeProvider;

/**
 * Test default navigation theme provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Theme
 */
class TestDefaultNavigationThemeProvider extends DefaultNavigationThemeProvider {

    /**
     * {@inheritDoc}
     */
    public function translate($id, array $parameters = [], $domain = null, $locale = null) {
        return parent::translate($id, $parameters, $domain, $locale);
    }
}