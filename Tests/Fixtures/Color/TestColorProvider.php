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
     *
     * @param string $domain The domain.
     */
    public function __construct($domain = "MaterialDesignColorPalette") {
        parent::__construct($domain);
    }

    /**
     *{@inheritdoc}
     */
    public function getColors() {
        return [];
    }

    /**
     *{@inheritdoc}
     */
    public function getName() {
        return null;
    }

    /**
     *{@inheritdoc}
     */
    public function setDomain($domain) {
        return parent::setDomain($domain);
    }

}
