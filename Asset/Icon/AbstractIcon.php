<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Icon;

/**
 * Abstract icon.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset\Icon
 * @abstract
 */
abstract class AbstractIcon implements IconInterface {

    /**
     * Name.
     *
     * @var string|null
     */
    private $name;

    /**
     * Style.
     *
     * @var string|null
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
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * {@inheritDoc}
     */
    public function getStyle(): ?string {
        return $this->style;
    }

    /**
     * {@inheritDoc}
     */
    public function setName(?string $name): IconInterface {
        $this->name = $name;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setStyle(?string $style): IconInterface {
        $this->style = $style;
        return $this;
    }
}
