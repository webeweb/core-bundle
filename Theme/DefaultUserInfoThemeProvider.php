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

use WBW\Bundle\CoreBundle\Provider\Theme\UserInfoThemeProviderInterface;

/**
 * Default user info theme provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Theme
 */
class DefaultUserInfoThemeProvider implements UserInfoThemeProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritDoc}
     */
    public function getView() {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function provideRegisterLink() {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function provideResettingLink() {
        return false;
    }
}
