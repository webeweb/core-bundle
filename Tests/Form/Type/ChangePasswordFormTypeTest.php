<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Validator\Constraints\NotBlank;
use WBW\Bundle\CoreBundle\DependencyInjection\WBWCoreExtension;
use WBW\Bundle\CoreBundle\Form\Type\ChangePasswordFormType;
use WBW\Bundle\CoreBundle\Model\Group;
use WBW\Bundle\CoreBundle\Model\User;
use WBW\Bundle\CoreBundle\Tests\AbstractFormTypeTestCase;
use WBW\Bundle\CoreBundle\Translation\TranslatorInterface;

/**
 * Change password form type test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\Type
 */
class ChangePasswordFormTypeTest extends AbstractFormTypeTestCase {

    /**
     * Tests the buildForm() method.
     *
     * @return void
     */
    public function testBuildForm(): void {

        $obj = new ChangePasswordFormType(Group::class);

        $this->assertNull($obj->buildForm($this->formBuilder, [
            "validation_groups" => [""],
        ]));

        $this->assertCount(2, $this->children);

        $this->assertArrayHasKey("current_password", $this->children);
        $this->assertEquals(PasswordType::class, $this->children["current_password"]["type"]);
        $this->assertEquals("form.current_password", $this->children["current_password"]["options"]["label"]);
        $this->assertEquals(false, $this->children["current_password"]["options"]["mapped"]);
        $this->assertInstanceOf(NotBlank::class, $this->children["current_password"]["options"]["constraints"][0]);
        $this->assertInstanceOf(UserPassword::class, $this->children["current_password"]["options"]["constraints"][1]);
        $this->assertEquals("current-password", $this->children["current_password"]["options"]["attr"]["autocomplete"]);

        $this->assertArrayHasKey("plainPassword", $this->children);
        $this->assertEquals(RepeatedType::class, $this->children["plainPassword"]["type"]);
        $this->assertEquals(PasswordType::class, $this->children["plainPassword"]["options"]["type"]);
        $this->assertEquals("new-password", $this->children["plainPassword"]["options"]["options"]["attr"]["autocomplete"]);
        $this->assertEquals("form.new_password", $this->children["plainPassword"]["options"]["first_options"]["label"]);
        $this->assertEquals("form.new_password_confirmation", $this->children["plainPassword"]["options"]["second_options"]["label"]);
        $this->assertEquals("fos_user.password.mismatch", $this->children["plainPassword"]["options"]["invalid_message"]);
    }

    /**
     * Tests the configureOptions() method.
     *
     * @return void
     */
    public function testConfigureOptions(): void {

        $obj = new ChangePasswordFormType(User::class);

        $this->assertNull($obj->configureOptions($this->resolver));

        $res = [
            "data_class"         => User::class,
            "translation_domain" => TranslatorInterface::DOMAIN,
            "csrf_token_id"      => "group",
        ];
        $this->assertEquals($res, $this->defaults);
    }

    /**
     * Tests the getBlockPrefix() method.
     *
     * @return void
     */
    public function testGetBlockPrefix(): void {

        $obj = new ChangePasswordFormType(User::class);

        $this->assertEquals(WBWCoreExtension::EXTENSION_ALIAS . "_change_password", $obj->getBlockPrefix());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChangePasswordFormType(User::class);

        $this->assertEquals(User::class, $obj->getClass());
    }
}
