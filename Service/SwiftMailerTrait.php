<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

use Swift_Mailer;

/**
 * Swift mailer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait SwiftMailerTrait {

    /**
     * Swift mailer.
     *
     * @var Swift_Mailer
     */
    private $swiftMailer;

    /**
     * Get the swift mailer.
     *
     * @return Swift_Mailer Returns the swift mailer.
     */
    public function getSwiftMailer() {
        return $this->swiftMailer;
    }

    /**
     * Set the swift mailer.
     *
     * @param Swift_Mailer|null $swiftMailer The swift mailer.
     */
    protected function setSwiftMailer(Swift_Mailer $swiftMailer = null) {
        $this->swiftMailer = $swiftMailer;
        return $this;
    }
}
