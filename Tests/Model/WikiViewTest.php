<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model;

use WBW\Bundle\CoreBundle\Model\WikiView;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Wiki view model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model
 */
class WikiViewTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new WikiView("category", "package", "page", "title");

        $this->assertEquals("Core", $obj->getBundle());
        $this->assertEquals("category", $obj->getCategory());
        $this->assertEquals("package", $obj->getPackage());
        $this->assertEquals("page", $obj->getPage());
        $this->assertEquals("title", $obj->getTitle());
    }

    /**
     * Tests the find() method.
     *
     * @return void
     */
    public function testFind() {

        // Set a Wiki view mock.
        $wikiView = new WikiView("category", "package", "page", "title");

        $res = WikiView::find([$wikiView], "category", "package", "title");
        $this->assertSame($wikiView, $res);
    }

    /**
     * Tests the getView() method.
     *
     * @return void
     */
    public function testGetView() {

        $obj = new WikiView("Category", "Package", "Page", "Title");

        $res = "@Core/Wiki/category/package/page.html.twig";
        $this->assertEquals($res, $obj->getView());
    }

    /**
     * Tests the setBundle() method.
     *
     * @return void
     */
    public function testSetBundle() {

        $obj = new WikiView("category", "package", "page", "title");

        $obj->setBundle("bundle");
        $this->assertEquals("bundle", $obj->getBundle());
    }

    /**
     * Tests the setCategory() method.
     *
     * @return void
     */
    public function testSetCategory() {

        $obj = new WikiView("category", "package", "page", "title");

        $obj->setCategory("category2");
        $this->assertEquals("category2", $obj->getCategory());
    }

    /**
     * Tests the setPackage() method.
     *
     * @return void
     */
    public function testSetPackage() {

        $obj = new WikiView("category", "package", "page", "title");

        $obj->setPackage("package2");
        $this->assertEquals("package2", $obj->getPackage());
    }

    /**
     * Tests the setPage() method.
     *
     * @return void
     */
    public function testSetPage() {

        $obj = new WikiView("category", "package", "page", "title");

        $obj->setPage("page2");
        $this->assertEquals("page2", $obj->getPage());
    }

    /**
     * Tests the setTitle() method.
     *
     * @return void
     */
    public function testSetTitle() {

        $obj = new WikiView("category", "package", "page", "title");

        $obj->setTitle("title2");
        $this->assertEquals("title2", $obj->getTitle());
    }

}
