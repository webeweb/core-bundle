<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use WBW\Bundle\CoreBundle\Form\DataTransformer\UsernameDataTransformer;

/**
 * Username form type.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Form\Type
 */
class UsernameFormType extends AbstractFormType {

    /**
     * Username data transformer.
     *
     * @var UsernameDataTransformer
     */
    private $usernameDataTransformer;

    /**
     * Constructor.
     *
     * @param UsernameDataTransformer $usernameDataTransformer The username data transformer.
     */
    public function __construct(UsernameDataTransformer $usernameDataTransformer) {
        $this->setUsernameDataTransformer($usernameDataTransformer);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix(): string {
        return parent::getBlockPrefix() . "_username";
    }

    /**
     * {@inheritDoc}
     */
    public function getParent() {
        return TextType::class;
    }

    /**
     * Get the username data transformer.
     *
     * @return UsernameDataTransformer Returns the username data transformer.
     */
    public function getUsernameDataTransformer(): UsernameDataTransformer {
        return $this->usernameDataTransformer;
    }

    /**
     * Set the username data transformer.
     *
     * @param UsernameDataTransformer $usernameDataTransformer The username data transformer.
     * @return UsernameFormType Returns this username form type.
     */
    protected function setUsernameDataTransformer(UsernameDataTransformer $usernameDataTransformer): UsernameFormType {
        $this->usernameDataTransformer = $usernameDataTransformer;
        return $this;
    }
}