<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute;

use Doctrine\Common\Collections\ArrayCollection;
use WBW\Bundle\CoreBundle\Model\Attribute\CollectionGroupsTrait;

/**
 * Test collection groups trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Model\Attribute
 */
class TestCollectionGroupsTrait {

    use CollectionGroupsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setGroups(new ArrayCollection());
    }
}
