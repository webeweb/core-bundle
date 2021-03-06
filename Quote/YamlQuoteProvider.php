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
use WBW\Library\Core\Argument\Helper\ArrayHelper;

/**
 * YAML Quote provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Quote
 */
class YamlQuoteProvider extends AbstractQuoteProvider {

    /**
     * Filename.
     *
     * @var string|null
     */
    private $filename;

    /**
     * Constructor.
     *
     * @param string|null $filename The filename.
     * @throws FileNotFoundException Throws a file not found exception.
     */
    public function __construct(?string $filename) {
        parent::__construct();
        $this->setFilename($filename);
    }

    /**
     * {@inheritDoc}
     */
    public function getDomain(): string {
        return basename($this->getFilename(), ".yml");
    }

    /**
     * Get the filename.
     *
     * @return string|null Returns the filename.
     */
    public function getFilename(): ?string {
        return $this->filename;
    }

    /**
     * {@inheritDoc}
     */
    public function init(): void {

        if (false === file_exists($this->filename)) {
            return;
        }

        $fileContent = file_get_contents($this->filename);

        $yamlContent = Yaml::parse($fileContent);

        foreach ($yamlContent as $k => $v) {

            // Force year to manage the leap years.
            $date = DateTime::createFromFormat("!Y.m.d", "2016." . $k);

            $model = new Quote();
            $model->setDate(false === $date ? null : $date);
            $model->setAuthor(ArrayHelper::get($v, "author"));
            $model->setContent(ArrayHelper::get($v, "content"));

            $this->quotes[$k] = $model;
        }
    }

    /**
     * Set the filename.
     *
     * @param string|null $filename The filename.
     * @return YamlQuoteProvider Returns this quote provider.
     * @throws FileNotFoundException Throws a file not found exception.
     */
    protected function setFilename(?string $filename): QuoteProviderInterface {
        if (false === realpath($filename)) {
            throw new FileNotFoundException(sprintf('The file "%s" was not found', $filename));
        }
        $this->filename = realpath($filename);
        return $this;
    }
}
