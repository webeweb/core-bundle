<?php

/*
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
 * @package WBW\Bundle\CoreBundle\Theme
 */
class DefaultApplicationThemeProvider implements ApplicationThemeProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription() {
        return "Core bundle";
    }

    /**
     * {@inheritDoc}
     */
    public function getHome() {
        return "/";
    }

    /**
     * {@inheritDoc}
     */
    public function getName() {
        return "Core<b>bundle</b>";
    }

    /**
     * {@inheritDoc}
     */
    public function getRoute() {
        return "/";
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle() {
        return "Core bundle";
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion() {
        return "dev-master";
    }

    /**
     * {@inheritDoc}
     */
    public function getView() {
        return null;
    }

    /**
     * {@inheritDoc}
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
