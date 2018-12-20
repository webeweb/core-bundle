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
 * UserInfo theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Theme
 */
trait UserInfoThemeProviderTrait {

    /**
     * User info theme provider.
     *
     * @var UserInfoThemeProviderInterface
     */
    private $userInfoThemeProvider;

    /**
     * Get the user info theme provider.
     *
     * @return UserInfoThemeProviderInterface Returns the user info theme provider.
     */
    public function getUserInfoThemeProvider() {
        return $this->userInfoThemeProvider;
    }

    /**
     * Set the user info theme provider.
     *
     * @param UserInfoThemeProviderInterface $userInfoThemeProvider The user info theme provider.
     */
    protected function setUserInfoThemeProvider(UserInfoThemeProviderInterface $userInfoThemeProvider = null) {
        $this->userInfoThemeProvider = $userInfoThemeProvider;
        return $this;
    }

}
