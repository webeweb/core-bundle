<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Provider\Asset;

use WBW\Bundle\CoreBundle\Asset\SyntaxHighlighterStrings;
use WBW\Bundle\CoreBundle\Provider\Asset\SyntaxHighlighterStringsProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * SyntaxHighlighter strings provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Asset
 */
class SyntaxHighlighterStringsProviderTest extends AbstractTestCase {

    /**
     * @{inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the Translator mock.
        $this->translator->expects($this->any())->method("trans")->willReturn("");
    }

    /**
     * Tests the getSyntaxHighlighterStrings() method.
     *
     * @return void
     */
    public function testGetSyntaxHighlighterStrings(): void {

        $obj = new SyntaxHighlighterStringsProvider($this->translator);

        $this->assertInstanceOf(SyntaxHighlighterStrings::class, $obj->getSyntaxHighlighterStrings());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.provider.asset.syntax_highlighter_strings", SyntaxHighlighterStringsProvider::SERVICE_NAME);
    }
}
