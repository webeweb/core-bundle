<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Helper;

use Countable;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Persistence\ObjectManager;
use InvalidArgumentException;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\Event\NotificationEvents;
use WBW\Bundle\CoreBundle\Exception\RedirectResponseException;
use WBW\Bundle\CoreBundle\Notification\NotificationFactory;
use WBW\Bundle\CoreBundle\Service\EventDispatcherTrait;
use WBW\Bundle\CoreBundle\Service\ObjectManagerTrait;

/**
 * Form helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Helper
 */
class FormHelper {

    use EventDispatcherTrait;
    use ObjectManagerTrait;

    /**
     * Service name.
     *
     * @avr string
     */
    const SERVICE_NAME = "wbw.core.helper.form";

    /**
     * Constructor.
     *
     * @param ObjectManager $objectManager The object manager.
     * @param EventDispatcherInterface $eventDispatcher The event dispatcher.
     */
    public function __construct(ObjectManager $objectManager, EventDispatcherInterface $eventDispatcher) {
        $this->setEventDispatcher($eventDispatcher);
        $this->setObjectManager($objectManager);
    }

    /**
     * Check a collection.
     *
     * @param Countable $collection The collection.
     * @param string $notification The notification.
     * @param string $redirectURL The redirect URL.
     * @param int $expected The expected count.
     * @throws InvalidArgumentException Throws an invalid argument exception if collection is null.
     * @throws RedirectResponseException Throws a redirect response exception if the collection is less than $expected.
     */
    public function checkCollection($collection, $notification, $redirectURL, $expected = 1) {

        if (null === $collection || (false === is_array($collection) && false === ($collection instanceof Countable))) {
            throw new InvalidArgumentException("The collection must be a countable");
        }
        if ($expected <= count($collection)) {
            return;
        }

        $eventName = NotificationEvents::NOTIFICATION_WARNING;

        if (null !== $this->getEventDispatcher() && true === $this->getEventDispatcher()->hasListeners($eventName)) {

            $notification = NotificationFactory::newWarningNotification($notification);
            $event        = new NotificationEvent($eventName, $notification);

            $this->getEventDispatcher()->dispatch($eventName, $event);
        }

        throw new RedirectResponseException($redirectURL, null);
    }

    /**
     * On post handle request with collection.
     *
     * @param Collection $oldCollection The old collection.
     * @param Collection $newCollection The new collection.
     * @return int Returns the deleted count.
     */
    public function onPostHandleRequestWithCollection(Collection $oldCollection, Collection $newCollection) {
        $deleted = 0;
        foreach ($oldCollection as $current) {
            if (true === $newCollection->contains($current)) {
                continue;
            }
            $this->getObjectManager()->remove($current);
            ++$deleted;
        }
        return $deleted;
    }

    /**
     * On pre handle request with collection.
     *
     * @param Collection $collection The collection.
     * @return Collection Returns the cloned collection.
     */
    public function onPreHandleRequestWithCollection(Collection $collection) {
        $output = new ArrayCollection();
        foreach ($collection as $current) {
            $output->add($current);
        }
        return $output;
    }
}
