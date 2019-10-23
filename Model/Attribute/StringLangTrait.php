<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model\Attribute;

/**
 * String lang trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait StringLangTrait {

    /**
     * Lang.
     *
     * @var string
     */
    protected $lang;

    /**
     * Get the lang.
     *
     * @return string Returns the lang.
     */
    public function getLang() {
        return $this->lang;
    }

    /**
     * Set the lang.
     *
     * @param string $lang The lang.
     */
    public function setLang($lang) {
        $this->lang = $lang;
        return $this;
    }
}
