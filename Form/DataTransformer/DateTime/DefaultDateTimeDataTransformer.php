<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Form\DataTransformer\DateTime;

use WBW\Bundle\CoreBundle\Form\DataTransformer\AbstractDateTimeDataTransformer;

/**
 * Default date/time data transformer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Form\DataTransformer\DateTime
 */
class DefaultDateTimeDataTransformer extends AbstractDateTimeDataTransformer {

    /**
     * Constructor.
     *
     * @param string $format The format.
     * @param string|null $timezone The timezone.
     */
    public function __construct(string $format = "Y-m-d H:i:s", ?string $timezone = "UTC") {
        parent::__construct($format, $timezone);
    }
}