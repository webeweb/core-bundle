<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model;

use JsonSerializable;

/**
 * Action response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Model
 */
class ActionResponse implements JsonSerializable {

    /**
     * Notify.
     *
     * @var string|null
     */
    private $notify;

    /**
     * Status.
     *
     * @var int|null
     */
    private $status;

    /**
     * Constructor.
     *
     * @param int|null $status The status.
     * @param string|null $notify The notify.
     */
    public function __construct(int $status = null, string $notify = null) {
        $this->setNotify($notify);
        $this->setStatus($status);
    }

    /**
     * Get the notify.
     *
     * @return string|null Returns the notify.
     */
    public function getNotify(): ?string {
        return $this->notify;
    }

    /**
     * Get the status.
     *
     * @return int|null Returns the status.
     */
    public function getStatus(): ?int {
        return $this->status;
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return [
            "status" => $this->getStatus(),
            "notify" => $this->getNotify(),
        ];
    }

    /**
     * Set the notify.
     *
     * @param string|null $notify The notify.
     * @return ActionResponse Returns this action response.
     */
    public function setNotify(?string $notify): ActionResponse {
        $this->notify = $notify;
        return $this;
    }

    /**
     * Set the status.
     *
     * @param int|null $status The status.
     * @return ActionResponse Returns this action response.
     */
    public function setStatus(?int $status): ActionResponse {
        $this->status = $status;
        return $this;
    }
}
