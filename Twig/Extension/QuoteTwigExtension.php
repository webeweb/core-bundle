<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension;

use Twig\TwigFunction;

/**
 * Quote Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
class QuoteTwigExtension extends AbstractTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.core.twig.extension.quote";

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new TwigFunction("quoteAuthor", [$this, "quoteAuthorFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("quoteContent", [$this, "quoteContentFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a quote author.
     *
     * @param array $args The arguments.
     * @return string Returns the quote author.
     */
    public function quoteAuthorFunction(array $args = []) {

    }

    /**
     * Displays a quote content.
     *
     * @param array $args The arguments.
     * @return string Returns the quote content.
     */
    public function quoteContentFunction(array $args = []) {

    }
}