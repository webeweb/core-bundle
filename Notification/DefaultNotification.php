<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Notification;

/**
 * Default notification.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Notification
 */
class DefaultNotification extends AbstractNotification {

    /**
     * Constructor.
     *
     * @param string $type The type.
     * @param string $content The content.
     */
    public function __construct($type, $content) {
        parent::__construct($type, $content);
    }

}
