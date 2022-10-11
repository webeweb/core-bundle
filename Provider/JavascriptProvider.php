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
     * {@inheritdoc}
     */
    public function getJavascripts(): array {

        return [
            "wbwCoreFontAwesome"                => "@WBWCore/assets/wbwCoreFontAwesome.js.twig",
            "wbwCoreJQueryInputMask"            => "@WBWCore/assets/wbwCoreJQueryInputMask.js.twig",
            "wbwCoreLeaflet"                    => "@WBWCore/assets/wbwCoreLeaflet.js.twig",
            "wbwCoreMaterialDesignColorPalette" => "@WBWCore/assets/wbwCoreMaterialDesignColorPalette.js.twig",
            "wbwCoreSweetAlert"                 => "@WBWCore/assets/wbwCoreSweetAlert.js.twig",
            "wbwCoreWaitMe"                     => "@WBWCore/assets/wbwCoreWaitMe.js.twig",
        ];
    }
}
