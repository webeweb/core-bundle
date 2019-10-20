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
use WBW\Bundle\CoreBundle\Toast\ToastInterface;

/**
 * Test abstract controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Controller
 */
class TestAbstractController extends AbstractController {

    /**
     * {@inheritDoc}
     */
    public function getContainer() {
        return parent::getContainer();
    }

    /**
     * {@inheritDoc}
     */
    public function getEventDispatcher() {
        return parent::getEventDispatcher();
    }

    /**
     * {@inheritDoc}
     */
    public function getFormHelper() {
        return parent::getFormHelper();
    }

    /**
     * {@inheritDoc}
     */
    public function getKernelEventListener() {
        return parent::getKernelEventListener();
    }

    /**
     * {@inheritDoc}
     */
    public function getLogger() {
        return parent::getLogger();
    }

    /**
     * {@inheritDoc}
     */
    public function getRepositoryHelper() {
        return parent::getRepositoryHelper();
    }

    /**
     * {@inheritDoc}
     */
    public function getRepositoryReportHelper() {
        return parent::getRepositoryReportHelper();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouter() {
        return parent::getRouter();
    }

    /**
     * {@inheritDoc}
     */
    public function getSession() {
        return parent::getSession();
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslator() {
        return parent::getTranslator();
    }

    /**
     * {@inheritDoc}
     */
    public function hasRolesOrRedirect(array $roles, $or, $redirectUrl, $originUrl = "") {
        return parent::hasRolesOrRedirect($roles, $or, $redirectUrl, $originUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function notify($eventName, NotificationInterface $notification) {
        return parent::notify($eventName, $notification);
    }

    /**
     * {@inheritDoc}
     */
    public function toast($eventName, ToastInterface $toast) {
        return parent::toast($eventName, $toast);
    }
}
