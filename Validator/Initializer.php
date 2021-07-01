<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Validator;

use Symfony\Component\Validator\ObjectInitializerInterface;
use WBW\Bundle\CoreBundle\Model\UserInterface;
use WBW\Bundle\CoreBundle\Utility\CanonicalFieldsUpdater;
use WBW\Bundle\CoreBundle\Utility\CanonicalFieldsUpdaterTrait;

/**
 * Initializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Validator
 */
class Initializer implements ObjectInitializerInterface {

    use CanonicalFieldsUpdaterTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.validator.initializer";

    /**
     * Constructor.
     *
     * @param CanonicalFieldsUpdater $canonicalFieldsUpdater The canonical fields updater.
     */
    public function __construct(CanonicalFieldsUpdater $canonicalFieldsUpdater) {
        $this->setCanonicalFieldsUpdater($canonicalFieldsUpdater);
    }

    /**
     * {@inheritDoc}
     */
    public function initialize($object): void {

        if (false === ($object instanceof UserInterface)) {
            return;
        }

        $this->getCanonicalFieldsUpdater()->updateCanonicalFields($object);
    }
}