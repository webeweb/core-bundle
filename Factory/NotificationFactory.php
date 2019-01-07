<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Factory;

@trigger_error(sprintf('The "%s" class is deprecated, use %s instead.', WBW\Bundle\CoreBundle\Factory\NotificationFactory::class, WBW\Bundle\CoreBundle\Notification\NotificationFactory::class), E_USER_DEPRECATED);

/**
 * Notification factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Factory
 * @deprecated
 */
class_alias("WBW\Bundle\CoreBundle\Notification\NotificationFactory", "WBW\Bundle\CoreBundle\Factory\NotificationFactory");
