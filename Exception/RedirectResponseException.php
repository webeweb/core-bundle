<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Exception;

use WBW\Bundle\CoreBundle\Model\Attribute\StringOriginUrlTrait;
use WBW\Bundle\CoreBundle\Model\Attribute\StringRedirectUrlTrait;

/**
 * Redirect response exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Exception
 */
class RedirectResponseException extends AbstractException {

    use StringOriginUrlTrait;
    use StringRedirectUrlTrait;

    /**
     * Constructor.
     *
     * @param string $redirectUrl The redirect.
     * @param string|null $originUrl The route.
     */
    public function __construct(string $redirectUrl, ?string $originUrl) {

        $format  = 'You\'re not allowed to access to "%s"';
        $message = sprintf($format, $originUrl);

        parent::__construct($message, 403);

        $this->setOriginUrl($originUrl);
        $this->setRedirectUrl($redirectUrl);
    }
}
