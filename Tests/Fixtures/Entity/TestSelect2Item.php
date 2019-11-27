<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Entity;

use WBW\Bundle\CoreBundle\Entity\Select2ItemInterface;
use WBW\Library\Core\Model\AbstractNode;

/**
 * Test Select2 item.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Entity;
 */
class TestSelect2Item extends AbstractNode implements Select2ItemInterface {

    /**
     * Name.
     *
     * @var string
     */
    private $name;

    /**
     * Constructor.
     *
     * @param string $id The id.
     * @param string $name The name.
     */
    public function __construct($id, $name) {
        parent::__construct($id);
        $this->setName($name);
    }

    /**
     * Get the name.
     *
     * @return string Returns the name.
     */
    public function getName() {
        return $this->name;
    }

    /**
     * {@inheritDoc}
     */
    public function getSelect2ItemId() {
        return $this->getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getSelect2ItemText() {
        return $this->getName();
    }

    /**
     * Set the name.
     *
     * @param string $name The name.
     * @return TestSelect2Item Returns this Select2 item.
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }
}
