<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Component\Translation;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Component\Translation\TestTranslatorTrait;

/**
 * Translator trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Component\Translation
 */
class TranslatorTraitTest extends AbstractTestCase {

    /**
     * Tests the setTranslator() method.
     *
     * @return void
     */
    public function testSetTranslator(): void {

        $obj = new TestTranslatorTrait();

        $obj->setTranslator($this->translator);
        $this->assertSame($this->translator, $obj->getTranslator());
    }
}
