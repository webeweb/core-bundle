<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model\Attribute;

/**
 * String accounting code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait StringAccountingCodeTrait {

    /**
     * Accounting code.
     *
     * @var string
     */
    protected $accountingCode;

    /**
     * Get the accounting code.
     *
     * @return string Returns the accounting code.
     */
    public function getAccountingCode() {
        return $this->accountingCode;
    }

    /**
     * Set the accounting code.
     *
     * @param string $accountingCode The accounting code.
     */
    public function setAccountingCode($accountingCode) {
        $this->accountingCode = $accountingCode;
        return $this;
    }
}
