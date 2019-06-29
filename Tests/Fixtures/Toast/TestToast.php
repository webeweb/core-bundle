<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Toast;

use WBW\Bundle\CoreBundle\Toast\AbstractToast;

/**
 * Test toast.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Toast
 */
class TestToast extends AbstractToast {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(null, null);
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content) {
        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type) {
        return parent::setType($type);
    }
}