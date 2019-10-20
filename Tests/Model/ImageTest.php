<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model;

use Exception;
use InvalidArgumentException;
use WBW\Bundle\CoreBundle\Model\Image;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\TestFixtures;

/**
 * Image test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model
 */
class ImageTest extends AbstractTestCase {

    /**
     * Pathnames.
     *
     * @var string[]
     */
    private $pathnames;

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set the pathnames mock.
        $this->pathnames = TestFixtures::getImages();
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("horizontal", Image::ORIENTATION_HORIZONTAL);
        $this->assertEquals("vertical", Image::ORIENTATION_VERTICAL);

        $obj = new Image($this->pathnames[0]);

        $this->assertEquals($this->pathnames[0], $obj->getPathname());

        $this->assertEquals([null, null], $obj->getDimensions());
        $this->assertNull($obj->getDirectory());
        $this->assertNull($obj->getExtension());
        $this->assertNull($obj->getFilename());
        $this->assertNull($obj->getOrientation());
        $this->assertNull($obj->getHeight());
        $this->assertNull($obj->getSize());
        $this->assertNull($obj->getWidth());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructWithInvalidArgumentException() {

        // Set a pathname mock.
        $pathname = getcwd() . "/exception.txt";

        try {

            new Image($pathname);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The pathname \"${pathname}\" was not found", $ex->getMessage());
        }
    }

    /**
     * Tests the init() method.
     *
     * @return void
     */
    public function testInit() {

        $obj = new Image($this->pathnames[1]);

        $obj->init();
        $this->assertEquals([1920, 1037], $obj->getDimensions());
        $this->assertEquals(getcwd() . "/Tests/Fixtures/Model", $obj->getDirectory());
        $this->assertEquals("png", $obj->getExtension());
        $this->assertEquals("TestImage_1920x1037.png", $obj->getFilename());
        $this->assertEquals(1037, $obj->getHeight());
        $this->assertEquals(Image::ORIENTATION_HORIZONTAL, $obj->getOrientation());
        $this->assertEquals(127373, $obj->getSize());
        $this->assertEquals(1920, $obj->getWidth());
    }

    /**
     * Tests the resize() method.
     *
     * @return void
     */
    public function testResize() {

        $pathname = str_replace(".jpg", "_thumb.jpg", $this->pathnames[0]);
        if (true === file_exists($pathname)) {
            unlink($pathname);
        }

        $obj = new Image($this->pathnames[0]);

        $obj->resize(1920 * 2, 1037 * 2, $pathname);
        $this->assertFileExists($pathname);

        list($w, $h) = getimagesize($pathname);
        $this->assertEquals(1920, $w);
        $this->assertEquals(1037, $h);
    }

    /**
     * Tests the resize() method.
     *
     * @return void
     */
    public function testResizeWithHoritontalPNG() {

        $pathname = str_replace(".png", "_thumb.png", $this->pathnames[1]);
        if (true === file_exists($pathname)) {
            unlink($pathname);
        }

        $obj = new Image($this->pathnames[1]);

        $obj->resize(1280, 768, $pathname);
        $this->assertFileExists($pathname);

        list($w, $h) = getimagesize($pathname);
        $this->assertEquals(1280, $w);
        $this->assertEquals(691, $h);
    }

    /**
     * Tests the resize() method.
     *
     * @return void
     */
    public function testResizeWithSquarePNG() {

        $pathname = str_replace(".png", "_thumb.png", $this->pathnames[2]);
        if (true === file_exists($pathname)) {
            unlink($pathname);
        }

        $obj = new Image($this->pathnames[2]);

        $obj->resize(1280, 768, $pathname);
        $this->assertFileExists($pathname);

        list($w, $h) = getimagesize($pathname);
        $this->assertEquals(1280, $w);
        $this->assertEquals(1280, $h);
    }

    /**
     * Tests the resize() method.
     *
     * @return void
     */
    public function testResizeWithVerticalPNG() {

        $pathname = str_replace(".png", "_thumb.png", $this->pathnames[3]);
        if (true === file_exists($pathname)) {
            unlink($pathname);
        }

        $obj = new Image($this->pathnames[3]);

        $obj->resize(1280, 768, $pathname);
        $this->assertFileExists($pathname);

        list($w, $h) = getimagesize($pathname);
        $this->assertEquals(414, $w);
        $this->assertEquals(768, $h);
    }
}
