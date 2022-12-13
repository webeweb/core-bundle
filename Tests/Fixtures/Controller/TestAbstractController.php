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

use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\RouterInterface;
use Twig\Environment;
use WBW\Bundle\CoreBundle\Controller\AbstractController;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\Event\ToastEvent;
use WBW\Bundle\CoreBundle\EventListener\KernelEventListener;
use WBW\Bundle\CoreBundle\Helper\FormHelper;
use WBW\Library\Symfony\Assets\NotificationInterface;
use WBW\Library\Symfony\Assets\ToastInterface;
use WBW\Library\Symfony\Response\DefaultJsonResponseDataInterface;

/**
 * Test abstract controller.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Controller
 */
class TestAbstractController extends AbstractController {

    /**
     * {@inheritdoc}
     */
    public function getContainer(): ?Container {
        return parent::getContainer();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityManager(): ?EntityManagerInterface {
        return parent::getEntityManager();
    }

    /**
     * {@inheritdoc}
     */
    public function getEventDispatcher(): ?EventDispatcherInterface {
        return parent::getEventDispatcher();
    }

    /**
     * {@inheritdoc}
     */
    public function getFormHelper(): ?FormHelper {
        return parent::getFormHelper();
    }

    /**
     * {@inheritdoc}
     */
    public function getKernelEventListener(): ?KernelEventListener {
        return parent::getKernelEventListener();
    }

    /**
     * {@inheritdoc}
     */
    public function getLogger(): ?LoggerInterface {
        return parent::getLogger();
    }

    /**
     * {@inheritdoc}
     */
    public function getRepositoryHelper(): ?RepositoryHelper {
        return parent::getRepositoryHelper();
    }

    /**
     * {@inheritdoc}
     */
    public function getRouter(): ?RouterInterface {
        return parent::getRouter();
    }

    /**
     * {@inheritdoc}
     */
    public function getSession(): ?SessionInterface {
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
    public function getTwig(): ?Environment {
        return parent::getTwig();
    }

    /**
     * {@inheritdoc}
     */
    public function hasRolesOrRedirect(array $roles, bool $or, string $redirectUrl, string $originUrl = ""): bool {
        return parent::hasRolesOrRedirect($roles, $or, $redirectUrl, $originUrl);
    }

    /**
     * {@inheritdoc}
     */
    public function newDefaultJsonResponseData(bool $success, array $data, string $message = null): DefaultJsonResponseDataInterface {
        return parent::newDefaultJsonResponseData($success, $data, $message);
    }

    /**
     * {@inheritdoc}
     */
    public function notify(string $eventName, NotificationInterface $notification): ?NotificationEvent {
        return parent::notify($eventName, $notification);
    }

    /**
     * {@inheritdoc}
     */
    public function toast(string $eventName, ToastInterface $toast): ?ToastEvent {
        return parent::toast($eventName, $toast);
    }

    /**
     * {@inheritdoc}
     */
    public function translate(string $id, array $parameters = [], string $domain = null, string $locale = null): string {
        return parent::translate($id, $parameters, $domain, $locale);
    }
}
