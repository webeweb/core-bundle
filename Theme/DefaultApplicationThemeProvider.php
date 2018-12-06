<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Theme;

use WBW\Bundle\CoreBundle\Provider\Theme\ApplicationThemeProviderInterface;

/**
 * Default application theme provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\\Theme
 */
class DefaultApplicationThemeProvider implements ApplicationThemeProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription() {
        return "Core bundle";
    }

    /**
     * {@inheritdoc}
     */
    public function getHome() {
        return "/";
    }

    /**
     * {@inheritdoc}
     */
    public function getName() {
        return "Core<b>bundle</b>";
    }

    /**
     * {@inheritdoc}
     */
    public function getRoute() {
        return "/";
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle() {
        return "Core bundle";
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion() {
        return "dev-master";
    }

    /**
     * {@inheritdoc}
     */
    public function getView() {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getYear() {
        $today = date("Y");
        $years = ["2018"];
        if ($years[0] !== $today) {
            $years[] = $today;
        }
        return implode("-", $years);
    }

}
