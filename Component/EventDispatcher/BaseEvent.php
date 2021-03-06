<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Component\EventDispatcher;

use Symfony\Component\HttpKernel\Kernel;

if (Kernel::VERSION_ID < 40300) {
    class_alias("Symfony\Component\EventDispatcher\Event", "WBW\Bundle\CoreBundle\Component\EventDispatcher\BaseEvent");
} else {
    class_alias("Symfony\Contracts\EventDispatcher\Event", "WBW\Bundle\CoreBundle\Component\EventDispatcher\BaseEvent");
}
