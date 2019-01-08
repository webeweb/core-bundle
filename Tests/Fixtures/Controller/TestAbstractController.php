<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Controller;

use WBW\Bundle\CoreBundle\Controller\AbstractController;
use WBW\Bundle\CoreBundle\Notification\NotificationInterface;

/**
 * Test abstract controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Controller
 */
class TestAbstractController extends AbstractController {

    /**
     * {@inheritdoc}
     */
    public function getContainer() {
        return parent::getContainer();
    }

    /**
     * {@inheritdoc}
     */
    public function getEventDispatcher() {
        return parent::getEventDispatcher();
    }

    /**
     * {@inheritdoc}
     */
    public function getFormHelper() {
        return parent::getFormHelper();
    }

    /**
     * {@inheritdoc}
     */
    public function getKernelEventListener() {
        return parent::getKernelEventListener();
    }

    /**
     * {@inheritdoc}
     */
    public function getLogger() {
        return parent::getLogger();
    }

    /**
     * {@inheritdoc}
     */
    public function getRouter() {
        return parent::getRouter();
    }

    /**
     * {@inheritdoc}
     */
    public function getSession() {
        return parent::getSession();
    }

    /**
     * {@inheritdoc}
     */
    public function getTranslator() {
        return parent::getTranslator();
    }

    /**
     * {@inheritdoc}
     */
    public function hasRolesOrRedirect(array $roles, $or, $redirectUrl, $originUrl = "") {
        return parent::hasRolesOrRedirect($roles, $or, $redirectUrl, $originUrl);
    }

    /**
     * {@inheritdoc}
     */
    public function notify($eventName, NotificationInterface $notification) {
        return parent::notify($eventName, $notification);
    }

}
