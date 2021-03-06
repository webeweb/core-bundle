<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use WBW\Library\Core\Model\Attribute\IntegerIdTrait;

/**
 * Test user.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Entity
 */
class TestUser extends BaseUser {

    use IntegerIdTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }
}
