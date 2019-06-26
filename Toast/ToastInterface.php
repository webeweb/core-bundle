<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Toast;

use WBW\Bundle\CoreBundle\CoreInterface;

/**
 * Toast interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Toast
 */
interface ToastInterface {

    /**
     * Toast "Danger".
     *
     * @var string
     */
    const TOAST_DANGER = CoreInterface::CORE_DANGER;

    /**
     * Toast "Info".
     *
     * @var string
     */
    const TOAST_INFO = CoreInterface::CORE_INFO;

    /**
     * Toast "Success".
     *
     * @var string
     */
    const TOAST_SUCCESS = CoreInterface::CORE_SUCCESS;

    /**
     * Toast "Warning".
     *
     * @var string
     */
    const TOAST_WARNING = CoreInterface::CORE_WARNING;

    /**
     * Get the content.
     *
     * @return string Returns the content.
     */
    public function getContent();

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType();
}
