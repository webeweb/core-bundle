<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Select;

use WBW\Bundle\CoreBundle\Asset\Select\ChoiceValueInterface;

/**
 * Test choice value.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Asset\Select
 */
class TestChoiceValue implements ChoiceValueInterface {

    /**
     * {@inheritDoc}
     */
    public function getChoiceValue(): ?string {
        return null;
    }
}
