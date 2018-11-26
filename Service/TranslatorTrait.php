<?php

/**
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

use Symfony\Component\Translation\TranslatorInterface;

/**
 * Translator trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait TranslatorTrait {

    /**
     * Translator.
     *
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * Get the translator.
     *
     * @return TranslatorInterface Returns the translator.
     */
    public function getTranslator() {
        return $this->translator;
    }

    /**
     * Set the translator.
     *
     * @param TranslatorInterface $translator The translator.
     */
    protected function setTranslator(TranslatorInterface $translator = null) {
        $this->translator = $translator;
        return $this;
    }

}
