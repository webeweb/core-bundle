<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Form;

use Closure;
use WBW\Bundle\CoreBundle\Component\Form\FormFactory;

/**
 * Test form factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Form
 */
class TestFormFactory extends FormFactory {

    /**
     * {@inheritDoc}
     */
    public static function getChoiceLabelClosure(array $options): Closure {
        return parent::getChoiceLabelClosure($options);
    }
}
