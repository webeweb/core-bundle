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
use WBW\Bundle\CoreBundle\Utility\TokenGeneratorInterface;
use WBW\Bundle\CoreBundle\Utility\TokenGeneratorTrait;

/**
 * Resetting controller.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Controller
 */
class ResettingController extends AbstractController {

    use FormFactoryTrait;
    use TokenGeneratorTrait;
    use UserManagerTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.controller.resetting";

    /**
     * Constructor.
     *
     * @param FormFactoryInterface $formFactory The form factory.
     * @param UserManagerInterface $userManager The user manager.
     * @param TokenGeneratorInterface $tokenGenerator The token generator.
     */
    public function __construct(FormFactoryInterface $formFactory, UserManagerInterface $userManager, TokenGeneratorInterface $tokenGenerator) {
        $this->setFormFactory($formFactory);
        $this->setTokenGenerator($tokenGenerator);
        $this->setUserManager($userManager);
    }
}
