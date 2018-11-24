<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Composer;

use Composer\Script\PackageEvent;
use WBW\Bundle\CoreBundle\Helper\AssetsHelper;

/**
 * Script handler.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Composer
 */
class ScriptHandler {

    /**
     * Get the install path.
     *
     * @param PackageEvent $event The event.
     * @return string Returns the install path.
     */
    protected static function getInstallPath(PackageEvent $event) {

        // Get the current package.
        $package = $event->getComposer()->getPackage();

        // Get the intall path.
        $installPath = $event->getComposer()->getInstallationManager()->getInstallPath($package);

        // Get the package name.
        $packageName = $package->getName();
        $simpleName  = explode("/", $packageName)[1];

        // Initialize the pattern.
        $pattern = preg_quote($simpleName . "/vendor/" . $packageName, "/");

        // Return the install path.
        return preg_replace("/" . $pattern . "$/", $simpleName, $installPath);
    }

    /**
     * Unzip all assets.
     *
     * @param PackageEvent $event The event.
     * @return array Returns the assets.
     */
    public static function unzipAssets(PackageEvent $event) {

        // Get the install path.
        $installPath = self::getInstallPath($event);

        // Initialize the directories.
        $src = $installPath . "/Resources/assets";
        $dst = $installPath . "/Resources/public";

        // Return the results.
        return AssetsHelper::unzipAssets($src, $dst);
    }

}
