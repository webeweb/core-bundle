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
 * Canonicalizer interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Utility
 */
interface CanonicalizerInterface {

    /**
     * Canonicalize.
     *
     * @param string|null $string The string.
     * @return string|null Returns the canonicalized string.
     */
    public function canonicalize(?string $string): ?string;
}
