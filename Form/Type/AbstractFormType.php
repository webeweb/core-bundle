<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use WBW\Bundle\CoreBundle\DependencyInjection\WBWCoreExtension;

/**
 * Abstract form type.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Form\Type
 * @abstract
 */
abstract class AbstractFormType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix(): string {
        return WBWCoreExtension::EXTENSION_ALIAS;
    }
}