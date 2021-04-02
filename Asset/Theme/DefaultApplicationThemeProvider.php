<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Theme;

use WBW\Bundle\CoreBundle\Provider\Asset\Theme\ApplicationThemeProviderInterface;

/**
 * Default application theme provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset\Theme
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
    public function getDescription(): ?string {
        return "Core bundle";
    }

    /**
     * {@inheritDoc}
     */
    public function getHome(): ?string {
        return "/";
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string {
        return "Core<b>bundle</b>";
    }

    /**
     * {@inheritDoc}
     */
    public function getRoute(): ?string {
        return "/";
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string {
        return "Core bundle";
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion(): ?string {
        return "dev-master";
    }

    /**
     * {@inheritDoc}
     */
    public function getView(): ?string {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getYear(): ?string {
        $today = date("Y");
        $years = ["2018"];
        if ($years[0] !== $today) {
            $years[] = $today;
        }
        return implode("-", $years);
    }
}
