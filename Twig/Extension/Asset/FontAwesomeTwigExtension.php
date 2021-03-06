<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Asset;

use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Icon\IconFactory;
use WBW\Bundle\CoreBundle\Renderer\IconRendererInterface;

/**
 * Font Awesome Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Asset
 */
class FontAwesomeTwigExtension extends AbstractFontAwesomeTwigExtension implements IconRendererInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.asset.font_awesome";

    /**
     * Displays a Font Awesome icon.
     *
     * @param array $args The arguments.
     * @return string Returns the Font Awesome icon.
     */
    public function fontAwesomeIconFunction(array $args = []): string {
        return $this->fontAwesomeIcon(IconFactory::parseFontAwesomeIcon($args));
    }

    /**
     * Displays a Font Awesome list.
     *
     * @param array|string $items The items.
     * @return string Returns the Font Awesome list.
     */
    public function fontAwesomeListFilter($items): string {
        return $this->fontAwesomeList($items);
    }

    /**
     * Displays a Font Awesome list icon.
     *
     * @param string $icon The icon.
     * @param string|null $content The content.
     * @return string Returns the Font Awesome list icon.
     */
    public function fontAwesomeListIconFilter(string $icon, ?string $content): string {
        return $this->fontAwesomeListIcon($icon, $content);
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {
        return [
            new TwigFilter("fontAwesomeList", [$this, "fontAwesomeListFilter"], ["is_safe" => ["html"]]),
            new TwigFilter("faList", [$this, "fontAwesomeListFilter"], ["is_safe" => ["html"]]),

            new TwigFilter("fontAwesomeListIcon", [$this, "fontAwesomeListIconFilter"], ["is_safe" => ["html"]]),
            new TwigFilter("faListIcon", [$this, "fontAwesomeListIconFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("fontAwesomeIcon", [$this, "fontAwesomeIconFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("faIcon", [$this, "fontAwesomeIconFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function renderIcon(?string $name, ?string $style): string {
        return $this->fontAwesomeIconFunction(["name" => $name, "style" => $style]);
    }
}
