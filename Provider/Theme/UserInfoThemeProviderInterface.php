<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider\Theme;

use WBW\Bundle\CoreBundle\Provider\ThemeProviderInterface;

/**
 * User info theme provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Provider\Theme
 */
interface UserInfoThemeProviderInterface extends ThemeProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.theme.user_info";

    /**
     * Provides a register link.
     *
     * @return bool|null Returns true in case of success, false otherwise.
     */
    public function provideRegisterLink(): ?bool;

    /**
     * Provides a resetting link.
     *
     * @return bool|null Returns true in case of success, false otherwise.
     */
    public function provideResettingLink(): ?bool;
}
