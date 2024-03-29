<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Fixtures;

use Symfony\Component\Security\Core\User\UserInterface;
use Throwable;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Model\TestUser;
use WBW\Library\Symfony\Assets\Navigation\DividerNode;
use WBW\Library\Symfony\Assets\Navigation\HeaderNode;
use WBW\Library\Symfony\Assets\Navigation\NavigationNode;
use WBW\Library\Symfony\Assets\Navigation\NavigationTree;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;

/**
 * Test fixtures.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Fixtures
 */
class TestFixtures {

    /**
     * Get the images.
     *
     * @return string[]
     */
    public static function getImages(): array {

        return [
            __DIR__ . "/Model/TestImage_1920x1037.jpg",
            __DIR__ . "/Model/TestImage_1920x1037.png",
            __DIR__ . "/Model/TestImage_1920x1920.png",
            __DIR__ . "/Model/TestImage_1920x3554.png",
        ];
    }

    /**
     * Get a navigation tree.
     * GitHub
     * |- AdminBSB Material Design bundle
     * |- Bootstrap bundle
     * |- EDM bundle
     * |- Highcharts bundle
     * |- jQuery DataTables bundle
     * |- jQuery QueryBuilder bundle
     * |- SyntaxHighlighter bundle
     * |- Core library
     * |- cURL library
     * |- FTP library
     * |- fPDF library
     * |- SkiData library
     * |- sMsmode library
     *
     * @return NavigationTree Returns the navigation tree.
     */
    public static function getNavigationTree(): NavigationTree {

        $tree = new NavigationTree("tree");

        $tree->addNode(new NavigationNode("GitHub", null, NavigationNodeInterface::DEFAULT_HREF));

        $tree->getLastNode()->addNode(new HeaderNode("GitHub"));
        $tree->getLastNode()->addNode(new DividerNode("Bundles"));
        $tree->getLastNode()->addNode(new NavigationNode("AdminBSB Material Design bundle", null, "https://github.com/webeweb/adminbsb-material-design-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("Bootstrap bundle", null, "https://github.com/webeweb/bootstrap-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("Core bundle", null, "https://github.com/webeweb/core-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("EDM bundle", null, "https://github.com/webeweb/edm-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("HaveIBeenPwnd bundle", null, "https://github.com/webeweb/haveibeenpwned-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("Highcharts bundle", null, "https://github.com/webeweb/highcharts-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("jQuery DataTables bundle", null, "https://github.com/webeweb/jquery-datatables-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("jQuery QueryBuilder bundle", null, "https://github.com/webeweb/jquery-querybuilder-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("OpenData bundle", null, "https://github.com/webeweb/opendata-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("SyntaxHighlighter bundle", null, "https://github.com/webeweb/syntaxhighlighter-bundle"));
        $tree->getLastNode()->addNode(new DividerNode("Libraries"));
        $tree->getLastNode()->addNode(new NavigationNode("Chart accounts library", null, "https://github.com/webeweb/chart-accounts-library"));
        $tree->getLastNode()->addNode(new NavigationNode("Core library", null, "https://github.com/webeweb/core-library"));
        $tree->getLastNode()->addNode(new NavigationNode("cURL library", null, "https://github.com/webeweb/curl-library"));
        $tree->getLastNode()->addNode(new NavigationNode("FTP library", null, "https://github.com/webeweb/ftp-library"));
        $tree->getLastNode()->addNode(new NavigationNode("fPDF library", null, "https://github.com/webeweb/fpdf-library"));
        $tree->getLastNode()->addNode(new NavigationNode("HaveIBeenPwnd library", null, "https://github.com/webeweb/haveibeenpwned-library"));
        $tree->getLastNode()->addNode(new NavigationNode("SkiData library", null, "https:\/\/github\.com\/webeweb\/skidata-library", NavigationNodeInterface::MATCHER_REGEXP));
        $tree->getLastNode()->addNode(new NavigationNode("sMsmode library", null, "https://github.com/webeweb/smsmode-library", NavigationNodeInterface::MATCHER_ROUTER));

        return $tree;
    }

    /**
     * Get the users.
     *
     * @return UserInterface[] Returns the users.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public static function getUsers(): array {

        $user = new TestUser();

        return [$user];
    }
}
