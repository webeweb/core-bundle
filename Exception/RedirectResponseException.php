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

use WBW\Bundle\CoreBundle\Model\OriginUrlTrait;
use WBW\Bundle\CoreBundle\Model\RedirectUrlTrait;
use WBW\Library\Core\Network\HTTP\HTTPInterface;

/**
 * Redirect response exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Exception
 */
class RedirectResponseException extends AbstractException {

    use OriginUrlTrait;
    use RedirectUrlTrait;

    /**
     * Constructor.
     *
     * @param string $redirectUrl The redirect.
     * @param string $originUrl The route.
     */
    public function __construct($redirectUrl, $originUrl) {
        parent::__construct(sprintf("You're not allowed to access to \"%s\"", $originUrl), HTTPInterface::HTTP_STATUS_FORBIDDEN);
        $this->setOriginUrl($originUrl);
        $this->setRedirectUrl($redirectUrl);
    }

}
