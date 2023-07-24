<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Assets;

use WBW\Library\Symfony\Assets\ChoiceValueInterface;

/**
 * Test choice value.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Assets
 */
class TestChoiceValue implements ChoiceValueInterface {

    /**
     * {@inheritDoc}
     */
    public function getChoiceValue(): ?string {
        return null;
    }
}
