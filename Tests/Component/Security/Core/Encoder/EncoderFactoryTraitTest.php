<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Component\Security\Core\Encoder;

use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Security\Core\Encoder\TestEncoderFactoryTrait;

/**
 * Encoder factory trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Component\Security\Core\Encoder
 */
class EncoderFactoryTraitTest extends AbstractTestCase {

    /**
     * Tests setEncoderFactory()
     *
     * @return void
     */
    public function testSetEncoderFactory(): void {

        // Set an Encoder factory mock.
        $encoderFactory = $this->getMockBuilder(EncoderFactoryInterface::class)->getMock();

        $obj = new TestEncoderFactoryTrait();

        $obj->setEncoderFactory($encoderFactory);
        $this->assertSame($encoderFactory, $obj->getEncoderFactory());
    }
}
