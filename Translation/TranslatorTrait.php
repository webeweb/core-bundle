<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Translation;

use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * Translator trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Translation
 */
trait TranslatorTrait {

    /**
     * Translator.
     *
     * @var TranslatorInterface|null
     */
    private $translator;

    /**
     * Get the translator.
     *
     * @return TranslatorInterface|null Returns the translator.
     */
    public function getTranslator(): ?TranslatorInterface {
        return $this->translator;
    }

    /**
     * Set the translator.
     *
     * @param TranslatorInterface|null $translator The translator.
     * @return self Returns this instance.
     */
    protected function setTranslator(?TranslatorInterface $translator): self {
        $this->translator = $translator;
        return $this;
    }
}
