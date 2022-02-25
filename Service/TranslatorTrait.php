<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

use WBW\Bundle\CoreBundle\Component\Translation\BaseTranslatorInterface;

/**
 * Translator trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait TranslatorTrait {

    /**
     * Translator.
     *
     * @var BaseTranslatorInterface|null
     */
    private $translator;

    /**
     * Get the translator.
     *
     * @return BaseTranslatorInterface|null Returns the translator.
     */
    public function getTranslator() {
        return $this->translator;
    }

    /**
     * Set the translator.
     *
     * @param BaseTranslatorInterface|null $translator The translator.
     * @return self Returns this instance.
     */
    protected function setTranslator($translator): self {
        $this->translator = $translator;
        return $this;
    }
}
