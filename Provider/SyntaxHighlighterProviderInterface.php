<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider;

use WBW\Bundle\CoreBundle\Assets\SyntaxHighlighter\SyntaxHighlighterStrings;
use WBW\Library\Symfony\Provider\ProviderInterface;

/**
 * SyntaxHighlighter provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Provider
 */
interface SyntaxHighlighterProviderInterface extends ProviderInterface {

    /**
     * Get a strings.
     *
     * @return SyntaxHighlighterStrings Returns the strings.
     */
    public function getSyntaxHighlighterStrings(): SyntaxHighlighterStrings;
}
