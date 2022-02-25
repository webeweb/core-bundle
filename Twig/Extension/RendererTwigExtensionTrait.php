<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension;

/**
 * Renderer Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
trait RendererTwigExtensionTrait {

    /**
     * Renderer Twig extension.
     *
     * @var RendererTwigExtension|null
     */
    private $rendererTwigExtension;

    /**
     * Get the renderer Twig extension.
     *
     * @return RendererTwigExtension|null Returns the renderer Twig extension.
     */
    public function getRendererTwigExtension(): ?RendererTwigExtension {
        return $this->rendererTwigExtension;
    }

    /**
     * Set the renderer Twig extension.
     *
     * @param RendererTwigExtension|null $rendererTwigExtension The renderer Twig extension.
     * @return self Returns this instance.
     */
    protected function setRendererTwigExtension(?RendererTwigExtension $rendererTwigExtension): self {
        $this->rendererTwigExtension = $rendererTwigExtension;
        return $this;
    }
}
