<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Utility;

/**
 * Canonical fields updater trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Utility
 */
trait CanonicalFieldsUpdaterTrait {

    /**
     * Canonical fields updater.
     *
     * @var CanonicalFieldsUpdater
     */
    private $canonicalFieldsUpdater;

    /**
     * Get the canonical fields updater.
     *
     * @return CanonicalFieldsUpdater Returns the canonical fields updater.
     */
    public function getCanonicalFieldsUpdater(): CanonicalFieldsUpdater {
        return $this->canonicalFieldsUpdater;
    }

    /**
     * Set the canonical fields updater.
     *
     * @param CanonicalFieldsUpdater $canonicalFieldsUpdater The canonical fields updater.
     * @return self Returns this instance.
     */
    protected function setCanonicalFieldsUpdater(CanonicalFieldsUpdater $canonicalFieldsUpdater): self {
        $this->canonicalFieldsUpdater = $canonicalFieldsUpdater;
        return $this;
    }
}
