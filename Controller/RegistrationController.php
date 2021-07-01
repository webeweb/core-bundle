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

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use WBW\Bundle\CoreBundle\Component\Security\Core\Authentication\Token\Storage\TokenStorageTrait;
use WBW\Bundle\CoreBundle\Form\Factory\FormFactoryInterface;
use WBW\Bundle\CoreBundle\Form\Factory\FormFactoryTrait;
use WBW\Bundle\CoreBundle\Manager\UserManagerInterface;
use WBW\Bundle\CoreBundle\Manager\UserManagerTrait;

/**
 * Registration controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Controller
 */
class RegistrationController  extends AbstractController {

    use FormFactoryTrait;
    use TokenStorageTrait;
    use UserManagerTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.controller.registration";

    /**
     * Constructor.
     *
     * @param FormFactoryInterface $formFactory The form factory.
     * @param UserManagerInterface $userManager The user manager.
     * @param TokenStorageInterface $tokenStorage The token storage.
     */
    public function __construct(FormFactoryInterface $formFactory, UserManagerInterface $userManager, TokenStorageInterface $tokenStorage) {
        $this->setFormFactory($formFactory);
        $this->setTokenStorage($tokenStorage);
        $this->setUserManager($userManager);
    }
}