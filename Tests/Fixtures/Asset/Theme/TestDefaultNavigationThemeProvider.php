<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Theme;

use WBW\Bundle\CoreBundle\Asset\Theme\DefaultNavigationThemeProvider;

/**
 * Test default navigation theme provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Theme
 */
class TestDefaultNavigationThemeProvider extends DefaultNavigationThemeProvider {

    /**
     * {@inheritDoc}
     */
    public function translate(string $id, array $parameters = [], string $domain = null, string $locale = null): string {
        return parent::translate($id, $parameters, $domain, $locale);
    }
}