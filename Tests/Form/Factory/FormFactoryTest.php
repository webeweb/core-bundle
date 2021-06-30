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

use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;
use WBW\Bundle\CoreBundle\Form\Factory\FormFactory;
use WBW\Bundle\CoreBundle\Form\Type\ChangePasswordFormType;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Form factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\Factory
 */
class FormFactoryTest extends AbstractTestCase {

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        $myself = $this;

        // Set a Create named closure.
        $createNamed = function($name, $type = "Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType", $data = null, array $options = []) use ($myself) {

            // Set a Form mock.
            $form = $myself->getMockBuilder(FormInterface::class)->getMock();
            $form->expects($myself->any())->method("getData")->willReturn($data);
            $form->expects($myself->any())->method("getName")->willReturn($name);

            return $form;
        };

        // Set the Form factory mock.
        $this->formFactory = $this->getMockBuilder(FormFactoryInterface::class)->getMock();
        $this->formFactory->expects($this->any())->method("createNamed")->willReturnCallback($createNamed);
    }

    /**
     * Tests the createForm() method.
     *
     * @return void
     */
    public function testCreateForm(): void {

        $obj = new FormFactory($this->formFactory, "wbw_core_form_type_change_password", ChangePasswordFormType::class, []);

        $res = $obj->createForm();
        $this->assertInstanceOf(FormInterface::class, $res);

        $this->assertEquals("wbw_core_form_type_change_password", $res->getName());
        $this->assertNull($res->getData());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FormFactory($this->formFactory, "wbw_core_form_type_change_password", ChangePasswordFormType::class, []);

        $this->assertEquals($this->formFactory, $obj->getFormFactory());
        $this->assertEquals("wbw_core_form_type_change_password", $obj->getName());
        $this->assertEquals(ChangePasswordFormType::class, $obj->getType());
        $this->assertEquals([], $obj->getValidationGroups());
    }
}