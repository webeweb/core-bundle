<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Theme;

use WBW\Bundle\CoreBundle\Provider\Asset\Theme\UserInfoThemeProviderInterface;

/**
 * Default user info theme provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset\Theme
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
    public function getView(): ?string {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function provideRegisterLink(): ?bool {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function provideResettingLink(): ?bool {
        return false;
    }
}
