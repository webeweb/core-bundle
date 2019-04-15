<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Quote;

use Exception;
use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use WBW\Bundle\CoreBundle\Quote\QuoteProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Quote provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Quote
 */
class QuoteProviderTest extends AbstractTestCase {

    /**
     * Filename.
     *
     * @var string
     */
    private $filename;

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        $this->filename = getcwd() . "/Resources/translations/WorldsWisdom.fr.yml";
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new QuoteProvider($this->filename);

        $this->assertEquals($this->filename, $obj->getFilename());
        $this->assertEquals([], $obj->getAuthors());
        $this->assertEquals([], $obj->getQuotes());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructWithFileNotFoundException() {

        try {

            new QuoteProvider("exception");
        } catch (Exception $ex) {

            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"exception\" was not found", $ex->getMessage());
        }
    }

    /**
     * Tests the parse() method.
     *
     * @return void
     */
    public function testParse() {

        $obj = new QuoteProvider($this->filename);

        $obj->parse();
        $this->assertCount(171, $obj->getAuthors());
        $this->assertCount(366, $obj->getQuotes());
    }
}
