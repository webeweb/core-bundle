<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Theme;

use WBW\Bundle\CoreBundle\Provider\Theme\BreadcrumbsThemeProviderInterface;

/**
 * Default breadcrumbs theme provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Theme
 */
class DefaultBreadcrumbsThemeProvider implements BreadcrumbsThemeProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function getView() {
        return null;
    }
}
