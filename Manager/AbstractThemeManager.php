<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Manager;

use Twig_Environment;
use WBW\Bundle\CoreBundle\Provider\ThemeProviderInterface;
use WBW\Bundle\CoreBundle\Service\TwigEnvironmentTrait;
use WBW\Library\Core\Argument\ObjectHelper;

/**
 * Abstract theme manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Manager
 * @abstract
 */
abstract class AbstractThemeManager extends AbstractManager {

    use TwigEnvironmentTrait;

    /**
     * Index.
     *
     * @var array
     */
    private $index;

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    protected function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct();
        $this->setIndex($this->initIndex());
        $this->setTwigEnvironment($twigEnvironment);
    }

    /**
     * Add the global.
     *
     * @return void
     */
    public function addGlobal() {
        foreach ($this->getIndex() as $k => $v) {
            if (null === $v) {
                continue;
            }
            $this->getTwigEnvironment()->addGlobal(str_replace("Interface", "", $k), $this->getProviders()[$v]);
        }
    }

    /**
     * Get the index.
     *
     * @return array Returns the index.
     */
    protected function getIndex() {
        return $this->index;
    }

    /**
     * Get a provider.
     *
     * @param string $name The name.
     * @return ThemeProviderInterface Returns the theme provider in case of success, null otherwise.
     */
    protected function getProvider($name) {
        $k = ObjectHelper::getShortName($name);
        $v = $this->getIndex()[$k];
        if (null === $v) {
            return null;
        }
        return $this->getProviders()[$v];
    }

    /**
     * Initialize the index.
     *
     * @return array Returns the initialized index.
     */
    abstract protected function initIndex();

    /**
     * Set the index.
     *
     * @param array $index The index.
     * @return ManagerInterface Returns this manager.
     */
    protected function setIndex(array $index) {
        $this->index = $index;
        return $this;
    }

    /**
     * Set a provider.
     *
     * @param mixed $name The name.
     * @param ThemeProviderInterface $provider The provider.
     * @return ManagerInterface Returns this manager.
     */
    protected function setProvider($name, ThemeProviderInterface $provider) {
        $k = ObjectHelper::getShortName($name);
        $v = $this->getIndex()[$k];
        if (null !== $v) {
            $this->getProviders()[$v] = $provider;
            return $this;
        }
        $this->index[$k] = count($this->getProviders());
        return $this->addProvider($provider);
    }

}
