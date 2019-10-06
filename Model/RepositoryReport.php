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

/**
 * Repository report.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model
 */
class RepositoryReport {

    /**
     * Available
     *
     * @var int
     */
    private $available;

    /**
     * Average.
     *
     * @var float
     */
    private $average;

    /**
     * Count.
     *
     * @var int
     */
    private $count;

    /**
     * Entity.
     *
     * @var string
     */
    private $entity;

    /**
     * Field.
     *
     * @var string
     */
    private $field;

    /**
     * Maximum.
     *
     * @var int
     */
    private $maximum;

    /**
     * Minimum.
     *
     * @var int
     */
    private $minimum;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the available.
     *
     * @return int Returns the available.
     */
    public function getAvailable() {
        return $this->available;
    }

    /**
     * Get the average.
     *
     * @return float Returns the average.
     */
    public function getAverage() {
        return $this->average;
    }

    /**
     * Get the count.
     *
     * @return int Returns the count.
     */
    public function getCount() {
        return $this->count;
    }

    /**
     * Get the entity.
     *
     * @return string Returns the entity.
     */
    public function getEntity() {
        return $this->entity;
    }

    /**
     * Get the field.
     *
     * @return string Returns the field.
     */
    public function getField() {
        return $this->field;
    }

    /**
     * Get the maximum.
     *
     * @return int Returns the maximum.
     */
    public function getMaximum() {
        return $this->maximum;
    }

    /**
     * Get the minimum.
     *
     * @return int Returns the minimum.
     */
    public function getMinimum() {
        return $this->minimum;
    }

    /**
     * Set the available.
     *
     * @param int $available The available.
     * @return RepositoryReport Returns this repository report.
     */
    public function setAvailable($available) {
        $this->available = $available;
        return $this;
    }

    /**
     * Set the average.
     *
     * @param float $average The average.
     * @return RepositoryReport Returns this repository report.
     */
    public function setAverage($average) {
        $this->average = $average;
        return $this;
    }

    /**
     * Set the count.
     *
     * @param int $count The count.
     * @return RepositoryReport Returns this repository report.
     */
    public function setCount($count) {
        $this->count = $count;
        return $this;
    }

    /**
     * Set the entity.
     *
     * @param string $entity The entity.
     * @return RepositoryReport Returns this repository report.
     */
    public function setEntity($entity) {
        $this->entity = $entity;
        return $this;
    }

    /**
     * Set the field.
     *
     * @param string $field The field.
     * @return RepositoryReport Returns this repository report.
     */
    public function setField($field) {
        $this->field = $field;
        return $this;
    }

    /**
     * Set the maximum.
     *
     * @param int $maximum The maximum.
     * @return RepositoryReport Returns this repository report.
     */
    public function setMaximum($maximum) {
        $this->maximum = $maximum;
        return $this;
    }

    /**
     * Set the minimum.
     *
     * @param int $minimum The minimum.
     * @return RepositoryReport Returns this repository report.
     */
    public function setMinimum($minimum) {
        $this->minimum = $minimum;
        return $this;
    }
}
