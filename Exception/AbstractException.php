<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Exception;

use WBW\Library\Core\Exception\AbstractCoreException;

/**
 * Abstract exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Exception
 * @abstract
 */
abstract class AbstractException extends AbstractCoreException {

    /**
     * Constructor.
     *
     * @param string $message The message.
     * @param int $code The code.
     */
    public function __construct($message, $code) {
        parent::__construct($message, $code);
    }

}
