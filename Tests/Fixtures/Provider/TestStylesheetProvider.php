<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Provider;

use WBW\Library\Symfony\Provider\StylesheetProviderInterface;

/**
 * Test stylesheet provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Provider
 */
class TestStylesheetProvider implements StylesheetProviderInterface {

    /**
     * Service name.
     *
     * @ver string
     */
    const SERVICE_NAME = "wbw.core.tests.fixtures.provider.test_stylesheet";

    /**
     * {@inheritDoc}
     */
    public function getStylesheets(): array {

        return [
            "WBWCoreTest" => "@WBWCore/assets/WBWCoreTest.css.twig",
        ];
    }
}
