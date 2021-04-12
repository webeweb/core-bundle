<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Component\Form;

use Symfony\Component\Form\FormFactoryInterface;

/**
 * Form factory trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Component\Form
 */
trait FormFactoryTrait {

    /**
     * Form factory.
     *
     * @var FormFactoryInterface|null
     */
    private $formFactory;

    /**
     * Get the form factory.
     *
     * @return FormFactoryInterface|null Returns the form factory.
     */
    public function getFormFactory(): ?FormFactoryInterface {
        return $this->formFactory;
    }

    /**
     * Set the form factory.
     *
     * @param FormFactoryInterface|null $formFactory The form factory.
     * @return self Returns this instance.
     */
    protected function setFormFactory(?FormFactoryInterface $formFactory): self {
        $this->formFactory = $formFactory;
        return $this;
    }
}