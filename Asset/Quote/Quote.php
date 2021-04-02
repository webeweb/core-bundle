<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Quote;

use WBW\Library\Core\Model\Attribute\DateTimeDateTrait;
use WBW\Library\Core\Model\Attribute\StringContentTrait;

/**
 * Quote.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Asset\Quote
 */
class Quote implements QuoteInterface {

    use DateTimeDateTrait;
    use StringContentTrait;

    /**
     * Author.
     *
     * @var string
     */
    private $author;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor(): ?string {
        return $this->author;
    }

    /**
     * Set the author.
     *
     * @param string $author The author.
     * @return Quote Returns this quote.
     */
    public function setAuthor(string $author): QuoteInterface {
        $this->author = $author;
        return $this;
    }
}
