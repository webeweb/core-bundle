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

use Twig\Environment;
use WBW\Bundle\CoreBundle\Manager\AbstractThemeManager;
use WBW\Bundle\CoreBundle\Provider\ThemeProviderInterface;
use WBW\Library\Core\Argument\ObjectHelper;

/**
 * Test theme manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures\Manager
 */
class TestThemeManager extends AbstractThemeManager {

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * {@inheritdoc}
     */
    public function getProvider($name) {
        return parent::getProvider($name);
    }

    /**
     * {@inheritdoc}
     */
    protected function initIndex() {
        return [
            ObjectHelper::getShortName(ThemeProviderInterface::class) => null,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function setProvider($name, ThemeProviderInterface $provider) {
        return parent::setProvider($name, $provider);
    }
}
