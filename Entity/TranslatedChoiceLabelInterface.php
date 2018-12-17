<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Entity;

use Symfony\Component\Translation\TranslatorInterface;

/**
 * Translated choice renderer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Entity
 */
interface TranslatedChoiceLabelInterface {

    /**
     * Get the translated choice label.
     *
     * @param TranslatorInterface $translator The translator service.
     * @return string Returns the translated choice label.
     */
    public function getTranslatedChoiceLabel(TranslatorInterface $translator = null);
}
