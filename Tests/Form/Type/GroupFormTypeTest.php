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

use WBW\Bundle\CoreBundle\DependencyInjection\WBWCoreExtension;
use WBW\Bundle\CoreBundle\Form\Type\GroupFormType;
use WBW\Bundle\CoreBundle\Model\Group;
use WBW\Bundle\CoreBundle\Tests\AbstractFormTypeTestCase;
use WBW\Bundle\CoreBundle\Translation\TranslationInterface;

/**
 * Group form type test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\Type
 */
class GroupFormTypeTest extends AbstractFormTypeTestCase {

    /**
     * Tests the buildForm() method.
     *
     * @return void
     */
    public function testBuildForm(): void {

        $obj = new GroupFormType(Group::class);

        $this->assertNull($obj->buildForm($this->formBuilder, []));

        $this->assertCount(1, $this->childs);

        $this->assertArrayHasKey("name", $this->childs);
        $this->assertEquals(null, $this->childs["name"]["type"]);
        $this->assertEquals("form.group_name", $this->childs["name"]["options"]["label"]);
    }

    /**
     * Tests the configureOptions() method.
     *
     * @return void
     */
    public function testConfigureOptions(): void {

        $obj = new GroupFormType(Group::class);

        $this->assertNull($obj->configureOptions($this->resolver));

        $res = [
            "data_class"         => Group::class,
            "translation_domain" => TranslationInterface::TRANSLATION_DOMAIN,
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

        $obj = new GroupFormType(Group::class);

        $this->assertEquals(WBWCoreExtension::EXTENSION_ALIAS . "_group", $obj->getBlockPrefix());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new GroupFormType(Group::class);

        $this->assertEquals(Group::class, $obj->getClass());
    }
}