<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Helper;

use WBW\Bundle\CoreBundle\Helper\CommandHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Command helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Helper
 */
class CommandHelperTest extends AbstractTestCase {

    /**
     * Tests the getCheckbox() method.
     *
     * @return void
     */
    public function testGetCheckbox() {

        // Determines the operating system.
        if ("\\" !== DIRECTORY_SEPARATOR) {

            $this->assertEquals("<fg=green;options=bold>\xE2\x9C\x94</>", CommandHelper::getCheckbox(true));
            $this->assertEquals("<fg=yellow;options=bold>!</>", CommandHelper::getCheckbox(false));
        } else {

            $this->assertEquals("<fg=green;options=bold>OK</>", CommandHelper::getCheckbox(true));
            $this->assertEquals("<fg=yellow;options=bold>WARNING</>", CommandHelper::getCheckbox(false));
        }
    }

}
