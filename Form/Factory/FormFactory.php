<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Form\Factory;

use Symfony\Component\Form\FormFactoryInterface as BaseFormFactory;
use Symfony\Component\Form\FormInterface;
use WBW\Bundle\CoreBundle\Component\Form\FormFactoryTrait;
use WBW\Library\Traits\Strings\StringNameTrait;
use WBW\Library\Traits\Strings\StringTypeTrait;

/**
 * Form factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Form\Factory
 */
class FormFactory implements FormFactoryInterface {

    use FormFactoryTrait;
    use StringNameTrait;
    use StringTypeTrait;

    /**
     * Validation groups.
     *
     * @var array|null
     */
    private $validationGroups;

    /**
     * Constructor.
     *
     * @param BaseFormFactory $formFactory The form factory.
     * @param string $name The name.
     * @param string $type The type.
     * @param array|null $validationGroups The validation groups.
     */
    public function __construct(BaseFormFactory $formFactory, string $name, string $type, array $validationGroups = null) {
        $this->setFormFactory($formFactory);
        $this->setName($name);
        $this->setType($type);
        $this->setValidationGroups($validationGroups);
    }

    /**
     * {@inheritDoc}
     */
    public function createForm(array $options = []): FormInterface {

        $options = array_merge($options, [
            "validation_groups" => $this->getValidationGroups(),
        ]);

        return $this->getFormFactory()->createNamed($this->getName(), $this->getType(), null, $options);
    }

    /**
     * Get the validation groups.
     *
     * @return array|null Returns the validation groups.
     */
    public function getValidationGroups(): ?array {
        return $this->validationGroups;
    }

    /**
     * Set the validation groups.
     *
     * @param array|null $validationGroups The validation groups.
     * @return FormFactory Returns this form factory.
     */
    protected function setValidationGroups(?array $validationGroups): FormFactory {
        $this->validationGroups = $validationGroups;
        return $this;
    }
}
