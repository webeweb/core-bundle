<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Select\Select2;

use InvalidArgumentException;

/**
 * Select2 helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset\Select\Select2
 */
class Select2Helper {

    /**
     * Convert items into a "results" array.
     *
     * @param Select2OptionInterface[] $options The options.
     * @return array Returns the "results" array.
     * @throws InvalidArgumentException Throws an invalid argument exception if an item does not implement Select2OptionInterface.
     */
    public static function toResults(array $options): array {

        $output = [];

        foreach ($options as $current) {

            if (false === ($current instanceof Select2OptionInterface)) {
                throw new InvalidArgumentException("The option must implements Select2OptionInterface");
            }

            $output[] = [
                "id"   => $current->getSelect2OptionId(),
                "text" => $current->getSelect2OptionText(),
            ];
        }

        return $output;
    }
}
