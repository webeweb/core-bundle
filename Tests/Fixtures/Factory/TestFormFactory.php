<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Factory;

use WBW\Bundle\CoreBundle\Factory\FormFactory;

/**
 * Test form factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Factory
 */
class TestFormFactory extends FormFactory {

    /**
     * {@inheritdoc}
     */
    public static function getChoiceLabelCallback(array $options): callable {
        return parent::getChoiceLabelCallback($options);
    }

    /**
     * {@inheritdoc}
     */
    public static function getChoiceValueCallback(): callable {
        return parent::getChoiceValueCallback();
    }
}
