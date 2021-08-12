<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension\Asset;

use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Asset\Highlighter\SyntaxHighlighter\SyntaxHighlighterConfig;
use WBW\Bundle\CoreBundle\Asset\Highlighter\SyntaxHighlighter\SyntaxHighlighterDefaults;
use WBW\Bundle\CoreBundle\Asset\Highlighter\SyntaxHighlighter\SyntaxHighlighterStrings;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * SyntaxHighlighter Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension\Asset
 */
class SyntaxHighlighterTwigExtension extends AbstractSyntaxHighlighterTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.asset.syntax_highlighter";

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {
        return [
            new TwigFilter("syntaxHighlighterScript", [$this, "syntaxHighlighterScriptFilter"], ["is_safe" => ["html"]]),
            new TwigFilter("shScript", [$this, "syntaxHighlighterScriptFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("syntaxHighlighterConfig", [$this, "syntaxHighlighterConfigFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("shConfig", [$this, "syntaxHighlighterConfigFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("syntaxHighlighterContent", [$this, "syntaxHighlighterContentFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("shContent", [$this, "syntaxHighlighterContentFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("syntaxHighlighterDefaults", [$this, "syntaxHighlighterDefaultsFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("shDefaults", [$this, "syntaxHighlighterDefaultsFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("syntaxHighlighterScript", [$this, "syntaxHighlighterScriptFilter"], ["is_safe" => ["html"]]),
            new TwigFunction("shScript", [$this, "syntaxHighlighterScriptFilter"], ["is_safe" => ["html"]]),

            new TwigFunction("syntaxHighlighterStrings", [$this, "syntaxHighlighterStringsFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("shStrings", [$this, "syntaxHighlighterStringsFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a SyntaxHighlighter config.
     *
     * @param SyntaxHighlighterConfig $config The SyntaxHighlighter config.
     * @return string Returns the SyntaxHighlighter config.
     */
    public function syntaxHighlighterConfigFunction(SyntaxHighlighterConfig $config): string {
        return $this->syntaxHighlighterConfig($config);
    }

    /**
     * Displays a SyntaxHighlighter content.
     *
     * @param array $args The arguments.
     * @return string Returns the SyntaxHighlighter content.
     * @throws FileNotFoundException Throws a file not found exception if the file does not exists.
     */
    public function syntaxHighlighterContentFunction(array $args = []): string {

        $tag      = ArrayHelper::get($args, "tag", "pre");
        $language = ArrayHelper::get($args, "language", "php");
        $filename = ArrayHelper::get($args, "filename");
        $content  = ArrayHelper::get($args, "content");

        if (null !== $filename) {
            if (false === file_exists($filename)) {
                throw new FileNotFoundException(null, 500, null, $filename);
            }
            $content = file_get_contents($filename);
        }

        return $this->syntaxHighlighterContent($tag, $language, $content);
    }

    /**
     * Displays a SyntaxHighlighter defaults.
     *
     * @param SyntaxHighlighterDefaults $defaults The SyntaxHighlighter defaults.
     * @return string Returns the SyntaxHighlighter defaults.
     */
    public function syntaxHighlighterDefaultsFunction(SyntaxHighlighterDefaults $defaults): string {
        return $this->syntaxHighlighterDefaults($defaults);
    }

    /**
     * Displays a SyntaxHighlighter script.
     *
     * @param string $content The content.
     * @return string Returns the SyntaxHighlighter script.
     */
    public function syntaxHighlighterScriptFilter(string $content): string {
        return static::coreHTMLElement("script", "\n" . $content . "\n", ["type" => "text/javascript"]);
    }

    /**
     * Displays a SyntaxHighlighter strings.
     *
     * @param SyntaxHighlighterStrings $strings The SyntaxHighlighter strings.
     * @return string Returns the SyntaxHighlighter strings.
     */
    public function syntaxHighlighterStringsFunction(SyntaxHighlighterStrings $strings): string {
        return $this->syntaxHighlighterStrings($strings);
    }
}
