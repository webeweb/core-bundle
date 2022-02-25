<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Color;

use JsonSerializable;
use WBW\Bundle\CoreBundle\Provider\ColorProviderInterface;
use WBW\Library\Serializer\SerializerKeys;

/**
 * Abstract color provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Color
 * @abstract
 */
abstract class AbstractColorProvider implements ColorProviderInterface, JsonSerializable {

    /**
     * Domain.
     *
     * @var string
     */
    private $domain;

    /**
     * Constructor.
     *
     * @param string|null $domain The domain.
     */
    protected function __construct(?string $domain) {
        $this->setDomain($domain);
    }

    /**
     *{@inheritDoc}
     */
    public function getDomain(): string {
        return $this->domain;
    }

    /**
     *{@inheritDoc}
     */
    public function jsonSerialize(): array {
        return [
            SerializerKeys::DOMAIN      => $this->getDomain(),
            SerializerKeys::NAME        => $this->getName(),
            SerializerKeys::COLOR . "s" => $this->getColors(),
        ];
    }

    /**
     * Set the domain.
     *
     * @param string $domain The domain.
     * @return AbstractColorProvider Returns this color provider.
     */
    protected function setDomain(string $domain): AbstractColorProvider {
        $this->domain = $domain;
        return $this;
    }
}
