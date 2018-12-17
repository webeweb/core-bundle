<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider;

/**
 * Theme provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider
 */
interface ThemeProviderInterface extends ProviderInterface {

    /**
     * Get the view.
     *
     * @return string Returns the view.
     */
    public function getView();
}
