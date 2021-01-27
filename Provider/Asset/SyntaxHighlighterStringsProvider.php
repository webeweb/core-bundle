<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider\Asset;

use WBW\Bundle\CoreBundle\Asset\SyntaxHighlighterStrings;
use WBW\Bundle\CoreBundle\Component\Translation\BaseTranslatorInterface;
use WBW\Bundle\CoreBundle\Provider\ProviderInterface;
use WBW\Bundle\CoreBundle\Service\TranslatorTrait;
use WBW\Bundle\CoreBundle\Translation\TranslationInterface;

/**
 * SyntaxHighlighter strings provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Asset
 */
class SyntaxHighlighterStringsProvider implements ProviderInterface {

    use TranslatorTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.asset.syntax_highlighter_strings";

    /**
     * Constructor.
     *
     * @param BaseTranslatorInterface $translator The translator.
     */
    public function __construct(BaseTranslatorInterface $translator) {
        $this->setTranslator($translator);
    }

    /**
     * Get a strings.
     *
     * @return SyntaxHighlighterStrings Returns the strings.
     */
    public function getSyntaxHighlighterStrings(): SyntaxHighlighterStrings {

        $strings = new SyntaxHighlighterStrings();
        $strings->setAlert($this->translate("syntax_highlighter.strings.alert"));
        $strings->setBrushNotHtmlScript($this->translate("syntax_highlighter.strings.brush_no_html_script"));
        $strings->setCopyToClipboard($this->translate("syntax_highlighter.strings.copy_to_clipboard"));
        $strings->setCopyToClipboardConfirmation($this->translate("syntax_highlighter.strings.copy_to_clipboard_confirmation"));
        $strings->setExpandSource($this->translate("syntax_highlighter.strings.expand_source"));
        $strings->setHelp($this->translate("syntax_highlighter.strings.help"));
        $strings->setNoBrush($this->translate("syntax_highlighter.strings.no_brush"));
        $strings->setPrint($this->translate("syntax_highlighter.strings.print"));
        $strings->setViewSource($this->translate("syntax_highlighter.strings.view_source"));

        return $strings;
    }

    /**
     * Translate.
     *
     * @param string $id The id.
     * @return string Returns the translation.
     */
    protected function translate(string $id): string {
        return $this->getTranslator()->trans($id, [], TranslationInterface::TRANSLATION_DOMAIN);
    }
}
