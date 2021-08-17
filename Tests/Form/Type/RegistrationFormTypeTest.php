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

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use WBW\Bundle\CoreBundle\DependencyInjection\WBWCoreExtension;
use WBW\Bundle\CoreBundle\Form\Type\RegistrationFormType;
use WBW\Bundle\CoreBundle\Model\User;
use WBW\Bundle\CoreBundle\Tests\AbstractFormTypeTestCase;
use WBW\Bundle\CoreBundle\Translation\TranslatorInterface;

/**
 * Registration form type test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\Type
 */
class RegistrationFormTypeTest extends AbstractFormTypeTestCase {

    /**
     * Tests the buildForm() method.
     *
     * @return void
     */
    public function testBuildForm(): void {

        $obj = new RegistrationFormType(User::class);

        $this->assertNull($obj->buildForm($this->formBuilder, []));

        $this->assertCount(3, $this->childs);

        $this->assertArrayHasKey("username", $this->childs);
        $this->assertEquals(null, $this->childs["username"]["type"]);
        $this->assertEquals("form.username", $this->childs["username"]["options"]["label"]);

        $this->assertArrayHasKey("email", $this->childs);
        $this->assertEquals(EmailType::class, $this->childs["email"]["type"]);
        $this->assertEquals("form.email", $this->childs["email"]["options"]["label"]);

        $this->assertArrayHasKey("plainPassword", $this->childs);
        $this->assertEquals(RepeatedType::class, $this->childs["plainPassword"]["type"]);
        $this->assertEquals(PasswordType::class, $this->childs["plainPassword"]["options"]["type"]);
        $this->assertEquals("new-password", $this->childs["plainPassword"]["options"]["options"]["attr"]["autocomplete"]);
        $this->assertEquals("form.new_password", $this->childs["plainPassword"]["options"]["first_options"]["label"]);
        $this->assertEquals("form.new_password_confirmation", $this->childs["plainPassword"]["options"]["second_options"]["label"]);
        $this->assertEquals("fos_user.password.mismatch", $this->childs["plainPassword"]["options"]["invalid_message"]);
    }

    /**
     * Tests the configureOptions() method.
     *
     * @return void
     */
    public function testConfigureOptions(): void {

        $obj = new RegistrationFormType(User::class);

        $this->assertNull($obj->configureOptions($this->resolver));

        $res = [
            "data_class"         => User::class,
            "translation_domain" => TranslatorInterface::DOMAIN,
            "csrf_token_id"      => "registration",
        ];
        $this->assertEquals($res, $this->defaults);
    }

    /**
     * Tests the getBlockPrefix() method.
     *
     * @return void
     */
    public function testGetBlockPrefix(): void {

        $obj = new RegistrationFormType(User::class);

        $this->assertEquals(WBWCoreExtension::EXTENSION_ALIAS . "_registration", $obj->getBlockPrefix());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RegistrationFormType(User::class);

        $this->assertEquals(User::class, $obj->getClass());
    }
}