<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Event;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use WBW\Bundle\CoreBundle\Component\Form\FormTrait;
use WBW\Bundle\CoreBundle\Component\HttpFoundation\RequestTrait;
use WBW\Bundle\CoreBundle\Component\HttpFoundation\ResponseTrait;

/**
 * Form event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Event
 */
class FormEvent extends AbstractEvent {

    use FormTrait;
    use RequestTrait;
    use ResponseTrait;

    /**
     * Constructor.
     *
     * @param FormInterface $form The form.
     * @param Request $request The request.
     */
    public function __construct(FormInterface $form, Request $request) {
        parent::__construct(get_class($this));

        $this->setForm($form);
        $this->setRequest($request);
    }
}
