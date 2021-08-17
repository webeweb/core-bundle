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

use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use WBW\Bundle\CoreBundle\Translation\TranslatorInterface;
use WBW\Library\Traits\Strings\StringClassTrait;

/**
 * Resetting form type.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Form\Type
 */
class ResettingFormType extends AbstractFormType {

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
            ->add("plainPassword", RepeatedType::class, [
                "type"            => PasswordType::class,
                "options"         => [
                    "attr" => [
                        "autocomplete" => "new-password",
                    ],
                ],
                "first_options"   => [
                    "label" => "form.new_password",
                ],
                "second_options"  => [
                    "label" => "form.new_password_confirmation",
                ],
                "invalid_message" => "fos_user.password.mismatch",
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void {
        $resolver->setDefaults([
            "data_class"         => $this->getClass(),
            "translation_domain" => TranslatorInterface::DOMAIN,
            "csrf_token_id"      => "resetting",
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix(): string {
        return parent::getBlockPrefix() . "_resetting";
    }
}