<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Provider;

use WBW\Bundle\CoreBundle\Asset\Highlighter\SyntaxHighlighter\SyntaxHighlighterStrings;
use WBW\Bundle\CoreBundle\Provider\SyntaxHighlighterProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * SyntaxHighlighter provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Provider\Asset\Highlighter
 */
class SyntaxHighlighterProviderTest extends AbstractTestCase {

    /**
     * @{inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the Translator mock.
        $this->translator->expects($this->any())->method("trans")->willReturn("");
    }

    /**
     * Tests getSyntaxHighlighterStrings()
     *
     * @return void
     */
    public function testGetSyntaxHighlighterStrings(): void {

        $obj = new SyntaxHighlighterProvider($this->translator);

        $this->assertInstanceOf(SyntaxHighlighterStrings::class, $obj->getSyntaxHighlighterStrings());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.provider.syntax_highlighter", SyntaxHighlighterProvider::SERVICE_NAME);
    }
}