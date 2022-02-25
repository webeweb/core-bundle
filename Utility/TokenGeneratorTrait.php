<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Utility;

/**
 * Token generator trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Utility
 */
trait TokenGeneratorTrait {

    /**
     * Token generator.
     *
     * @var TokenGeneratorInterface|null
     */
    private $tokenGenerator;

    /**
     * Get the token generator.
     *
     * @return TokenGeneratorInterface|null Returns the token generator.
     */
    public function getTokenGenerator(): TokenGeneratorInterface {
        return $this->tokenGenerator;
    }

    /**
     * Set the token generator.
     *
     * @param TokenGeneratorInterface|null $tokenGenerator The token generator.
     * @return self Returns this instance.
     */
    protected function setTokenGenerator(?TokenGeneratorInterface $tokenGenerator): self {
        $this->tokenGenerator = $tokenGenerator;
        return $this;
    }
}
