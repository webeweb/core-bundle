<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\Asset;

use Psr\Log\LoggerInterface;
use Twig\Environment;
use WBW\Bundle\CoreBundle\Manager\Asset\AbstractThemeManager;
use WBW\Bundle\CoreBundle\Provider\Asset\ThemeProviderInterface;
use WBW\Library\Symfony\Manager\ManagerInterface;

/**
 * Test theme manager.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Manager\Asset
 */
class TestThemeManager extends AbstractThemeManager {

    /**
     * {@inheritDoc}.
     */
    public function __construct(LoggerInterface $logger, Environment $twigEnvironment) {
        parent::__construct($logger, $twigEnvironment);
    }

    /**
     * {@inheritDoc}
     */
    public function getProvider(string $name): ?ThemeProviderInterface {
        return parent::getProvider($name);
    }

    /**
     * {@inheritDoc}
     */
    protected function initIndex(): array {
        return [
            ThemeProviderInterface::class => null,
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function setProvider(string $name, ?ThemeProviderInterface $provider): ManagerInterface {
        return parent::setProvider($name, $provider);
    }
}
