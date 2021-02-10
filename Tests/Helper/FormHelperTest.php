<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Helper;

use Doctrine\Common\Collections\ArrayCollection;
use Exception;
use InvalidArgumentException;
use WBW\Bundle\CoreBundle\Exception\RedirectResponseException;
use WBW\Bundle\CoreBundle\Helper\FormHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\TestCaseHelper;

/**
 * Form helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Helper
 */
class FormHelperTest extends AbstractTestCase {

    /**
     * Collection.
     *
     * @var Collection
     */
    private $collection;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Collection mock.
        $this->collection = new ArrayCollection();
        for ($i = 0; $i < 10; ++$i) {
            $this->collection->add("element" . $i);
        }
    }

    /**
     * Tests the checkCollection() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCheckCollection(): void {

        $obj = new FormHelper($this->objectManager, $this->eventDispatcher);

        $this->assertNull($obj->checkCollection($this->collection, "notification", "redirectURL"));
        $this->assertNull($obj->checkCollection(["element0"], "notification", "redirectURL"));
    }

    /**
     * Tests the checkCollection() method.
     *
     * @return void
     */
    public function testCheckCollectionWithIllegalArgumentException(): void {

        $obj = new FormHelper($this->objectManager, $this->eventDispatcher);

        try {

            $obj->checkCollection(null, "notification", "redirectURL");
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The collection must be a countable", $ex->getMessage());
        }
    }

    /**
     * Tests the checkCollection() method.
     *
     * @return void
     */
    public function testCheckCollectionWithRedirectResponseException(): void {

        // Set a dispatch function.
        $dispatchFunction = TestCaseHelper::getEventDispatcherDispatchFunction();

        // Set the Event dispatcher mock.
        $this->eventDispatcher->expects($this->any())->method("hasListeners")->willReturn(true);
        $this->eventDispatcher->expects($this->any())->method("dispatch")->willReturnCallback($dispatchFunction);

        $obj = new FormHelper($this->objectManager, $this->eventDispatcher);

        try {

            $obj->checkCollection($this->collection, "notification", "redirectURL", 11);
        } catch (Exception $ex) {

            $this->assertInstanceOf(RedirectResponseException::class, $ex);
            $this->assertEquals("redirectURL", $ex->getRedirectURL());
        }
    }

    /**
     * Tests the onPostHandleRequestWithCollection() method.
     *
     * @return void
     */
    public function testOnPostRequestWithCollection(): void {

        $obj = new FormHelper($this->objectManager, $this->eventDispatcher);

        // Set a Collection mocks.
        $oldCollection = $this->collection;
        $newCollection = $obj->onPreHandleRequestWithCollection($oldCollection);
        $newCollection->removeElement("element1");

        $this->assertEquals(10, $oldCollection->count());
        $this->assertEquals(9, $newCollection->count());

        $res = $obj->onPostHandleRequestWithCollection($oldCollection, $newCollection);
        $this->assertEquals(1, $res);

        $this->assertEquals(10, $oldCollection->count());
        $this->assertEquals(9, $newCollection->count());
    }

    /**
     * Tests the onPreHandleRequestWithCollection() method.
     *
     * @return void
     */
    public function testOnPreHandleRequestWithCollection(): void {

        $obj = new FormHelper($this->objectManager, $this->eventDispatcher);

        $res = $obj->onPreHandleRequestWithCollection($this->collection);
        $this->assertEquals(10, $res->count());

        $this->assertNotSame($res, $this->collection);

        for ($i = 0; $i < 10; ++$i) {
            $this->assertSame($this->collection->get($i), $res->get($i));
        }
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FormHelper($this->objectManager, $this->eventDispatcher);

        $this->assertEquals("wbw.core.helper.form", FormHelper::SERVICE_NAME);
        $this->assertSame($this->objectManager, $obj->getObjectManager());
    }
}
