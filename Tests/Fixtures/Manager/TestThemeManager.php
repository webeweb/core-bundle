<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Manager;

use Psr\Log\LoggerInterface;
use Twig\Environment;
use WBW\Bundle\CoreBundle\Manager\AbstractThemeManager;
use WBW\Library\Symfony\Manager\ManagerInterface;
use WBW\Library\Symfony\Provider\ThemeProviderInterface;

/**
 * Test theme manager.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Manager
 */
class TestThemeManager extends AbstractThemeManager {

    /**
     * {@inheritdoc}.
     */
    public function __construct(LoggerInterface $logger, Environment $twigEnvironment) {
        parent::__construct($logger, $twigEnvironment);
    }

    /**
     * {@inheritdoc}
     */
    public function getProvider(string $name): ?ThemeProviderInterface {
        return parent::getProvider($name);
    }

    /**
     * {@inheritdoc}
     */
    protected function initIndex(): array {

        return [
            ThemeProviderInterface::class => null,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function setProvider(string $name, ?ThemeProviderInterface $provider): ManagerInterface {
        return parent::setProvider($name, $provider);
    }
}
