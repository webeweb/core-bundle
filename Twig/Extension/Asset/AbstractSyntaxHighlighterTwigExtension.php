<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Asset;

use Twig\Environment;
use WBW\Bundle\CoreBundle\Asset\SyntaxHighlighterConfig;
use WBW\Bundle\CoreBundle\Asset\SyntaxHighlighterDefaults;
use WBW\Bundle\CoreBundle\Asset\SyntaxHighlighterStrings;
use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Library\Core\Argument\StringHelper;

/**
 * Abstract SyntaxHighlighter Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Asset
 * @abstract
 */
abstract class AbstractSyntaxHighlighterTwigExtension extends AbstractTwigExtension {

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays a SyntaxHighlighter config.
     *
     * @param SyntaxHighlighterConfig $config The configuration.
     * @return string Returns the SyntaxHighlighter config.
     */
    protected function syntaxHighlighterConfig(SyntaxHighlighterConfig $config) {

        $template = [];

        $template[] = "SyntaxHighlighter.config.bloggerMode = " . StringHelper::parseBoolean($config->getBloggerMode()) . ";";
        $template[] = "SyntaxHighlighter.config.stripBrs = " . StringHelper::parseBoolean($config->getStripBrs()) . ";";
        $template[] = "SyntaxHighlighter.config.tagName = \"" . $config->getTagName() . "\";";
        if (null !== $config->getStrings()) {
            $template[] = $this->syntaxHighlighterStrings($config->getStrings());
        }

        return implode("\n", $template);
    }

    /**
     * Displays a SyntaxHighlighter content.
     *
     * @param string $tag The tag.
     * @param string $language The language.
     * @param string $content The content.
     * @return string Returns the SyntaxHightlighter content.
     */
    protected function syntaxHighlighterContent($tag, $language, $content) {

        $attributes = [];

        $attributes["class"][] = "brush:";
        $attributes["class"][] = $language;

        return static::coreHTMLElement($tag, implode("", ["\n", htmlentities($content), "\n"]), $attributes);
    }

    /**
     * Displays a SyntaxHighlighter defaults.
     *
     * @param SyntaxHighlighterDefaults $defaults The defaults.
     * @return string Returns the SyntaxHighlighter defaults.
     */
    protected function syntaxHighlighterDefaults(SyntaxHighlighterDefaults $defaults) {

        $template = [];

        $template[] = "SyntaxHighlighter.defaults['auto-links'] = " . StringHelper::parseBoolean($defaults->getAutoLinks()) . ";";
        $template[] = "SyntaxHighlighter.defaults['class-name'] = \"" . $defaults->getClassName() . "\";";
        $template[] = "SyntaxHighlighter.defaults['collapse'] = " . StringHelper::parseBoolean($defaults->getCollapse()) . ";";
        $template[] = "SyntaxHighlighter.defaults['first-line'] = " . $defaults->getFirstLine() . ";";
        $template[] = "SyntaxHighlighter.defaults['gutter'] = " . StringHelper::parseBoolean($defaults->getGutter()) . ";";
        $template[] = "SyntaxHighlighter.defaults['highlight'] = [" . implode(",", $defaults->getHighlight()) . "];";
        $template[] = "SyntaxHighlighter.defaults['html-script'] = " . StringHelper::parseBoolean($defaults->getHtmlScript()) . ";";
        $template[] = "SyntaxHighlighter.defaults['smart-tabs'] = " . StringHelper::parseBoolean($defaults->getSmartTabs()) . ";";
        $template[] = "SyntaxHighlighter.defaults['tab-size'] = " . $defaults->getTabSize() . ";";
        $template[] = "SyntaxHighlighter.defaults['toolbar'] = " . StringHelper::parseBoolean($defaults->getToolbar()) . ";";

        return implode("\n", $template);
    }

    /**
     * Displays a SyntaxHighlighter strings.
     *
     * @param SyntaxHighlighterStrings $strings The strings.
     * @return string Returns the SyntaxHighlighter strings.
     */
    protected function syntaxHighlighterStrings(SyntaxHighlighterStrings $strings) {

        $template = [];

        $template[] = "SyntaxHighlighter.config.strings.alert = \"" . $strings->getAlert() . "\";";
        $template[] = "SyntaxHighlighter.config.strings.brushNotHtmlScript = \"" . $strings->getBrushNotHtmlScript() . "\";";
        $template[] = "SyntaxHighlighter.config.strings.copyToClipboard = \"" . $strings->getCopyToClipboard() . "\";";
        $template[] = "SyntaxHighlighter.config.strings.copyToClipboardConfirmation = \"" . $strings->getCopyToClipboardConfirmation() . "\";";
        $template[] = "SyntaxHighlighter.config.strings.expandSource = \"" . $strings->getExpandSource() . "\";";
        $template[] = "SyntaxHighlighter.config.strings.help = \"" . $strings->getHelp() . "\";";
        $template[] = "SyntaxHighlighter.config.strings.noBrush = \"" . $strings->getNoBrush() . "\";";
        $template[] = "SyntaxHighlighter.config.strings.print = \"" . $strings->getPrint() . "\";";
        $template[] = "SyntaxHighlighter.config.strings.viewSource = \"" . $strings->getViewSource() . "\";";

        return implode("\n", $template);
    }
}
