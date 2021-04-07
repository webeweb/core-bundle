<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Util;

/**
 * Token generator.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Util
 */
class TokenGenerator implements TokenGeneratorInterface {

    /**
     * {@inheritDoc}
     */
    public function generateToken(): string {

        $randomBytes  = random_bytes(32);
        $base64Encode = base64_encode($randomBytes);
        $translated   = strtr($base64Encode, "+/", "-_");

        return rtrim($translated, "=");
    }
}