<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Library\Traits\Integers\IntegerIdTrait;
use WBW\Library\Traits\Strings\ArrayRolesTrait;
use WBW\Library\Traits\Strings\StringPasswordTrait;
use WBW\Library\Traits\Strings\StringSaltTrait;
use WBW\Library\Traits\Strings\StringUsernameTrait;

/**
 * Default user.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Model
 */
class DefaultUser implements UserInterface {

    use ArrayRolesTrait;
    use IntegerIdTrait;
    use StringSaltTrait;
    use StringPasswordTrait;
    use StringUsernameTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setRoles([]);
    }

    /**
     * {@inheritdoc}
     */
    public function eraseCredentials() {
        // NOTHING TO DO
    }
}
