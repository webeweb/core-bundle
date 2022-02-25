<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Security\Core\Encoder;

use WBW\Bundle\CoreBundle\Component\Security\Core\Encoder\EncoderFactoryTrait;

/**
 * Test encoder factory trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Security\Core\Encoder
 */
class TestEncoderFactoryTrait {

    use EncoderFactoryTrait {
        setEncoderFactory as public;
    }
}
