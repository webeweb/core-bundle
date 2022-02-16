<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Form\Type;

use WBW\Bundle\CoreBundle\DependencyInjection\WBWCoreExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Form\Type\TestFormType;

/**
 * Abstract form type test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Form\Type
 */
class AbstractFormTypeTest extends AbstractTestCase {

    /**
     * Tests getBlockPrefix()
     *
     * @erturn void
     */
    public function testGetBlockPrefix(): void {

        $obj = new TestFormType();

        $this->assertEquals(WBWCoreExtension::EXTENSION_ALIAS, $obj->getBlockPrefix());
    }
}
