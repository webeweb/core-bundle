<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Factory;

use WBW\Library\Symfony\Assets\Navigation\BreadcrumbNode;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;

/**
 * FOS user navigation factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Factory
 */
class FOSUserNavigationFactory {

    /**
     * Create the FOSUser breadcrumb nodes with Font Awesome icons.
     *
     * @return BreadcrumbNode[] Returns the FOSUser breadcrumb nodes.
     */
    public static function newFontAwesomeBreadcrumbNodes(): array {

        return [
            new BreadcrumbNode("label.edit_profile", "fa:user", "fos_user_profile_edit", NavigationNodeInterface::MATCHER_ROUTER),
            new BreadcrumbNode("label.show_profile", "fa:user", "fos_user_profile_show", NavigationNodeInterface::MATCHER_ROUTER),
            new BreadcrumbNode("label.change_password", "fa:lock", "fos_user_change_password", NavigationNodeInterface::MATCHER_ROUTER),
        ];
    }

    /**
     * Create the FOSUser breadcrumb nodes with Material Design Iconic Font icons.
     *
     * @return BreadcrumbNode[] Returns the FOSUser breadcrumb nodes.
     */
    public static function newMaterialDesignIconicFontBreadcrumbNodes(): array {

        return [
            new BreadcrumbNode("label.edit_profile", "zmdi:account", "fos_user_profile_edit", NavigationNodeInterface::MATCHER_ROUTER),
            new BreadcrumbNode("label.show_profile", "zmdi:account", "fos_user_profile_show", NavigationNodeInterface::MATCHER_ROUTER),
            new BreadcrumbNode("label.change_password", "zmdi:lock", "fos_user_change_password", NavigationNodeInterface::MATCHER_ROUTER),
        ];
    }
}
