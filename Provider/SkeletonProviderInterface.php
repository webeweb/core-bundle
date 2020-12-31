<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider;

/**
 * Skeleton provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider
 */
interface SkeletonProviderInterface extends ProviderInterface {

    /**
     * Skeleton relative directory.
     *
     * @var string
     */
    const SKELETON_RELATIVE_DIRECTORY = "/Resources/skeleton";

    /**
     * Get the skeleton relative directory.
     *
     * @return string Returns the skeleton relative directory.
     */
    public function getSkeletonRelativeDirectory(): string;
}
