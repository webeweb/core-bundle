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
 * SyntaxHighlighter defaults.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset
 */
class SyntaxHighlighterDefaults {

    /**
     * Auto links.
     *
     * @var bool
     */
    private $autoLinks;

    /**
     * Class name.
     *
     * @var string
     */
    private $className;

    /**
     * Collapse.
     *
     * @var bool
     */
    private $collapse;

    /**
     * First line.
     *
     * @var int
     */
    private $firstLine;

    /**
     * Gutter.
     *
     * @var bool
     */
    private $gutter;

    /**
     * Highlight.
     *
     * @var array
     */
    private $highlight;

    /**
     * HTML script.
     *
     * @var bool
     */
    private $htmlScript;

    /**
     * Samrt tabs.
     *
     * @var bool
     */
    private $smartTabs;

    /**
     * Tab size.
     *
     * @var int
     */
    private $tabSize;

    /**
     * Toolbar.
     *
     * @var bool
     */
    private $toolbar;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setAutoLinks(true);
        $this->setClassName("");
        $this->setCollapse(false);
        $this->setFirstLine(1);
        $this->setGutter(true);
        $this->setHighlight([]);
        $this->setHtmlScript(false);
        $this->setSmartTabs(true);
        $this->setTabSize(4);
        $this->setToolbar(true);
    }

    /**
     * Get the auto links.
     *
     * @return bool Returns the auto links.
     */
    public function getAutoLinks() {
        return $this->autoLinks;
    }

    /**
     * Get the class name.
     *
     * @return string Returns the class name.
     */
    public function getClassName() {
        return $this->className;
    }

    /**
     * Get the collapse.
     *
     * @return bool Returns the collapse.
     */
    public function getCollapse() {
        return $this->collapse;
    }

    /**
     * Get the first line.
     *
     * @return int Returns the first line.
     */
    public function getFirstLine() {
        return $this->firstLine;
    }

    /**
     * Get the gutter.
     *
     * @return bool Returns the gutter.
     */
    public function getGutter() {
        return $this->gutter;
    }

    /**
     * Get the highlight.
     *
     * @return array Returns the hightlight.
     */
    public function getHighlight() {
        return $this->highlight;
    }

    /**
     * Get the HTML script.
     *
     * @return bool Returns the HTML script.
     */
    public function getHtmlScript() {
        return $this->htmlScript;
    }

    /**
     * Get the smart tabs.
     *
     * @return bool Returns the smart tabs.
     */
    public function getSmartTabs() {
        return $this->smartTabs;
    }

    /**
     * Get the tab size.
     *
     * @return int Returns the tab size.
     */
    public function getTabSize() {
        return $this->tabSize;
    }

    /**
     * Get the toolbar.
     *
     * @return bool Returns the toolbar.
     */
    public function getToolbar() {
        return $this->toolbar;
    }

    /**
     * Set the auto links.
     *
     * @param bool $autoLinks The auto links.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setAutoLinks($autoLinks) {
        $this->autoLinks = $autoLinks;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string $className The class name.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the collapse.
     *
     * @param bool $collapse The collapse.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setCollapse($collapse) {
        $this->collapse = $collapse;
        return $this;
    }

    /**
     * Set the first line.
     *
     * @param int $firstLine The first line.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setFirstLine($firstLine) {
        $this->firstLine = $firstLine;
        return $this;
    }

    /**
     * Set the gutter.
     *
     * @param bool $gutter The gutter.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setGutter($gutter) {
        $this->gutter = $gutter;
        return $this;
    }

    /**
     * Set the highlight.
     *
     * @param array $highlight The highlight.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setHighlight(array $highlight) {
        $this->highlight = $highlight;
        return $this;
    }

    /**
     * Set the HTML script.
     *
     * @param bool $htmlScript The HTML script.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setHtmlScript($htmlScript) {
        $this->htmlScript = $htmlScript;
        return $this;
    }

    /**
     * Set the smart tabs.
     *
     * @param bool $smartTabs The smart tabs.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setSmartTabs($smartTabs) {
        $this->smartTabs = $smartTabs;
        return $this;
    }

    /**
     * Set the tab size.
     *
     * @param int $tabSize The tab size.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setTabSize($tabSize) {
        $this->tabSize = $tabSize;
        return $this;
    }

    /**
     * Set the toolbar.
     *
     * @param bool $toolbar The toolbar.
     * @return SyntaxHighlighterDefaults Returns this defaults.
     */
    public function setToolbar($toolbar) {
        $this->toolbar = $toolbar;
        return $this;
    }
}
