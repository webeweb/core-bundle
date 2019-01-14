<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider;

/**
 * Color provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider
 */
interface ColorProviderInterface extends ProviderInterface {

    /**
     * Tag name.
     *
     * @var string
     */
    const TAG_NAME = "webeweb.core.provider.color";

    /**
     * Get the colors.
     *
     * @return array Returns the colors.
     */
    public function getColors();

    /**
     * Get the domain.
     *
     * @return string Returns the domain.
     */
    public function getDomain();

    /**
     * Get the name.
     *
     * @return string Returns the color name.
     */
    public function getName();
}
