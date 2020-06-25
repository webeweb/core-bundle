<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension;

use WBW\Bundle\CoreBundle\Twig\Extension\JavascriptTwigExtensionTrait;

/**
 * Test javascript Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension
 */
class TestJavascriptTwigExtensionTrait {

    use JavascriptTwigExtensionTrait {
        setJavascriptTwigExtension as public;
    }
}
