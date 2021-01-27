<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Component\HttpKernel\Event;

use Symfony\Component\HttpKernel\Kernel;

if (Kernel::VERSION_ID < 40300) {
    class_alias("Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent", "WBW\Bundle\CoreBundle\Component\HttpKernel\Event\BaseExceptionEvent");
} else {
    class_alias("Symfony\Component\HttpKernel\Event\ExceptionEvent", "WBW\Bundle\CoreBundle\Component\HttpKernel\Event\BaseExceptionEvent");
}
