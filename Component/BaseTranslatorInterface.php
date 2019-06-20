<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Component;

use Symfony\Component\HttpKernel\Kernel;

if (Kernel::VERSION_ID < 40200) {
    class_alias("Symfony\Component\Translation\TranslatorInterface", "WBW\Bundle\CoreBundle\Component\BaseTranslatorInterface");
} else {
    class_alias("Symfony\Contracts\Translation\TranslatorInterface", "WBW\Bundle\CoreBundle\Component\BaseTranslatorInterface");
}
