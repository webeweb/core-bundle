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
use Symfony\Component\EventDispatcher\Event;
use WBW\Bundle\CoreBundle\Exception\RedirectResponseException;
use WBW\Bundle\CoreBundle\Helper\FormHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;

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
     * {@inheritdoc}
     */
    protected function setUp() {
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
     */
    public function testCheckCollection() {

        $obj = new FormHelper($this->objectManager, $this->eventDispatcher);

        $this->assertNull($obj->checkCollection($this->collection, "notification", "redirectURL"));
    }

    /**
     * Tests the checkCollection() method.
     *
     * @return void
     */
    public function testCheckCollectionWithIllegalArgumentException() {

        $obj = new FormHelper($this->objectManager, $this->eventDispatcher);

        try {

            $obj->checkCollection(null, "notification", "redirectURL");
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The collection must be a countable", $ex->getMessage());
        }
    }

    /**
     * Tests the checkCollection() method.
     *
     * @return void
     */
    public function testCheckCollectionWithRedirectResponseException() {

        // Set the Event dispatcher mock.
        $this->eventDispatcher->expects($this->any())->method("hasListeners")->willReturn(true);
        $this->eventDispatcher->expects($this->any())->method("dispatch")->willReturnCallback(function($eventName, Event $event) {
            return $event;
        });

        $obj = new FormHelper($this->objectManager, $this->eventDispatcher);

        try {

            $obj->checkCollection($this->collection, "notification", "redirectURL", 11);
        } catch (Exception $ex) {

            $this->assertInstanceOf(RedirectResponseException::class, $ex);
            $this->assertEquals("redirectURL", $ex->getRedirectURL());
        }
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FormHelper($this->objectManager, $this->eventDispatcher);

        $this->assertEquals("webeweb.core.helper.form", FormHelper::SERVICE_NAME);
        $this->assertSame($this->objectManager, $obj->getObjectManager());
    }

    /**
     * Tests the onPostHandleRequestWithCollection() method.
     *
     * @return void
     */
    public function testOnPostRequestWithCollection() {

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
    public function testOnPreHandleRequestWithCollection() {

        $obj = new FormHelper($this->objectManager, $this->eventDispatcher);

        $res = $obj->onPreHandleRequestWithCollection($this->collection);
        $this->assertEquals(10, $res->count());

        $this->assertNotSame($res, $this->collection);

        for ($i = 0; $i < 10; ++$i) {
            $this->assertSame($this->collection->get($i), $res->get($i));
        }
    }

}
