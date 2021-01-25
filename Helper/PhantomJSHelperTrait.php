<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Helper;

/**
 * PhantomJS helper trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Helper
 */
trait PhantomJSHelperTrait {

    /**
     * PhantomJS helper.
     *
     * @var PhantomJSHelper|null
     */
    private $phantomJSHelper;

    /**
     * Get the phantomJS helper.
     *
     * @return PhantomJSHelper|null Returns the phantomJS helper.
     */
    public function getPhantomJSHelper(): ?PhantomJSHelper {
        return $this->phantomJSHelper;
    }

    /**
     * Set the phantomJS helper.
     *
     * @param PhantomJSHelper|null $phantomJSHelper The phantomJS helper.
     * @return self Returns this instance.
     */
    protected function setPhantomJSHelper(?PhantomJSHelper $phantomJSHelper): self {
        $this->phantomJSHelper = $phantomJSHelper;
        return $this;
    }
}
