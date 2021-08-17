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

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Validator\Constraints\NotBlank;
use WBW\Bundle\CoreBundle\Translation\TranslatorInterface;
use WBW\Library\Traits\Strings\StringClassTrait;

/**
 * Profile form type.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Form\Type
 */
class ProfileFormType extends AbstractFormType {

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

        $constraintsOptions = [
            "message" => "fos_user.current_password.invalid",
        ];

        if (false === empty($options["validation_groups"])) {
            $constraintsOptions["groups"] = [reset($options["validation_groups"])];
        }

        $builder
            ->add("username", null, [
                "label" => "form.username",
            ])
            ->add("email", EmailType::class, [
                "label" => "form.email"])
            ->add("current_password", PasswordType::class, [
                "label"       => "form.current_password",
                "mapped"      => false,
                "constraints" => [
                    new NotBlank(),
                    new UserPassword($constraintsOptions),
                ],
                "attr"        => [
                    "autocomplete" => "current-password",
                ],
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void {
        $resolver->setDefaults([
            "data_class"         => $this->getClass(),
            "translation_domain" => TranslatorInterface::DOMAIN,
            "csrf_token_id"      => "profile",
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix(): string {
        return parent::getBlockPrefix() . "_profile";
    }
}