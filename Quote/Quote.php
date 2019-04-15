<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Quote;

use DateTime;

/**
 * Quote.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Quote
 */
class Quote implements QuoteInterface {

    /**
     * Author.
     *
     * @var string
     */
    private $author;

    /**
     * Content.
     *
     * @var string
     */
    private $content;

    /**
     * Date.
     *
     * @var DateTime
     */
    private $date;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * {@inheritdoc}
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set the author.
     *
     * @param string $author The author.
     * @return Quote Returns this quote.
     */
    public function setAuthor($author) {
        $this->author = $author;
        return $this;
    }

    /**
     * Set the content.
     *
     * @param string $content The content.
     * @return Quote Returns this quote.
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime $date The date.
     * @return Quote Returns this quote.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }
}
