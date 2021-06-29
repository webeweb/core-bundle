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

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use WBW\Bundle\CoreBundle\Translation\TranslationInterface;
use WBW\Library\Traits\Strings\StringClassTrait;

/**
 * Group form type.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Form\Type
 */
class GroupFormType extends AbstractFormType {

    use StringClassTrait;

    /**
     * Constructor.
     *
     * @param string $class The class.
     */
    public function __construct(string $class) {
        $this->setClass($class);
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->add("name", null, [
                "label" => "form.group_name",
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void {
        $resolver->setDefaults([
            "data_class"         => $this->getClass(),
            "translation_domain" => TranslationInterface::TRANSLATION_DOMAIN,
            "csrf_token_id"      => "group",
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix(): string {
        return parent::getBlockPrefix() . "_group";
    }
}