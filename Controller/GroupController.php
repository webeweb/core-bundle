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
use WBW\Bundle\CoreBundle\Manager\GroupManagerInterface;
use WBW\Bundle\CoreBundle\Manager\GroupManagerTrait;

/**
 * Group controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Controller
 */
class GroupController extends AbstractController {

    use FormFactoryTrait;
    use GroupManagerTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.controller.group";

    /**
     * Constructor.
     *
     * @param FormFactoryInterface $formFactory The form factory.
     * @param GroupManagerInterface $groupManager The group manager.
     */
    public function __construct(FormFactoryInterface $formFactory, GroupManagerInterface $groupManager) {
        $this->setFormFactory($formFactory);
        $this->setGroupManager($groupManager);
    }
}