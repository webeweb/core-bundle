<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Icon;

/**
 * Abstract icon.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Icon
 * @abstract
 */
abstract class AbstractIcon implements IconInterface {

    /**
     * Name.
     *
     * @var string
     */
    private $name;

    /**
     * Style.
     *
     * @var string
     */
    private $style;

    /**
     * Constructor.
     */
    protected function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritDoc}
     */
    public function getName() {
        return $this->name;
    }

    /**
     * {@inheritDoc}
     */
    public function getStyle() {
        return $this->style;
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setStyle($style) {
        $this->style = $style;
        return $this;
    }
}
