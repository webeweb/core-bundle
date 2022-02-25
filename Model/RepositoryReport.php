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

use WBW\Library\Traits\Floats\FloatAverageTrait;
use WBW\Library\Traits\Integers\IntegerCountTrait;
use WBW\Library\Traits\Integers\IntegerMaximumTrait;
use WBW\Library\Traits\Integers\IntegerMinimumTrait;

/**
 * Repository report.
 *
 * @author webeweb <https://github.com/webeweb>
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
     * @var int|null
     */
    private $available;

    /**
     * Column.
     *
     * @var string|null
     */
    private $column;

    /**
     * Entity.
     *
     * @var string|null
     */
    private $entity;

    /**
     * Field.
     *
     * @var string|null
     */
    private $field;

    /**
     * Table.
     *
     * @var string|null
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
     * @return int|null Returns the available.
     */
    public function getAvailable(): ?int {
        return $this->available;
    }

    /**
     * Get the column.
     *
     * @return string|null Returns the column.
     */
    public function getColumn(): ?string {
        return $this->column;
    }

    /**
     * Get the entity.
     *
     * @return string|null Returns the entity.
     */
    public function getEntity(): ?string {
        return $this->entity;
    }

    /**
     * Get the field.
     *
     * @return string|null Returns the field.
     */
    public function getField(): ?string {
        return $this->field;
    }

    /**
     * Get the table.
     *
     * @return string|null Returns the table.
     */
    public function getTable(): ?string {
        return $this->table;
    }

    /**
     * Set the available.
     *
     * @param int|null $available The available.
     * @return RepositoryReport Returns this repository report.
     */
    public function setAvailable(?int $available): RepositoryReport {
        $this->available = $available;
        return $this;
    }

    /**
     * Set the column.
     *
     * @param string|null $column The column.
     * @return RepositoryReport Returns this repository report.
     */
    public function setColumn(?string $column): RepositoryReport {
        $this->column = $column;
        return $this;
    }

    /**
     * Set the entity.
     *
     * @param string|null $entity The entity.
     * @return RepositoryReport Returns this repository report.
     */
    public function setEntity(?string $entity): RepositoryReport {
        $this->entity = $entity;
        return $this;
    }

    /**
     * Set the field.
     *
     * @param string|null $field The field.
     * @return RepositoryReport Returns this repository report.
     */
    public function setField(?string $field): RepositoryReport {
        $this->field = $field;
        return $this;
    }

    /**
     * Set the table.
     *
     * @param string|null $table The table.
     * @return RepositoryReport Returns this repository report.
     */
    public function setTable(?string $table): RepositoryReport {
        $this->table = $table;
        return $this;
    }
}
