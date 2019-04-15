<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider;

/**
 * Quote provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider
 */
interface QuoteProviderInterface extends ProviderInterface {

    /**
     * Get the authors.
     *
     * @return string[] Returns the authors.
     */
    public function getAuthors();
}
