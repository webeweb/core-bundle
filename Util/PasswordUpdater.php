<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Util;

use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use WBW\Bundle\CoreBundle\Component\Security\Core\Encoder\EncoderFactoryTrait;
use WBW\Bundle\CoreBundle\Model\UserInterface;

/**
 * Password updater.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Util
 */
class PasswordUpdater implements PasswordUpdaterInterface {

    use EncoderFactoryTrait;

    /**
     * Constructor.
     *
     * @param EncoderFactoryInterface $encoderFactory
     */
    public function __construct(EncoderFactoryInterface $encoderFactory) {
        $this->setEncoderFactory($encoderFactory);
    }

    /**
     * {@inheritDoc}
     */
    public function hashPassword(UserInterface $user): void {

        $plainPassword = $user->getPlainPassword();
        if (0 === strlen($plainPassword)) {
            return;
        }

        $salt = null;

        $encoder = $this->encoderFactory->getEncoder($user);
        if (false === ($encoder instanceof BCryptPasswordEncoder)) {
            $salt = rtrim(str_replace('+', '.', base64_encode(random_bytes(32))), '=');
        }

        $user->setSalt($salt);

        $hashedPassword = $encoder->encodePassword($plainPassword, $user->getSalt());

        $user->setPassword($hashedPassword);
        $user->eraseCredentials();
    }
}