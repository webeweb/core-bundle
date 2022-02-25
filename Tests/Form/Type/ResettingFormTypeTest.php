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
use WBW\Bundle\CoreBundle\DependencyInjection\WBWCoreExtension;
use WBW\Bundle\CoreBundle\Form\Type\ResettingFormType;
use WBW\Bundle\CoreBundle\Model\User;
use WBW\Bundle\CoreBundle\Tests\AbstractFormTypeTestCase;
use WBW\Bundle\CoreBundle\Translation\TranslatorInterface;

/**
 * Resetting form type test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Form\Type
 */
class ResettingFormTypeTest extends AbstractFormTypeTestCase {

    /**
     * Tests buildForm()
     *
     * @return void
     */
    public function testBuildForm(): void {

        $obj = new ResettingFormType(User::class);

        $this->assertNull($obj->buildForm($this->formBuilder, []));

        $this->assertCount(1, $this->children);

        $this->assertArrayHasKey("plainPassword", $this->children);
        $this->assertEquals(RepeatedType::class, $this->children["plainPassword"]["type"]);
        $this->assertEquals(PasswordType::class, $this->children["plainPassword"]["options"]["type"]);
        $this->assertEquals("new-password", $this->children["plainPassword"]["options"]["options"]["attr"]["autocomplete"]);
        $this->assertEquals("form.new_password", $this->children["plainPassword"]["options"]["first_options"]["label"]);
        $this->assertEquals("form.new_password_confirmation", $this->children["plainPassword"]["options"]["second_options"]["label"]);
        $this->assertEquals("fos_user.password.mismatch", $this->children["plainPassword"]["options"]["invalid_message"]);
    }

    /**
     * Tests configureOptions()
     *
     * @return void
     */
    public function testConfigureOptions(): void {

        $obj = new ResettingFormType(User::class);

        $this->assertNull($obj->configureOptions($this->resolver));

        $res = [
            "data_class"         => User::class,
            "translation_domain" => TranslatorInterface::DOMAIN,
            "csrf_token_id"      => "resetting",
        ];
        $this->assertEquals($res, $this->defaults);
    }

    /**
     * Tests getBlockPrefix()
     *
     * @return void
     */
    public function testGetBlockPrefix(): void {

        $obj = new ResettingFormType(User::class);

        $this->assertEquals(WBWCoreExtension::EXTENSION_ALIAS . "_resetting", $obj->getBlockPrefix());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ResettingFormType(User::class);

        $this->assertEquals(User::class, $obj->getClass());
    }
}
