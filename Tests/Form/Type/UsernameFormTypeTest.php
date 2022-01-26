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

use Symfony\Component\Form\Extension\Core\Type\TextType;
use WBW\Bundle\CoreBundle\DependencyInjection\WBWCoreExtension;
use WBW\Bundle\CoreBundle\Form\DataTransformer\UsernameDataTransformer;
use WBW\Bundle\CoreBundle\Form\Type\UsernameFormType;
use WBW\Bundle\CoreBundle\Manager\UserManagerInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractFormTypeTestCase;

/**
 * Username form type test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\Type
 */
class UsernameFormTypeTest extends AbstractFormTypeTestCase {

    /**
     * Username data tranformer.
     *
     * @var UsernameDataTransformer
     */
    private $usernameDataTransformer;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set an User manager mock.
        $userManager = $this->getMockBuilder(UserManagerInterface::class)->getMock();

        // Set an Username data transformer mock.
        $this->usernameDataTransformer = new UsernameDataTransformer($userManager);
    }

    /**
     * Tests the getBlockPrefix() method.
     *
     * @return void
     */
    public function testGetBlockPrefix(): void {

        $obj = new UsernameFormType($this->usernameDataTransformer);

        $this->assertEquals(WBWCoreExtension::EXTENSION_ALIAS . "_username", $obj->getBlockPrefix());
    }

    /**
     * Tests the getParent() method.
     *
     * @return void
     */
    public function testGetParent(): void {

        $obj = new UsernameFormType($this->usernameDataTransformer);

        $this->assertEquals(TextType::class, $obj->getParent());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new UsernameFormType($this->usernameDataTransformer);

        $this->assertSame($this->usernameDataTransformer, $obj->getUsernameDataTransformer());
    }
}
