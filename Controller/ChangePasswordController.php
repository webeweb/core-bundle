<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Controller;

use WBW\Bundle\CoreBundle\Form\Factory\FormFactoryInterface;
use WBW\Bundle\CoreBundle\Form\Factory\FormFactoryTrait;
use WBW\Bundle\CoreBundle\Manager\UserManagerInterface;
use WBW\Bundle\CoreBundle\Manager\UserManagerTrait;

/**
 * Change password controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Controller
 */
class ChangePasswordController extends AbstractController {

    use FormFactoryTrait;
    use UserManagerTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.controller.change_password";

    /**
     * Constructor.
     *
     * @param FormFactoryInterface $formFactory The form factory.
     * @param UserManagerInterface $userManager The user manager.
     */
    public function __construct(FormFactoryInterface $formFactory, UserManagerInterface $userManager) {
        $this->setFormFactory($formFactory);
        $this->setUserManager($userManager);
    }
}
