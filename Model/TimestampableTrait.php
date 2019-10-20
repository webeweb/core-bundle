<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model;

use WBW\Bundle\CoreBundle\Model\Attribute\DateTimeCreatedAtTrait;
use WBW\Bundle\CoreBundle\Model\Attribute\DateTimeUpdatedAtTrait;

/**
 * Timestampable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model
 */
trait TimestampableTrait {

    use DateTimeCreatedAtTrait;
    use DateTimeUpdatedAtTrait;
}
