<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Model;

use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\CoreBundle\Model\Attribute\ArrayRolesTrait;
use WBW\Library\Traits\Strings\StringPasswordTrait;
use WBW\Library\Traits\Strings\StringSaltTrait;
use WBW\Library\Traits\Strings\StringUsernameTrait;

/**
 * Test user.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Model
 */
class TestUser implements UserInterface {

    use ArrayRolesTrait;
    use StringSaltTrait;
    use StringPasswordTrait;
    use StringUsernameTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials() {
        // NOTHING TO DO
    }
}
