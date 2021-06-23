<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\UnexpectedTypeException;
use WBW\Bundle\CoreBundle\Manager\UserManagerInterface;
use WBW\Bundle\CoreBundle\Manager\UserManagerTrait;
use WBW\Bundle\CoreBundle\Model\UserInterface;

/**
 * Username data transformer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Form\DataTransformer
 */
class UsernameDataTransformer implements DataTransformerInterface {

    use UserManagerTrait;

    /**
     * Constructor.
     *
     * @param UserManagerInterface $userManager The user manager.
     */
    public function __construct(UserManagerInterface $userManager) {
        $this->setUserManager($userManager);
    }

    /**
     * {@inheritDoc}
     */
    public function reverseTransform($value) {

        if (null === $value || "" === $value) {
            return null;
        }

        if (false === is_string($value)) {
            throw new UnexpectedTypeException($value, "string");
        }

        return $this->getUserManager()->findUserByUsername($value);
    }

    /**
     * {@inheritDoc}
     */
    public function transform($value) {

        if (null === $value) {
            return null;
        }

        if (false === ($value instanceof UserInterface)) {
            throw new UnexpectedTypeException($value, UserInterface::class);
        }

        return $value->getUsername();
    }
}