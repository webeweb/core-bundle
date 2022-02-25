<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Toast;

/**
 * Toast factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Asset\Toast
 */
class ToastFactory {

    /**
     * Creates a danger toast.
     *
     * @param string $content The content.
     * @return ToastInterface Returns the danger toast.
     */
    public static function newDangerToast(string $content): ToastInterface {
        return new DangerToast($content);
    }

    /**
     * Creates a default toast.
     *
     * @param string $content The content.
     * @param string $type The type.
     * @return ToastInterface Returns the default toast.
     */
    public static function newDefaultToast(string $content, string $type): ToastInterface {
        return new DefaultToast($type, $content);
    }

    /**
     * Creates a info toast.
     *
     * @param string $content The content.
     * @return ToastInterface Returns the info toast.
     */
    public static function newInfoToast(string $content): ToastInterface {
        return new InfoToast($content);
    }

    /**
     * Creates a success toast.
     *
     * @param string $content The content.
     * @return ToastInterface Returns the success toast.
     */
    public static function newSuccessToast(string $content): ToastInterface {
        return new SuccessToast($content);
    }

    /**
     * Creates a warning toast.
     *
     * @param string $content The content.
     * @return ToastInterface Returns the warning toast.
     */
    public static function newWarningToast(string $content): ToastInterface {
        return new WarningToast($content);
    }
}
