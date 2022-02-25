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

use Symfony\Component\Form\FormInterface;

/**
 * Form trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Component\Form
 */
trait FormTrait {

    /**
     * Form.
     *
     * @var FormInterface|null
     */
    private $form;

    /**
     * Get the form.
     *
     * @return FormInterface|null Returns the form.
     */
    public function getForm(): ?FormInterface {
        return $this->form;
    }

    /**
     * Set the form.
     *
     * @param FormInterface|null $form The form.
     * @return self Returns this instance.
     */
    public function setForm(?FormInterface $form): self {
        $this->form = $form;
        return $this;
    }
}
