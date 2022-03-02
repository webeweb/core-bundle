<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Component\Form;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Exception;
use InvalidArgumentException;
use WBW\Bundle\CoreBundle\Component\Form\FormHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\TestCaseHelper;
use WBW\Library\Symfony\Exception\RedirectResponseException;

/**
 * Form helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Component\Form
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
     * Tests checkCollection()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCheckCollection(): void {

        $obj = new FormHelper($this->entityManager, $this->eventDispatcher);

        $this->assertNull($obj->checkCollection($this->collection, "notification", "redirectURL"));
        $this->assertNull($obj->checkCollection(["element0"], "notification", "redirectURL"));
    }

    /**
     * Tests checkCollection()
     *
     * @return void
     */
    public function testCheckCollectionWithIllegalArgumentException(): void {

        $obj = new FormHelper($this->entityManager, $this->eventDispatcher);

        try {

            $obj->checkCollection(null, "notification", "redirectURL");
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The collection must be a countable", $ex->getMessage());
        }
    }

    /**
     * Tests checkCollection()
     *
     * @return void
     */
    public function testCheckCollectionWithRedirectResponseException(): void {

        // Set a dispatch function.
        $dispatchFunction = TestCaseHelper::getEventDispatcherDispatchFunction();

        // Set the Event dispatcher mock.
        $this->eventDispatcher->expects($this->any())->method("hasListeners")->willReturn(true);
        $this->eventDispatcher->expects($this->any())->method("dispatch")->willReturnCallback($dispatchFunction);

        $obj = new FormHelper($this->entityManager, $this->eventDispatcher);

        try {

            $obj->checkCollection($this->collection, "notification", "redirectURL", 11);
        } catch (Exception $ex) {

            $this->assertInstanceOf(RedirectResponseException::class, $ex);
            $this->assertEquals("redirectURL", $ex->getRedirectURL());
        }
    }

    /**
     * Tests onPostHandleRequestWithCollection()
     *
     * @return void
     */
    public function testOnPostRequestWithCollection(): void {

        $obj = new FormHelper($this->entityManager, $this->eventDispatcher);

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
     * Tests onPreHandleRequestWithCollection()
     *
     * @return void
     */
    public function testOnPreHandleRequestWithCollection(): void {

        $obj = new FormHelper($this->entityManager, $this->eventDispatcher);

        $res = $obj->onPreHandleRequestWithCollection($this->collection);
        $this->assertEquals(10, $res->count());

        $this->assertNotSame($res, $this->collection);

        for ($i = 0; $i < 10; ++$i) {
            $this->assertSame($this->collection->get($i), $res->get($i));
        }
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FormHelper($this->entityManager, $this->eventDispatcher);

        $this->assertEquals("wbw.core.component.form.helper", FormHelper::SERVICE_NAME);
        $this->assertSame($this->entityManager, $obj->getEntityManager());
    }
}
