<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Asset\Toast;

/**
 * Abstract toast.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Asset\Toast
 * @abstract
 */
abstract class AbstractToast implements ToastInterface {

    /**
     * Content.
     *
     * @var string
     */
    private $content;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Constructor.
     *
     * @param string $type The type.
     * @param string $content The content.
     */
    protected function __construct(string $type, string $content) {
        $this->setContent($content);
        $this->setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent(): string {
        return $this->content;
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * Set the content.
     *
     * @param string $content The content.
     * @return ToastInterface Returns this toast.
     */
    protected function setContent(string $content): ToastInterface {
        $this->content = $content;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return ToastInterface Returns this toast.
     */
    protected function setType(string $type): ToastInterface {
        $this->type = $type;
        return $this;
    }
}
