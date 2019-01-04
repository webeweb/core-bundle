<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Icon;

/**
 * Icon interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Icon
 */
interface IconInterface {

    /**
     * Get the name.
     *
     * @return string Returns the name.
     */
    public function getName();

    /**
     * Get the style.
     *
     * @return string Returns the style.
     */
    public function getStyle();

    /**
     * Set the name.
     *
     * @param string $name The name.
     * @return IconInterface Returns this icon.
     */
    public function setName($name);

    /**
     * Set the style.
     *
     * @param string $style The style.
     * @return IconInterface Returns this icon.
     */
    public function setStyle($style);

}
