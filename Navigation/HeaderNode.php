<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Navigation;

/**
 * Header node.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Navigation
 */
class HeaderNode extends AbstractNavigationNode {

    /**
     * Constructor.
     *
     * @param string $label The label.
     * @param string $icon The icon.
     */
    public function __construct($label, $icon = null) {
        parent::__construct($label, $icon, null, null);
        $this->setEnable(true);
    }

    /**
     * {@inheritDoc}
     */
    public function addNode(AbstractNavigationNode $node) {
        return $this;
    }
}
