<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Command;

use Symfony\Component\Console\Command\Command;

/**
 * Unzip assets command.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Command
 */
class UnzipAssetsCommand extends Command {

    /**
     * {@inheritdoc}
     */
    protected function configure() {

        $this
            ->setDescription("Unzip assets under a public directory")
            ->setHelp("");
    }

}
