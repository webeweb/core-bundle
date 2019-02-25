<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Command;

use WBW\Bundle\CoreBundle\Command\AbstractContainerAwareCommand;

/**
 * Test container aware command.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Command
 */
class TestContainerAwareCommand extends AbstractContainerAwareCommand {

    /**
     * {@inheritdoc}
     */
    protected function configure() {
        $this->setName("wbw:core:abstract");
    }

    /**
     * {@inheritdoc}
     */
    public function getEventDispatcher() {
        return parent::getEventDispatcher();
    }

    /**
     * {@inheritdoc}
     */
    public function getLogger() {
        return parent::getLogger();
    }

    /**
     * {@inheritdoc}
     */
    public function getRouter() {
        return parent::getRouter();
    }

    /**
     * {@inheritdoc}
     */
    public function getTranslator() {
        return parent::getTranslator();
    }
}
