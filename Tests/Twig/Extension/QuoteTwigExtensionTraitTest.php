<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension;

use WBW\Bundle\CoreBundle\Manager\QuoteManager;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\TestQuoteTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\QuoteTwigExtension;

/**
 * Quote Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class QuoteTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the setQuoteTwigExtension() method.
     *
     * @return void
     */
    public function testSetQuoteTwigExtension(): void {

        // Set a Quote Twig extension mock.
        $quoteTwigExtension = new QuoteTwigExtension($this->twigEnvironment, new QuoteManager($this->logger));

        $obj = new TestQuoteTwigExtensionTrait();

        $obj->setQuoteTwigExtension($quoteTwigExtension);
        $this->assertSame($quoteTwigExtension, $obj->getQuoteTwigExtension());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestQuoteTwigExtensionTrait();

        $this->assertNull($obj->getQuoteTwigExtension());
    }
}
