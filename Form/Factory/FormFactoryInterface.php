<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Form\Factory;

use Symfony\Component\Form\FormInterface;

/**
 * Form factory interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Form\Factory
 */
interface FormFactoryInterface {

    /**
     * Create a form.
     *
     * @param array $options The options.
     * @return FormInterface Returns the form.
     */
    public function createForm(array $options = []): FormInterface;
}