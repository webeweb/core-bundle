<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Form\DataTransformer;

use DateTime;

/**
 * Abstract timestamp data transformer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Form\DataTransformer
 * @abstract
 */
abstract class AbstractTimestampDataTransformer extends AbstractDateTimeDataTransformer {

    /**
     * {@inheritDoc}
     */
    public function reverseTransform($value) {

        /** @var DateTime|null $date */
        $date = parent::reverseTransform($value);
        if (null === $date) {
            return null;
        }

        return $date->getTimestamp();
    }

    /**
     * {@inheritDoc}
     */
    public function transform($value) {

        if (null === $value) {
            return null;
        }

        $date = new DateTime("@$value");

        return parent::transform($date);
    }
}
