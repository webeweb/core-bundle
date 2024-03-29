<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

/**
 * Statement service trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait StatementServiceTrait {

    /**
     * Statement service.
     *
     * @var StatementServiceInterface|null
     */
    protected $statementService;

    /**
     * Get the statement service.
     *
     * @return StatementServiceInterface|null Returns the statement service.
     */
    public function getStatementService(): ?StatementServiceInterface {
        return $this->statementService;
    }

    /**
     * Set the statement service.
     *
     * @param StatementServiceInterface|null $statementService The statement service.
     * @return self Returns this instance.
     */
    protected function setStatementService(?StatementServiceInterface $statementService): self {
        $this->statementService = $statementService;
        return $this;
    }
}
