<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Component\Security\Core\Encoder;

use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

/**
 * Encoder factory trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Component\Security\Core\Encoder
 */
trait EncoderFactoryTrait {

    /**
     * Encoder factory.
     *
     * @var EncoderFactoryInterface
     */
    private $encoderFactory;

    /**
     * Get the encoder factory.
     *
     * @return EncoderFactoryInterface Returns the encoder factory.
     */
    public function getEncoderFactory(): EncoderFactoryInterface {
        return $this->encoderFactory;
    }

    /**
     * Set the encoder factory.
     *
     * @param EncoderFactoryInterface $encoderFactory The encoder factory.
     * @return self Returns this instance.
     */
    protected function setEncoderFactory(EncoderFactoryInterface $encoderFactory): self {
        $this->encoderFactory = $encoderFactory;
        return $this;
    }
}
