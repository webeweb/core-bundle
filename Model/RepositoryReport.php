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

use WBW\Bundle\CoreBundle\Model\Attribute\FloatAverageTrait;
use WBW\Bundle\CoreBundle\Model\Attribute\IntegerCountTrait;
use WBW\Bundle\CoreBundle\Model\Attribute\IntegerMaximumTrait;
use WBW\Bundle\CoreBundle\Model\Attribute\IntegerMinimumTrait;

/**
 * Repository report.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model
 */
class RepositoryReport {

    use FloatAverageTrait;
    use IntegerCountTrait;
    use IntegerMaximumTrait;
    use IntegerMinimumTrait;

    /**
     * Available
     *
     * @var int
     */
    private $available;

    /**
     * Column.
     *
     * @var string
     */
    private $column;

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
     * Table.
     *
     * @var string
     */
    private $table;

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
     * Get the column.
     *
     * @return string Returns the column.
     */
    public function getColumn() {
        return $this->column;
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
     * Get the table.
     *
     * @return string Returns the table.
     */
    public function getTable() {
        return $this->table;
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
     * Set the column.
     *
     * @param string $column The column.
     * @return RepositoryReport Returns this repository report.
     */
    public function setColumn($column) {
        $this->column = $column;
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
     * Set the table.
     *
     * @param string $table The table.
     * @return RepositoryReport Returns this repository report.
     */
    public function setTable($table) {
        $this->table = $table;
        return $this;
    }
}
