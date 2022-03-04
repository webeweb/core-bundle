<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Component\Form;

use Countable;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityManagerInterface;
use InvalidArgumentException;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use WBW\Bundle\CoreBundle\Doctrine\ORM\EntityManagerTrait;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\EventDispatcher\EventDispatcherHelper;
use WBW\Bundle\CoreBundle\EventDispatcher\EventDispatcherTrait;
use WBW\Library\Symfony\Exception\RedirectResponseException;
use WBW\Library\Symfony\Factory\NotificationFactory;

/**
 * Form helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Component\Form
 */
class FormHelper {

    use EventDispatcherTrait;
    use EntityManagerTrait;

    /**
     * Service name.
     *
     * @avr string
     */
    const SERVICE_NAME = "wbw.core.component.form.helper";

    /**
     * Constructor.
     *
     * @param EntityManagerInterface $entityManager The entity manager.
     * @param EventDispatcherInterface $eventDispatcher The event dispatcher.
     */
    public function __construct(EntityManagerInterface $entityManager, EventDispatcherInterface $eventDispatcher) {
        $this->setEventDispatcher($eventDispatcher);
        $this->setEntityManager($entityManager);
    }

    /**
     * Check a collection.
     *
     * @param Countable $collection The collection.
     * @param string $notification The notification.
     * @param string $redirectURL The redirect URL.
     * @param int $expected The expected count.
     * @return void
     * @throws InvalidArgumentException Throws an invalid argument exception if collection is null.
     * @throws RedirectResponseException Throws a redirect response exception if the collection count is less than $expected.
     */
    public function checkCollection($collection, string $notification, string $redirectURL, int $expected = 1): void {

        if (false === is_array($collection) && false === ($collection instanceof Countable)) {
            throw new InvalidArgumentException("The collection must be a countable");
        }
        if ($expected <= count($collection)) {
            return;
        }

        $eventName    = NotificationEvent::WARNING;
        $notification = NotificationFactory::newWarningNotification($notification);
        $event        = new NotificationEvent($eventName, $notification);

        EventDispatcherHelper::dispatch($this->getEventDispatcher(), $eventName, $event);

        throw new RedirectResponseException($redirectURL, null);
    }

    /**
     * On post handle request with collection.
     *
     * @param Collection $oldCollection The old collection.
     * @param Collection $newCollection The new collection.
     * @return int Returns the deleted count.
     */
    public function onPostHandleRequestWithCollection(Collection $oldCollection, Collection $newCollection): int {
        $deleted = 0;
        foreach ($oldCollection as $current) {
            if (true === $newCollection->contains($current)) {
                continue;
            }
            $this->getEntityManager()->remove($current);
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
    public function onPreHandleRequestWithCollection(Collection $collection): Collection {
        $output = new ArrayCollection();
        foreach ($collection as $current) {
            $output->add($current);
        }
        return $output;
    }
}
