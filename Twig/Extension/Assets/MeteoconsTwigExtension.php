<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Assets;

use Twig\TwigFunction;
use WBW\Library\Symfony\Renderer\Assets\IconRendererInterface;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Meteocons Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Assets
 */
class MeteoconsTwigExtension extends AbstractMeteoconsTwigExtension implements IconRendererInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.assets.meteocons";

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {

        return [
            new TwigFunction("meteoconsIcon", [$this, "meteoconsIconFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Display a Meteocons icon.
     *
     * @param array $args The arguments.
     * @return string Returns a Meteocons icon.
     */
    public function meteoconsIconFunction(array $args = []): string {
        return $this->meteoconsIcon(ArrayHelper::get($args, "name", "A"), ArrayHelper::get($args, "style"));
    }

    /**
     * {@inheritdoc}
     */
    public function renderIcon(?string $name, ?string $style): string {
        return $this->meteoconsIconFunction(["name" => $name, "style" => $style]);
    }
}
