<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Form\DataTransformer;

use WBW\Bundle\CoreBundle\Form\DataTransformer\AbstractTimestampDataTransformer;

/**
 * Test timestamp data transformer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Form\DataTransformer
 */
class TestTimestampDataTransformer extends AbstractTimestampDataTransformer {

    /**
     * Constructor.
     *
     * @param string $format The format.
     * @param string|null $timeZone The timezone.
     */
    public function __construct(string $format, ?string $timeZone = null) {
        parent::__construct($format, $timeZone);
    }
}
