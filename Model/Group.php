<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model;

use WBW\Bundle\CoreBundle\Model\Attribute\ArrayRolesTrait;
use WBW\Library\Traits\Integers\IntegerIdTrait;
use WBW\Library\Traits\Strings\StringNameTrait;

/**
 * Group.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Model
 * @abstract
 */
abstract class Group implements GroupInterface {

    use ArrayRolesTrait;
    use IntegerIdTrait;
    use StringNameTrait;

    /**
     * Constructor.
     *
     * @param string $name The name.
     * @param string[] $roles The roles.
     */
    public function __construct(string $name, array $roles = []) {
        $this->setName($name);
        $this->setRoles($roles);
    }
}
