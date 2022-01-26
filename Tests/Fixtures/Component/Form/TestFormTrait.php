<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Form;

use WBW\Bundle\CoreBundle\Component\Form\FormTrait;

/**
 * Test form trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Form
 */
class TestFormTrait {

    use FormTrait {
        setForm as public;
    }
}
