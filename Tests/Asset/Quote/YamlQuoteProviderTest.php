<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Asset\Quote;

use DateInterval;
use DateTime;
use Exception;
use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use WBW\Bundle\CoreBundle\Asset\Quote\YamlQuoteProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * YAML Quote provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Quote
 */
class YamlQuoteProviderTest extends AbstractTestCase {

    /**
     * Filename.
     *
     * @var string
     */
    private $filename;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        $this->filename = realpath(__DIR__ . "/../../../Resources/translations/WorldsWisdom.fr.yml");
    }

    /**
     * Tests the init() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testInit(): void {

        // Set a Date mock.
        $date = new DateTime("2016-01-01");

        $obj = new YamlQuoteProvider($this->filename);

        $obj->init();
        $this->assertCount(171, $obj->getAuthors());
        $this->assertCount(366, $obj->getQuotes());

        do {

            $day = $date->format("m.d");
            $this->assertArrayHasKey($day, $obj->getQuotes());

            $this->assertNotNull($obj->getQuotes()[$day]->getDate());
            $this->assertEquals($day, $obj->getQuotes()[$day]->getDate()->format("m.d"));

            $this->assertNotNull($obj->getQuotes()[$day]->getAuthor());
            $this->assertNotNull($obj->getQuotes()[$day]->getContent());
            $this->assertNotNull($obj->getQuotes()[$day]->getSaint());

            $date->add(new DateInterval("P1D"));
        } while ("2017" !== $date->format("Y"));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new YamlQuoteProvider($this->filename);

        $this->assertEquals($this->filename, $obj->getFilename());
        $this->assertEquals([], $obj->getAuthors());
        $this->assertEquals("WorldsWisdom.fr", $obj->getDomain());
        $this->assertEquals([], $obj->getQuotes());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructWithFileNotFoundException(): void {

        try {

            new YamlQuoteProvider("exception");
        } catch (Exception $ex) {

            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals('The file "exception" was not found', $ex->getMessage());
        }
    }
}
