<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\EventListener;

use WBW\Bundle\CoreBundle\EventListener\ToastEventListenerTrait;

/**
 * Test toast event listener trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\EventListener
 */
class TestToastEventListenerTrait {

    use ToastEventListenerTrait {
        setToastEventListener as public;
    }
}
