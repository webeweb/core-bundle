<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Form\Factory;

use WBW\Bundle\CoreBundle\Form\Factory\FormFactoryInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Form\Factory\TestFormFactoryTrait;

/**
 * FormFactory trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\Factory
 */
class FormFactoryTraitTest extends AbstractTestCase {

    /**
     * Tests the setFormFactory() method.
     *
     * @return void
     */
    public function testSetFormFactory(): void {

        // Set a Form factory mock.
        $formFactory = $this->getMockBuilder(FormFactoryInterface::class)->getMock();

        $obj = new TestFormFactoryTrait();

        $obj->setFormFactory($formFactory);
        $this->assertSame($formFactory, $obj->getFormFactory());
    }
}
