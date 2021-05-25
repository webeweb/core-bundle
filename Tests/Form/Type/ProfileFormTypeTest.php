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
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Validator\Constraints\NotBlank;
use WBW\Bundle\CoreBundle\DependencyInjection\WBWCoreExtension;
use WBW\Bundle\CoreBundle\Form\Type\ProfileFormType;
use WBW\Bundle\CoreBundle\Model\User;
use WBW\Bundle\CoreBundle\Tests\AbstractFormTypeTestCase;
use WBW\Bundle\CoreBundle\Translation\TranslationInterface;

/**
 * Profile form type test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\Type
 */
class ProfileFormTypeTest extends AbstractFormTypeTestCase {

    /**
     * Tests the buildForm() method.
     *
     * @return void
     */
    public function testBuildForm(): void {

        $obj = new ProfileFormType(User::class);

        $this->assertNull($obj->buildForm($this->formBuilder, []));

        $this->assertCount(3, $this->childs);

        $this->assertArrayHasKey("username", $this->childs);
        $this->assertEquals(null, $this->childs["username"]["type"]);
        $this->assertEquals("form.username", $this->childs["username"]["options"]["label"]);

        $this->assertArrayHasKey("email", $this->childs);
        $this->assertEquals(EmailType::class, $this->childs["email"]["type"]);
        $this->assertEquals("form.email", $this->childs["email"]["options"]["label"]);

        $this->assertArrayHasKey("current_password", $this->childs);
        $this->assertEquals(PasswordType::class, $this->childs["current_password"]["type"]);
        $this->assertEquals("form.current_password", $this->childs["current_password"]["options"]["label"]);
        $this->assertEquals(false, $this->childs["current_password"]["options"]["mapped"]);
        $this->assertInstanceOf(NotBlank::class, $this->childs["current_password"]["options"]["constraints"][0]);
        $this->assertInstanceOf(UserPassword::class, $this->childs["current_password"]["options"]["constraints"][1]);
        $this->assertEquals("current-password", $this->childs["current_password"]["options"]["attr"]["autocomplete"]);
    }

    /**
     * Tests the configureOptions() method.
     *
     * @return void
     */
    public function testConfigureOptions(): void {

        $obj = new ProfileFormType(User::class);

        $this->assertNull($obj->configureOptions($this->resolver));

        $res = [
            "data_class"         => User::class,
            "translation_domain" => TranslationInterface::TRANSLATION_DOMAIN,
            "csrf_token_id"      => "profile",
        ];
        $this->assertEquals($res, $this->defaults);
    }

    /**
     * Tests the getBlockPrefix() method.
     *
     * @return void
     */
    public function testGetBlockPrefix(): void {

        $obj = new ProfileFormType(User::class);

        $this->assertEquals(WBWCoreExtension::EXTENSION_ALIAS . "_profile", $obj->getBlockPrefix());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ProfileFormType(User::class);

        $this->assertEquals(User::class, $obj->getClass());
    }
}