<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\EventListener;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use WBW\Bundle\CoreBundle\Component\Translation\BaseTranslatorInterface;
use WBW\Bundle\CoreBundle\Model\UserTrait;
use WBW\Bundle\CoreBundle\Service\TranslatorTrait;
use WBW\Bundle\CoreBundle\Translation\TranslationInterface;

/**
 * Security event listener.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\EventListener
 */
class SecurityEventListener {

    use TranslatorTrait;
    use UserTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.event_listener.security";

    /**
     * Constructor.
     *
     * @param BaseTranslatorInterface $translator The translator.
     * @param UserInterface|null $user The user.
     */
    public function __construct($translator, UserInterface $user = null) {
        $this->setTranslator($translator);
        $this->setUser($user);
    }

    /**
     * On interactive login.
     *
     * @param InteractiveLoginEvent $event The event.
     * @return InteractiveLoginEvent Returns the event.
     */
    public function onInteractiveLogin(InteractiveLoginEvent $event): InteractiveLoginEvent {

        $message = $this->getTranslator()->trans("message.welcome", ["{{ username }}" => $this->getUser()->getUsername()], TranslationInterface::TRANSLATION_DOMAIN);

        $event->getRequest()->getSession()->getBag("flashes")->add("welcome", $message);

        return $event;
    }
}
