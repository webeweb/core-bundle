<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset;

/**
 * SyntaxHighlighter strings.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset
 */
class SyntaxHighlighterStrings {

    /**
     * Alert.
     *
     * @var string
     */
    private $alert;

    /**
     * Brush not HTML script.
     *
     * @var string
     */
    private $brushNotHtmlScript;

    /**
     * Copy to clipboard.
     *
     * @var string
     */
    private $copyToClipboard;

    /**
     * Copy to clipboard confirmation.
     *
     * @var string
     */
    private $copyToClipboardConfirmation;

    /**
     * Expand source.
     *
     * @var string
     */
    private $expandSource;

    /**
     * Help.
     *
     * @var string
     */
    private $help;

    /**
     * No brush.
     *
     * @var string
     */
    private $noBrush;

    /**
     * Print.
     *
     * @var string
     */
    private $print;

    /**
     * View source.
     *
     * @var string
     */
    private $viewSource;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setAlert("SyntaxHighlighter\n\n");
        $this->setBrushNotHtmlScript("Brush wasn't made for html-script option:");
        $this->setCopyToClipboard("copy to clipboard");
        $this->setCopyToClipboardConfirmation("The code is in your clipboard now");
        $this->setExpandSource("+ expand source");
        $this->setHelp("?");
        $this->setNoBrush("Can't find brush for:");
        $this->setPrint("print");
        $this->setViewSource("view source");
    }

    /**
     * Get the alert.
     *
     * @return string Returns the alert.
     */
    public function getAlert() {
        return $this->alert;
    }

    /**
     * Get the brush not HTML script.
     *
     * @return string Returns the brush not HTML script.
     */
    public function getBrushNotHtmlScript() {
        return $this->brushNotHtmlScript;
    }

    /**
     * Get the copy to clipboard.
     *
     * @return string Returns the copy to clipboard.
     */
    public function getCopyToClipboard() {
        return $this->copyToClipboard;
    }

    /**
     * Get the copy to clipboard confirmation.
     *
     * @return string Returns the copy to clipboard confirmation.
     */
    public function getCopyToClipboardConfirmation() {
        return $this->copyToClipboardConfirmation;
    }

    /**
     * Get the expand source.
     *
     * @return string Returns the expand source.
     */
    public function getExpandSource() {
        return $this->expandSource;
    }

    /**
     * Get the help.
     *
     * @return string Returns the help.
     */
    public function getHelp() {
        return $this->help;
    }

    /**
     * Get the no brush.
     *
     * @return string Returns the no brush.
     */
    public function getNoBrush() {
        return $this->noBrush;
    }

    /**
     * Get the print.
     *
     * @return string Returns the print.
     */
    public function getPrint() {
        return $this->print;
    }

    /**
     * Get the view source.
     *
     * @return string Returns the view source.
     */
    public function getViewSource() {
        return $this->viewSource;
    }

    /**
     * Set the alert.
     *
     * @param string $alert The alert.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setAlert($alert) {
        $this->alert = $alert;
        return $this;
    }

    /**
     * Set the brush not HTML script.
     *
     * @param string $brushNotHtmlScript The brush not HTML script.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setBrushNotHtmlScript($brushNotHtmlScript) {
        $this->brushNotHtmlScript = $brushNotHtmlScript;
        return $this;
    }

    /**
     * Set the copy to clipboard.
     *
     * @param string $copyToClipboard The copy to clipboard.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setCopyToClipboard($copyToClipboard) {
        $this->copyToClipboard = $copyToClipboard;
        return $this;
    }

    /**
     * Set the copy to clipboard confirmation.
     *
     * @param string $copyToClipboardConfirmation The copy to clipboard confirmation.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setCopyToClipboardConfirmation($copyToClipboardConfirmation) {
        $this->copyToClipboardConfirmation = $copyToClipboardConfirmation;
        return $this;
    }

    /**
     * Set the expand source.
     *
     * @param string $expandSource The expand source.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setExpandSource($expandSource) {
        $this->expandSource = $expandSource;
        return $this;
    }

    /**
     * Set the help.
     *
     * @param string $help The help.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setHelp($help) {
        $this->help = $help;
        return $this;
    }

    /**
     * Set the no brush.
     *
     * @param string $noBrush The no brush.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setNoBrush($noBrush) {
        $this->noBrush = $noBrush;
        return $this;
    }

    /**
     * Set the print.
     *
     * @param string $print The print.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setPrint($print) {
        $this->print = $print;
        return $this;
    }

    /**
     * Set the view source.
     *
     * @param string $viewSource The view source.
     * @return SyntaxHighlighterStrings Returns this strings.
     */
    public function setViewSource($viewSource) {
        $this->viewSource = $viewSource;
        return $this;
    }
}
