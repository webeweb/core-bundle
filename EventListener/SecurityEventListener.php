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
use Symfony\Contracts\Translation\TranslatorInterface;
use WBW\Bundle\CoreBundle\Helper\UserHelper;
use WBW\Bundle\CoreBundle\Security\Core\User\UserTrait;
use WBW\Bundle\CoreBundle\Translation\TranslatorTrait;
use WBW\Bundle\CoreBundle\WBWCoreBundle;

/**
 * Security event listener.
 *
 * @author webeweb <https://github.com/webeweb>
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
     * @param TranslatorInterface $translator The translator.
     * @param UserInterface|null $user The user.
     */
    public function __construct(TranslatorInterface $translator, UserInterface $user = null) {
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

        $message = $this->getTranslator()->trans("message.welcome", [
            "{{ identifier }}" => UserHelper::getIdentifier($this->getUser()),
        ], WBWCoreBundle::getTranslationDomain());

        $event->getRequest()->getSession()->getBag("flashes")->add("welcome", $message);

        return $event;
    }
}
