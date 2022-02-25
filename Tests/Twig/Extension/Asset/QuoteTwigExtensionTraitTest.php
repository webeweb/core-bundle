<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension\Asset;

use WBW\Bundle\CoreBundle\Manager\Asset\QuoteManager;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\Asset\TestQuoteTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\Asset\QuoteTwigExtension;

/**
 * Quote Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension\Asset
 */
class QuoteTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests setQuoteTwigExtension()
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
}
