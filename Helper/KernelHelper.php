<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Helper;

use Symfony\Component\HttpKernel\KernelInterface;

/**
 * Kernel helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Helper
 */
class KernelHelper {

    /**
     * Get a project directory.
     *
     * @param KernelInterface $kernel The kernel.
     * @return string Returns the project directory.
     */
    public static function getProjectDir(KernelInterface $kernel): string {

        $method = "getProjectDir";
        if (true === method_exists($kernel, $method)) {
            return $kernel->$method();
        } else {
            $method = "getRootDir";
        }

        return realpath($kernel->$method() . "/..");
    }
}
