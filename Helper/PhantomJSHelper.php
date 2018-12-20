<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Helper;

/**
 * PhantomJS helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Helper
 */
class PhantomJSHelper {

    /**
     * Service name.
     *
     * @avr string
     */
    const SERVICE_NAME = "webeweb.core.helper.phantomjs";

    /**
     * Base.
     *
     * @var string
     */
    private $base;

    /**
     * Path.
     *
     * @var string
     */
    private $path;

    /**
     * Constructor.
     *
     * @param string $path The path.
     * @param string $base The base.
     */
    public function __construct($path, $base) {
        $this->setBase($base);
        $this->setPath($path);
    }

    /**
     * Get the base.
     *
     * @return string Returns the base.
     */
    public function getBase() {
        return $this->base;
    }

    /**
     * Get the command.
     *
     * @return string Returns the command.
     */
    public function getCommand() {

        // Initialize the command.
        $command = [
            $this->getPath(),
            $this->getBase(),
        ];

        // Check the operating system.
        if (true === OSHelper::isWindows()) {
            $command[] = array_pop($command) . ".exe";
        }

        // Return the command.
        return realpath(implode("/", $command));
    }

    /**
     * Get the path.
     *
     * @return string Returns the path.
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * Set the base.
     *
     * @param string $base The base.
     * @return PhantomJSHelper Returns this phantomJS helper.
     */
    protected function setBase($base) {
        $this->base = $base;
        return $this;
    }

    /**
     * Set the path.
     *
     * @param string $path The path.
     * @return PhantomJSHelper Returns this phantomJS helper.
     */
    protected function setPath($path) {
        $this->path = $path;
        return $this;
    }

}
