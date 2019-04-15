<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Color;

use WBW\Bundle\CoreBundle\Color\AbstractColorProvider;

/**
 * Test color provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Color
 */
class TestColorProvider extends AbstractColorProvider {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(null);
    }

    /**
     *{@inheritDoc}
     */
    public function getColors() {
        return [];
    }

    /**
     *{@inheritDoc}
     */
    public function getName() {
        return null;
    }

    /**
     *{@inheritDoc}
     */
    public function setDomain($domain) {
        return parent::setDomain($domain);
    }
}
