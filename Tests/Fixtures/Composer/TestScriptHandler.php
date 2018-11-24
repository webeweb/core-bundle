<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Composer;

use Composer\Script\PackageEvent;
use WBW\Bundle\CoreBundle\Composer\ScriptHandler;

/**
 * Test script handler.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Helper
 */
class TestScriptHandler extends ScriptHandler {

    /**
     * {@inheritdoc}
     */
    public static function getInstallPath(PackageEvent $event) {
        return parent::getInstallPath($event);
    }

}
