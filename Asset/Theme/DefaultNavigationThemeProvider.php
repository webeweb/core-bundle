<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Theme;

use WBW\Bundle\CoreBundle\Asset\Navigation\NavigationTree;
use WBW\Bundle\CoreBundle\Component\Translation\TranslatorTrait;
use WBW\Bundle\CoreBundle\Provider\Asset\Theme\NavigationThemeProviderInterface;

/**
 * Default navigation theme provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset\Theme
 */
class DefaultNavigationThemeProvider implements NavigationThemeProviderInterface {

    use TranslatorTrait {
        setTranslator as public;
    }

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritDoc}
     */
    public function getTree(): NavigationTree {
        return new NavigationTree("");
    }

    /**
     * {@inheritDoc}
     */
    public function getView(): ?string {
        return null;
    }

    /**
     * Translate.
     *
     * @param string $id The id.
     * @param array $parameters Teh parameters.
     * @param string|null $domain The domain.
     * @param string|null $locale The locale.
     * @return string Returns the translated id in case of success, id otherwise.
     */
    protected function translate(string $id, array $parameters = [], string $domain = null, string $locale = null): string {

        if (null === $this->getTranslator()) {
            return $id;
        }

        return $this->getTranslator()->trans($id, $parameters, $domain, $locale);
    }
}
