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

use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\RouterInterface;
use WBW\Bundle\CoreBundle\Asset\Notification\NotificationInterface;
use WBW\Bundle\CoreBundle\Asset\Toast\ToastInterface;
use WBW\Bundle\CoreBundle\Component\Form\FormHelper;
use WBW\Bundle\CoreBundle\Controller\AbstractController;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\Event\ToastEvent;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\Repository\RepositoryHelper;

/**
 * Test abstract controller.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Controller
 */
class TestAbstractController extends AbstractController {

    /**
     * {@inheritDoc}
     */
    public function getContainer(): ?Container {
        return parent::getContainer();
    }

    /**
     * {@inheritDoc}
     */
    public function getEventDispatcher(): ?EventDispatcherInterface {
        return parent::getEventDispatcher();
    }

    /**
     * {@inheritDoc}
     */
    public function getFormHelper(): ?FormHelper {
        return parent::getFormHelper();
    }

    /**
     * {@inheritDoc}
     */
    public function getKernelEventListener(): ?KernelEventListener {
        return parent::getKernelEventListener();
    }

    /**
     * {@inheritDoc}
     */
    public function getLogger(): ?LoggerInterface {
        return parent::getLogger();
    }

    /**
     * {@inheritDoc}
     */
    public function getRepositoryHelper(): ?RepositoryHelper {
        return parent::getRepositoryHelper();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouter(): ?RouterInterface {
        return parent::getRouter();
    }

    /**
     * {@inheritDoc}
     */
    public function getSession(): ?SessionInterface {
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
    public function hasRolesOrRedirect(array $roles, bool $or, string $redirectUrl, string $originUrl = ""): bool {
        return parent::hasRolesOrRedirect($roles, $or, $redirectUrl, $originUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function notify(string $eventName, NotificationInterface $notification): ?NotificationEvent {
        return parent::notify($eventName, $notification);
    }

    /**
     * {@inheritDoc}
     */
    public function toast(string $eventName, ToastInterface $toast): ?ToastEvent {
        return parent::toast($eventName, $toast);
    }

    /**
     * {@inheritDoc}
     */
    public function translate(string $id, array $parameters = [], string $domain = null, string $locale = null): string {
        return parent::translate($id, $parameters, $domain, $locale);
    }
}
