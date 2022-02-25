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

use WBW\Bundle\CoreBundle\Component\Translation\BaseTranslatorInterface;

/**
 * Translated choice renderer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Entity
 */
interface TranslatedChoiceLabelInterface {

    /**
     * Get the translated choice label.
     *
     * @param BaseTranslatorInterface|null $translator The translator service.
     * @return string|null Returns the translated choice label.
     */
    public function getTranslatedChoiceLabel($translator): ?string;
}
