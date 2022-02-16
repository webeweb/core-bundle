<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Form\DataTransformer;

use Exception;
use Symfony\Component\Form\Exception\UnexpectedTypeException;
use WBW\Bundle\CoreBundle\Form\DataTransformer\UsernameDataTransformer;
use WBW\Bundle\CoreBundle\Manager\UserManagerInterface;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestUser;

/**
 * Username data transformer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\DataTransformer
 */
class UsernameDataTransformerTest extends AbstractTestCase {

    /**
     * User manager.
     *
     * @var UserManagerInterface
     */
    private $userManager;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set an User manager mock.
        $this->userManager = $this->getMockBuilder(UserManagerInterface::class)->getMock();
    }

    /**
     * Tests reverseTransform()
     *
     * @return void
     */
    public function testReverseTransform(): void {

        // Set an User mock.
        $user = new TestUser();

        // Set the User manager mock.
        $this->userManager->expects($this->any())->method("findUserByUsername")->willReturn($user);

        $obj = new UsernameDataTransformer($this->userManager);

        $this->assertNull($obj->reverseTransform(null));
        $this->assertNull($obj->reverseTransform(""));
        $this->assertEquals($user, $obj->reverseTransform("username"));
    }

    /**
     * Tests reverseTransform()
     *
     * @return void
     */
    public function testReverseTransformWithUnexpectedTypeException(): void {

        $obj = new UsernameDataTransformer($this->userManager);

        try {

            $obj->reverseTransform(0);
        } catch (Exception $ex) {

            $this->assertInstanceOf(UnexpectedTypeException::class, $ex);
            $this->assertEquals('Expected argument of type "string", "integer" given', $ex->getMessage());
        }
    }

    /**
     * Tests transform()
     *
     * @return void
     */
    public function testTransform(): void {

        // Set an User mock.
        $user = new TestUser();
        $user->setUsername("username");

        $obj = new UsernameDataTransformer($this->userManager);

        $this->assertNull($obj->transform(null));
        $this->assertEquals("username", $obj->transform($user));
    }

    /**
     * Tests transform()
     *
     * @return void
     */
    public function testTransformWithUnexpectedTypeException(): void {

        $obj = new UsernameDataTransformer($this->userManager);

        try {

            $obj->transform("exception");
        } catch (Exception $ex) {

            $this->assertInstanceOf(UnexpectedTypeException::class, $ex);
            $this->assertEquals('Expected argument of type "WBW\\Bundle\\CoreBundle\\Model\\UserInterface", "string" given', $ex->getMessage());
        }
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new UsernameDataTransformer($this->userManager);

        $this->assertSame($this->userManager, $obj->getUserManager());
    }
}
