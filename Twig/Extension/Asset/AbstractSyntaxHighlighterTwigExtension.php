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
use WBW\Bundle\CoreBundle\Asset\Highlighter\SyntaxHighlighter\SyntaxHighlighterConfig;
use WBW\Bundle\CoreBundle\Asset\Highlighter\SyntaxHighlighter\SyntaxHighlighterDefaults;
use WBW\Bundle\CoreBundle\Asset\Highlighter\SyntaxHighlighter\SyntaxHighlighterStrings;
use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Library\Types\Helper\StringHelper;

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
    protected function syntaxHighlighterConfig(SyntaxHighlighterConfig $config): string {

        $template = [
            "SyntaxHighlighter.config.bloggerMode = " . StringHelper::parseBoolean($config->getBloggerMode()) . ";",
            "SyntaxHighlighter.config.stripBrs = " . StringHelper::parseBoolean($config->getStripBrs()) . ";",
            'SyntaxHighlighter.config.tagName = "' . $config->getTagName() . '";',
        ];

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
    protected function syntaxHighlighterContent(string $tag, string $language, string $content): string {

        $attributes = [];

        $attributes["class"][] = "brush:";
        $attributes["class"][] = $language;

        return static::coreHtmlElement($tag, implode("", ["\n", htmlentities($content), "\n"]), $attributes);
    }

    /**
     * Displays a SyntaxHighlighter defaults.
     *
     * @param SyntaxHighlighterDefaults $defaults The defaults.
     * @return string Returns the SyntaxHighlighter defaults.
     */
    protected function syntaxHighlighterDefaults(SyntaxHighlighterDefaults $defaults): string {

        $template = [
            "SyntaxHighlighter.defaults['auto-links'] = " . StringHelper::parseBoolean($defaults->getAutoLinks()) . ";",
            'SyntaxHighlighter.defaults[\'class-name\'] = "' . $defaults->getClassName() . '";',
            "SyntaxHighlighter.defaults['collapse'] = " . StringHelper::parseBoolean($defaults->getCollapse()) . ";",
            "SyntaxHighlighter.defaults['first-line'] = " . $defaults->getFirstLine() . ";",
            "SyntaxHighlighter.defaults['gutter'] = " . StringHelper::parseBoolean($defaults->getGutter()) . ";",
            "SyntaxHighlighter.defaults['highlight'] = [" . implode(",", $defaults->getHighlight()) . "];",
            "SyntaxHighlighter.defaults['html-script'] = " . StringHelper::parseBoolean($defaults->getHtmlScript()) . ";",
            "SyntaxHighlighter.defaults['smart-tabs'] = " . StringHelper::parseBoolean($defaults->getSmartTabs()) . ";",
            "SyntaxHighlighter.defaults['tab-size'] = " . $defaults->getTabSize() . ";",
            "SyntaxHighlighter.defaults['toolbar'] = " . StringHelper::parseBoolean($defaults->getToolbar()) . ";",
        ];

        return implode("\n", $template);
    }

    /**
     * Displays a SyntaxHighlighter strings.
     *
     * @param SyntaxHighlighterStrings $strings The strings.
     * @return string Returns the SyntaxHighlighter strings.
     */
    protected function syntaxHighlighterStrings(SyntaxHighlighterStrings $strings): string {

        $template = [
            'SyntaxHighlighter.config.strings.alert = "' . $strings->getAlert() . '";',
            'SyntaxHighlighter.config.strings.brushNotHtmlScript = "' . $strings->getBrushNotHtmlScript() . '";',
            'SyntaxHighlighter.config.strings.copyToClipboard = "' . $strings->getCopyToClipboard() . '";',
            'SyntaxHighlighter.config.strings.copyToClipboardConfirmation = "' . $strings->getCopyToClipboardConfirmation() . '";',
            'SyntaxHighlighter.config.strings.expandSource = "' . $strings->getExpandSource() . '";',
            'SyntaxHighlighter.config.strings.help = "' . $strings->getHelp() . '";',
            'SyntaxHighlighter.config.strings.noBrush = "' . $strings->getNoBrush() . '";',
            'SyntaxHighlighter.config.strings.print = "' . $strings->getPrint() . '";',
            'SyntaxHighlighter.config.strings.viewSource = "' . $strings->getViewSource() . '";',
        ];

        return implode("\n", $template);
    }
}
