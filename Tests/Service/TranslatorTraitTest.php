<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Service;

use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Service\TestTranslatorTrait;

/**
 * Translator trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Service
 */
class TranslatorTraitTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestTranslatorTrait();

        $this->assertNull($obj->getTranslator());
    }

    /**
     * Tests the setTranslator() method.
     *
     * @return void
     */
    public function testSetTranslator() {

        $obj = new TestTranslatorTrait();

        $obj->setTranslator($this->translator);
        $this->assertSame($this->translator, $obj->getTranslator());
    }

}
