<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Controller;

use Symfony\Component\HttpKernel\Kernel;

if (Kernel::VERSION_ID < 40200) {
    class_alias("Symfony\Bundle\FrameworkBundle\Controller\Controller", "WBW\Bundle\CoreBundle\Controller\BaseController");
} else {
    class_alias("Symfony\Bundle\FrameworkBundle\Controller\AbstractController", "WBW\Bundle\CoreBundle\Controller\BaseController");
}
