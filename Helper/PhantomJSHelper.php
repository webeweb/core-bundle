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
    const SERVICE_NAME = "wbw.core.helper.phantomjs";

    /**
     * Binary path.
     *
     * @var string|null
     */
    private $binaryPath;

    /**
     * Output path.
     *
     * @var string|null
     */
    private $outputPath;

    /**
     * Scripts path.
     *
     * @var string|null
     */
    private $scriptsPath;

    /**
     * Constructor.
     *
     * @param string|null $binaryPath The binary path.
     * @param string|null $scriptsPath The scripts path.
     * @param string|null $outputPath The output path.
     */
    public function __construct(?string $binaryPath, ?string $scriptsPath, $outputPath = null) {
        $this->setBinaryPath($binaryPath);
        $this->setScriptsPath($scriptsPath);
        $this->setOutputPath($outputPath);
    }

    /**
     * Get the binary path.
     *
     * @return string|null Returns the binary path.
     */
    public function getBinaryPath(): ?string {
        return $this->binaryPath;
    }

    /**
     * Get the command.
     *
     * @return string|null Returns the command.
     */
    public function getCommand(): ?string {

        $command = $this->getBinaryPath();
        $command .= true === OSHelper::isWindows() ? ".exe" : "";

        return realpath($command);
    }

    /**
     * Get the output path.
     *
     * @return string|null Returns the output path.
     */
    public function getOutputPath(): ?string {
        return $this->outputPath;
    }

    /**
     * Get the scriptsPath.
     *
     * @return string|null Returns the scriptsPath.
     */
    public function getScriptsPath(): ?string {
        return $this->scriptsPath;
    }

    /**
     * Set the binary path.
     *
     * @param string|null $binaryPath The binary path.
     * @return PhantomJSHelper Returns this PhantomJS helper.
     */
    protected function setBinaryPath(?string $binaryPath): PhantomJSHelper {
        $this->binaryPath = $binaryPath;
        return $this;
    }

    /**
     * Set the output path.
     *
     * @param string|null $outputPath The output path.
     * @return PhantomJSHelper Returns this PhantomJS helper.
     */
    protected function setOutputPath(?string $outputPath): PhantomJSHelper {
        $this->outputPath = $outputPath;
        return $this;
    }

    /**
     * Set the scripts path.
     *
     * @param string|null $scriptsPath The scripts path.
     * @return PhantomJSHelper Returns this PhantomJS helper.
     */
    protected function setScriptsPath(?string $scriptsPath): PhantomJSHelper {
        $this->scriptsPath = $scriptsPath;
        return $this;
    }
}
