<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Helper;

use WBW\Bundle\CoreBundle\Entity\Select2ItemInterface;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;

/**
 * Select2 helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Helper
 */
class Select2Helper {

    /**
     * Convert items into a "results" array.
     *
     * @param Select2ItemInterface[] $items The items.
     * @return array Returns the "results" array.
     * @throws IllegalArgumentException Throws an illegal argument exception if an item does not implement Select2ItemInterface.
     */
    public static function toResults(array $items) {

        // Initialize the output.
        $output = [];

        // Handle each item.
        foreach ($items as $current) {

            // Check the item.
            if (false === ($current instanceof Select2ItemInterface)) {
                throw new IllegalArgumentException("The item must implements Select2ItemInterface");
            }

            // Add the item.
            $output[] = [
                "id"   => $current->getSelect2ItemId(),
                "text" => $current->getSelect2ItemText(),
            ];
        }

        // Return the output.
        return $output;
    }

}
