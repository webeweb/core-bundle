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
use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use Symfony\Component\Yaml\Yaml;
use WBW\Bundle\CoreBundle\Provider\QuoteProviderInterface;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Quote provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Quote
 */
class QuoteProvider implements QuoteProviderInterface {

    /**
     * Filename.
     *
     * @var string
     */
    private $filename;

    /**
     * Quotes.
     *
     * @var QuoteInterface[]
     */
    private $quotes;

    /**
     * Constructor.
     *
     * @param string $filename The filename.
     * @throws FileNotFoundException Throws a file not found exception.
     */
    public function __construct($filename) {
        $this->setFilename($filename);
        $this->setQuotes([]);
    }

    /**
     *{@inheritDoc}
     */
    public function getAuthors() {

        $authors = [];

        foreach ($this->quotes as $current) {
            if (true === in_array($current->getAuthor(), $authors)) {
                continue;
            }
            $authors[] = $current->getAuthor();
        }

        asort($authors);

        return $authors;
    }

    /**
     * Get the filename.
     *
     * @return string Returns the filename.
     */
    public function getFilename() {
        return $this->filename;
    }

    /**
     * Get the quotes.
     *
     * @return QuoteInterface[] Returns the quotes.
     */
    public function getQuotes() {
        return $this->quotes;
    }

    /**
     * Parses.
     *
     * @return void
     */
    public function parse() {

        $fileContent = file_get_contents($this->filename);

        $yamlContent = Yaml::parse($fileContent);

        foreach ($yamlContent as $k => $v) {

            $date = DateTime::createFromFormat("!m.d", $k);

            $model = new Quote();
            $model->setDate(false === $date ? nulll : $date);
            $model->setAuthor(ArrayHelper::get($v, "author"));
            $model->setContent(ArrayHelper::get($v, "content"));

            $this->quotes[] = $model;
        }
    }

    /**
     * Set the filename.
     *
     * @param string $filename The filename.
     * @return QuoteProvider Returns this quote provider.
     * @throws FileNotFoundException Throws a file not found exception.
     */
    protected function setFilename($filename) {
        if (false === realpath($filename)) {
            throw new FileNotFoundException(sprintf("The file \"%s\" was not found", $filename));
        }
        $this->filename = realpath($filename);
        return $this;
    }

    /**
     * Set the quotes.
     *
     * @param QuoteInterface[] $quotes The quotes.
     * @return QuoteProvider Returns this quote provider.
     */
    protected function setQuotes(array $quotes) {
        $this->quotes = $quotes;
        return $this;
    }
}
