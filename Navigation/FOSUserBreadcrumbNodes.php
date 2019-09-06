<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Navigation;

/**
 * FOSUser breadcrumb nodes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Navigation
 */
class FOSUserBreadcrumbNodes {

    /**
     * Get the FOSUser breadcrumb nodes with Font Awesome icons.
     *
     * @return BreadcrumbNode[] Returns the FOSUser breadcrumb nodes.
     */
    public static function getFontAwesomeBreadcrumbNodes() {

        $nodes = [];

        $nodes[] = new BreadcrumbNode("label.edit_profile", "fa:user", "fos_user_profile_edit", NavigationInterface::NAVIGATION_MATCHER_ROUTER);
        $nodes[] = new BreadcrumbNode("label.show_profile", "fa:user", "fos_user_profile_show", NavigationInterface::NAVIGATION_MATCHER_ROUTER);
        $nodes[] = new BreadcrumbNode("label.change_password", "fa:lock", "fos_user_change_password", NavigationInterface::NAVIGATION_MATCHER_ROUTER);

        return $nodes;
    }

    /**
     * Get the FOSUser breadcrumb nodes with Material Design Iconic Font icons.
     *
     * @return BreadcrumbNode[] Returns the FOSUser breadcrumb nodes.
     */
    public static function getMaterialDesignIconicFontBreadcrumbNodes() {

        $nodes = [];

        $nodes[] = new BreadcrumbNode("label.edit_profile", "zmdi:account", "fos_user_profile_edit", NavigationInterface::NAVIGATION_MATCHER_ROUTER);
        $nodes[] = new BreadcrumbNode("label.show_profile", "zmdi:account", "fos_user_profile_show", NavigationInterface::NAVIGATION_MATCHER_ROUTER);
        $nodes[] = new BreadcrumbNode("label.change_password", "zmdi:lock", "fos_user_change_password", NavigationInterface::NAVIGATION_MATCHER_ROUTER);

        return $nodes;
    }
}
