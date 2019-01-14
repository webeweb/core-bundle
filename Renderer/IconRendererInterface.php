<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Renderer;

/**
 * Icon renderer interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
interface IconRendererInterface {

    /**
     * Render an icon.
     *
     * @param string $name The icon name.
     * @param string $style The icon style.
     * @return string Returns a rendered icon.
     */
    public function renderIcon($name, $style);
}
