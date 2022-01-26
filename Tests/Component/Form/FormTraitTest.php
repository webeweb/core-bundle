<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Component\Form;

use Symfony\Component\Form\FormInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Form\TestFormTrait;

/**
 * Form trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Component\Form
 */
class FormTraitTest extends AbstractTestCase {

    /**
     * Tests the setForm() method.
     *
     * @return void
     */
    public function testSetForm(): void {

        // Set a Form mock.
        $form = $this->getMockBuilder(FormInterface::class)->getMock();

        $obj = new TestFormTrait();

        $obj->setForm($form);
        $this->assertSame($form, $obj->getForm());
    }
}
