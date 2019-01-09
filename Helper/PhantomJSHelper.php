<?php

/*
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
     * Binary path.
     *
     * @var string
     */
    private $binaryPath;

    /**
     * OutputPath.
     *
     * @var string
     */
    private $outputPath;

    /**
     * ScriptsPath.
     *
     * @var string
     */
    private $scriptsPath;

    /**
     * Constructor.
     *
     * @param string $binaryPath The binary path.
     * @param string $scriptsPath The scripts path.
     * @param string $outputPath The output path.
     */
    public function __construct($binaryPath, $scriptsPath, $outputPath = null) {
        $this->setBinaryPath($binaryPath);
        $this->setScriptsPath($scriptsPath);
        $this->setOutputPath($outputPath);
    }

    /**
     * Get the binary path.
     *
     * @return string Returns the binary path.
     */
    public function getBinaryPath() {
        return $this->binaryPath;
    }

    /**
     * Get the command.
     *
     * @return string Returns the command.
     */
    public function getCommand() {

        // Initialize the command.
        $command = $this->getBinaryPath();
        $command .= true === OSHelper::isWindows() ? ".exe" : "";

        // Return the command.
        return realpath($command);
    }

    /**
     * Get the output path.
     *
     * @return string Returns the output path.
     */
    public function getOutputPath() {
        return $this->outputPath;
    }

    /**
     * Get the scriptsPath.
     *
     * @return string Returns the scriptsPath.
     */
    public function getScriptsPath() {
        return $this->scriptsPath;
    }

    /**
     * Set the binary path.
     *
     * @param string $binaryPath The binary path.
     * @return PhantomJSHelper Returns this PhantomJS helper.
     */
    protected function setBinaryPath($binaryPath) {
        $this->binaryPath = $binaryPath;
        return $this;
    }

    /**
     * Set the output path.
     *
     * @param string $outputPath The output path.
     * @return PhantomJSHelper Returns this PhantomJS helper.
     */
    protected function setOutputPath($outputPath) {
        $this->outputPath = $outputPath;
        return $this;
    }

    /**
     * Set the scripts path.
     *
     * @param string $scriptsPath The scripts path.
     * @return PhantomJSHelper Returns this PhantomJS helper.
     */
    protected function setScriptsPath($scriptsPath) {
        $this->scriptsPath = $scriptsPath;
        return $this;
    }

}
