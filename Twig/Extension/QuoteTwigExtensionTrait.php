<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension;

/**
 * Quote Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
trait QuoteTwigExtensionTrait {

    /**
     * Quote Twig extension.
     *
     * @var QuoteTwigExtension|null
     */
    private $stylesheetTwigExtension;

    /**
     * Get the quote Twig extension.
     *
     * @return QuoteTwigExtension|null Returns the quote Twig extension.
     */
    public function getQuoteTwigExtension(): ?QuoteTwigExtension {
        return $this->stylesheetTwigExtension;
    }

    /**
     * Set the quote Twig extension.
     *
     * @param QuoteTwigExtension|null $quoteTwigExtension The quote Twig extension.
     * @return self Returns this instance.
     */
    protected function setQuoteTwigExtension(?QuoteTwigExtension $quoteTwigExtension): self {
        $this->stylesheetTwigExtension = $quoteTwigExtension;
        return $this;
    }
}
