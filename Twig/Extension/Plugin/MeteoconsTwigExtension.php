<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Plugin;

use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Renderer\IconRendererInterface;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Meteocons Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Plugin
 */
class MeteoconsTwigExtension extends AbstractMeteoconsTwigExtension implements IconRendererInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.twig.extension.plugin.meteocons";

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new TwigFunction("meteoconsIcon", [$this, "meteoconsIconFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a Meteocons icon.
     *
     * @param array $args The arguments.
     * @return string Returns a Meteocons icon.
     */
    public function meteoconsIconFunction(array $args = []) {
        return $this->meteoconsIcon(ArrayHelper::get($args, "name", "A"), ArrayHelper::get($args, "style"));
    }

    /**
     * {@inheritdoc}
     */
    public function renderIcon($name, $style) {
        return $this->meteoconsIconFunction(["name" => $name, "style" => $style]);
    }
}
