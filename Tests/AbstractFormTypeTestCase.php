<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Abstract form type test case.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests
 * @abstract
 */
abstract class AbstractFormTypeTestCase extends AbstractTestCase {

    /**
     * Children.
     *
     * @var array
     */
    protected $children;

    /**
     * Defaults.
     *
     * @var array
     */
    protected $defaults;

    /**
     * Form
     *
     * @var FormInterface
     */
    protected $form;

    /**
     * Form builder.
     *
     * @var FormBuilderInterface
     */
    protected $formBuilder;

    /**
     * Options resolver.
     *
     * @var OptionsResolver
     */
    protected $resolver;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Form mock.
        $this->form = $this->getMockBuilder(FormInterface::class)->getMock();

        // Set a Form builder mock.
        $this->formBuilder = $this->getMockBuilder(FormBuilderInterface::class)->getMock();
        $this->formBuilder->expects($this->any())->method("add")->willReturnCallback(function($child, $type = null, array $options = []) {
            $this->children[$child] = [
                "type"    => $type,
                "options" => $options,
            ];
            return $this->formBuilder;
        });
        $this->formBuilder->expects($this->any())->method("remove")->willReturnCallback(function($child) {
            unset($this->children[$child]);
            return $this->formBuilder;
        });
        $this->formBuilder->expects($this->any())->method("addEventListener")->willReturn($this->formBuilder);
        $this->formBuilder->expects($this->any())->method("addModelTransformer")->willReturn($this->formBuilder);
        $this->formBuilder->expects($this->any())->method("get")->willReturn($this->formBuilder);

        // Set an Options resolver mock.
        $this->resolver = $this->getMockBuilder(OptionsResolver::class)->getMock();
        $this->resolver->expects($this->any())->method("setDefaults")->willReturnCallback(function(array $defauls) {
            $this->defaults = $defauls;
            return $this->resolver;
        });
    }
}
