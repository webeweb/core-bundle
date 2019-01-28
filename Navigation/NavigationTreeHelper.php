<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Navigation;

use Symfony\Component\HttpFoundation\Request;

/**
 * Navigation tree helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Navigation
 */
class NavigationTreeHelper {

    /**
     * Actives the nodes.
     *
     * @param Request $request The request.
     * @param array $nodes The nodes.
     * @param int $level The node level.
     * @return bool Returns true in case of success, false othewise.
     */
    protected static function activeNodes(Request $request, array $nodes = [], $level = 0) {

        $result = false;

        foreach ($nodes as $n) {

            if (false === ($n instanceof AbstractNavigationNode)) {
                continue;
            }

            if (true === self::nodeMatch($n, $request)) {
                $current = true;
            } else {
                $current = self::activeNodes($request, $n->getNodes(), $level + 1);
            }

            if (false === $current) {
                continue;
            }

            $n->setActive(true);

            $result = true;
        }

        return $result;
    }

    /**
     * Active the tree.
     *
     * @param NavigationTree $tree The tree.
     * @param Request $request The request.
     * @return void
     */
    public static function activeTree(NavigationTree $tree, Request $request) {
        self::activeNodes($request, $tree->getNodes());
    }

    /**
     * Get the breadcrumbs.
     *
     * @param AbstractNavigationNode $node The tree.
     * @return AsbtractNavigationNode[] Returns the breadcrumbs.
     */
    public static function getBreadcrumbs(AbstractNavigationNode $node) {

        $breadcrumbs = [];

        if (true === ($node instanceof NavigationNode || $node instanceof BreadcrumbNode) && true === $node->getActive()) {
            $breadcrumbs[] = $node;
        }

        foreach ($node->getNodes() as $current) {
            if (false === ($current instanceof AbstractNavigationNode)) {
                continue;
            }
            $breadcrumbs = array_merge($breadcrumbs, self::getBreadcrumbs($current));
        }

        return $breadcrumbs;
    }

    /**
     * Determines if a node match an URL.
     *
     * @param AbstractNavigationNode $node The node.
     * @param Request $request The request.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected static function nodeMatch(AbstractNavigationNode $node, Request $request) {

        $result = false;

        switch ($node->getMatcher()) {

            case NavigationInterface::NAVIGATION_MATCHER_REGEXP:
                $result = preg_match("/" . $node->getUri() . "/", $request->getUri());
                break;

            case NavigationInterface::NAVIGATION_MATCHER_ROUTER:
                $result = $request->get("_route") === $node->getUri();
                break;

            case NavigationInterface::NAVIGATION_MATCHER_URL:
                $result = $request->getUri() === $node->getUri() || $request->getRequestUri() === $node->getUri();
                break;
        }

        return boolval($result);
    }
}
