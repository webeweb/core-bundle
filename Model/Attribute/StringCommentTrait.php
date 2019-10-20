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
 * String comment trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model\Attribute
 */
trait StringCommentTrait {

    /**
     * Comment.
     *
     * @var string
     */
    private $comment;

    /**
     * Get the comment.
     *
     * @return string Returns the comment.
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * Set the comment.
     *
     * @param string $comment The comment.
     */
    public function setComment($comment) {
        $this->comment = $comment;
        return $this;
    }
}
