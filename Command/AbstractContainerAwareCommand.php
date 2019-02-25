<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Command;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Translation\TranslatorInterface;

/**
 * Abstract container aware command.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Command
 * @abstract
 */
abstract class AbstractContainerAwareCommand extends ContainerAwareCommand {

    /**
     * Get the event dispatcher.
     *
     * @return EventDispatcherInterface Returns the event dispatcher.
     * @throws ServiceCircularReferenceException Throws a service circular exception when a circular reference is detected.
     * @throws ServiceNotFoundException Throws a service not found hen the service is not defined.
     */
    protected function getEventDispatcher() {
        return $this->getContainer()->get("event_dispatcher");
    }

    /**
     * Get the logger.
     *
     * @return LoggerInterface Returns the logger.
     * @throws ServiceCircularReferenceException Throws a service circular exception when a circular reference is detected.
     * @throws ServiceNotFoundException Throws a service not found hen the service is not defined.
     */
    protected function getLogger() {
        return $this->getContainer()->get("logger");
    }

    /**
     * Get the router.
     *
     * @return RouterInterface Returns the router.
     * @throws ServiceCircularReferenceException Throws a service circular exception when a circular reference is detected.
     * @throws ServiceNotFoundException Throws a service not found hen the service is not defined.
     */
    protected function getRouter() {
        return $this->getContainer()->get("router");
    }

    /**
     * Get the translator.
     *
     * @return TranslatorInterface Returns the translator.
     * @throws ServiceCircularReferenceException Throws a service circular exception when a circular reference is detected.
     * @throws ServiceNotFoundException Throws a service not found hen the service is not defined.
     */
    protected function getTranslator() {
        return $this->getContainer()->get("translator");
    }
}
