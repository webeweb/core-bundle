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
 * Canonicalizer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Util
 */
class Canonicalizer implements CanonicalizerInterface {

    /**
     * {@inheritDoc}
     */
    public function canonicalize(?string $string): ?string {

        if (null === $string) {
            return null;
        }

        $encoding = mb_detect_encoding($string);

        return mb_convert_case($string, MB_CASE_LOWER, false !== $encoding ? $encoding : null);
    }
}