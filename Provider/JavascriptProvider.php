<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider;

use WBW\Library\Symfony\Provider\JavascriptProviderInterface;

/**
 * Javascript provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Provider
 */
class JavascriptProvider implements JavascriptProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.javascript";

    /**
     * {@inheritDoc}
     */
    public function getJavascripts(): array {

        return [
            "WBWCoreJQueryInputMask"            => "@WBWCore/assets/WBWCoreJQueryInputMask.js.twig",
            "WBWCoreLeaflet"                    => "@WBWCore/assets/WBWCoreLeaflet.js.twig",
            "WBWCoreMaterialDesignColorPalette" => "@WBWCore/assets/WBWCoreMaterialDesignColorPalette.js.twig",
            "WBWCoreSweetAlert"                 => "@WBWCore/assets/WBWCoreSweetAlert.js.twig",
            "WBWCoreWaitMe"                     => "@WBWCore/assets/WBWCoreWaitMe.js.twig",
        ];
    }
}
