<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Navigation;

use WBW\Library\Core\Sorting\AlphabeticalTreeNodeInterface;

/**
 * Abstract navigation node.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Navigation
 * @abstract
 */
abstract class AbstractNavigationNode implements NavigationInterface, AlphabeticalTreeNodeInterface {

    /**
     * Active ?
     *
     * @var bool
     */
    private $active;

    /**
     * Enable ?
     *
     * @var bool
     */
    private $enable;

    /**
     * Icon.
     *
     * @var string
     */
    private $icon;

    /**
     * Id.
     *
     * @var string
     */
    private $id;

    /**
     * Index.
     *
     * @var array
     */
    private $index;

    /**
     * Matcher.
     *
     * @var string
     */
    private $matcher;

    /**
     * Navigation nodes.
     *
     * @var AbstractNavigationNode[]
     */
    private $nodes;

    /**
     * Parent.
     *
     * @var AbstractNavigationNode
     */
    private $parent;

    /**
     * Target.
     *
     * @var string
     */
    private $target;

    /**
     * URI.
     *
     * @var string
     */
    private $uri;

    /**
     * Visible ?
     *
     * @var bool
     */
    private $visible;

    /**
     * Constructor.
     *
     * @param string $name The name.
     * @param string|null $icon The icon.
     * @param string|null $uri The URI.
     * @param string $matcher The matcher.
     */
    protected function __construct($name, $icon = null, $uri = null, $matcher = self::NAVIGATION_MATCHER_URL) {
        $this->setActive(false);
        $this->setEnable(false);
        $this->setIcon($icon);
        $this->setId($name);
        $this->setIndex([]);
        $this->setMatcher($matcher);
        $this->setNodes([]);
        $this->setParent(null);
        $this->setTarget(null);
        $this->setUri($uri);
        $this->setVisible(true);
    }

    /**
     * Add a navigation node.
     *
     * @param AbstractNavigationNode $node The navigation node.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function addNode(AbstractNavigationNode $node) {
        $this->index[$node->getId()] = $this->size();
        $this->nodes[]               = $node->setParent($this);
        return $this;
    }

    /**
     * Clear the navigation nodes.
     *
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function clearNodes() {
        foreach ($this->getNodes() as $node) {
            $this->removeNode($node);
        }
        return $this;
    }

    /**
     * Get the active.
     *
     * @return bool Returns the active.
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * {@inheritdoc}
     */
    public function getAlphabeticalTreeNodeLabel() {
        return $this->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getAlphabeticalTreeNodeParent() {
        return $this->getParent();
    }

    /**
     * Get the enable.
     *
     * @return bool Returns the enable.
     */
    public function getEnable() {
        return $this->enable;
    }

    /**
     * Get the first navigation node.
     *
     * @return AbstractNavigationNode|null Returns the first navigation node in case of success, null otherwise.
     */
    public function getFirstNode() {
        return $this->getNodeAt(0);
    }

    /**
     * Get the icon.
     *
     * @return string Returns the icon.
     */
    public function getIcon() {
        return $this->icon;
    }

    /**
     * Get the id.
     *
     * @return string Returns the id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the last navigation node.
     *
     * @return AbstractNavigationNode|null Returns the last navigation node in case of success, null otherwise.
     */
    public function getLastNode() {
        return $this->getNodeAt($this->size() - 1);
    }

    /**
     * Get the matcher.
     *
     * @return string Returns the matcher.
     */
    public function getMatcher() {
        return $this->matcher;
    }

    /**
     * Get a navigation node at.
     *
     * @param int $position The position.
     * @return AbstractNavigationNode|null Returns the navigation node in case of success, null otherwise.
     */
    public function getNodeAt($position) {

        if ($position < 0 || $this->size() <= $position) {
            return null;
        }

        return $this->getNodes()[$position];
    }

    /**
     * Get a navigation node by id.
     *
     * @param string $id The id.
     * @param bool $recursively Recursively ?
     * @return AbstractNavigationNode Returns the navigation node in case of success, null otherwise.
     */
    public function getNodeById($id, $recursively = false) {

        if (true === array_key_exists($id, $this->index)) {
            return $this->getNodeAt($this->index[$id]);
        }

        if (false === $recursively) {
            return null;
        }

        foreach ($this->getNodes() as $current) {

            $found = $current->getNodeById($id, true);
            if (null === $found) {
                continue;
            }

            return $found;
        }

        return null;
    }

    /**
     * Get the navigation nodes.
     *
     * @return AbstractNavigationNode[] Returns the navigation nodes.
     */
    public function getNodes() {
        return $this->nodes;
    }

    /**
     * Get the parent.
     *
     * @return AbstractNavigationNode Returns the parent.
     */
    public function getParent() {
        return $this->parent;
    }

    /**
     * Get the target.
     *
     * @return string Returns the target.
     */
    public function getTarget() {
        return $this->target;
    }

    /**
     * Get the URI.
     *
     * @return string Returns the URI.
     */
    public function getUri() {
        return $this->uri;
    }

    /**
     * Get the visible.
     *
     * @return bool Returns the visible.
     */
    public function getVisible() {
        return $this->visible;
    }

    /**
     * Determines if this node is displayable.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function isDisplayable() {

        if (true === $this->getEnable() && $this->getVisible()) {
            return true;
        }

        foreach ($this->getNodes() as $current) {
            if (false === $current->isDisplayable()) {
                continue;
            }
            return true;
        }

        return false;
    }

    /**
     * Remove a navigation node.
     *
     * @param AbstractNavigationNode $node The navigation node.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function removeNode(AbstractNavigationNode $node) {

        if (false === array_key_exists($node->getId(), $this->index)) {
            return $this;
        }

        unset($this->nodes[$this->index[$node->getId()]]);
        unset($this->index[$node->setParent(null)->getId()]);

        return $this;
    }

    /**
     * Set the active.
     *
     * @param bool $active Active ?
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    /**
     * Set the enable.
     *
     * @param bool $enable Enable ?
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function setEnable($enable) {
        $this->enable = $enable;
        return $this;
    }

    /**
     * Set the icon.
     *
     * @param string $icon The icon.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function setIcon($icon) {
        $this->icon = $icon;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    protected function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the index.
     *
     * @param array $index The index.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    protected function setIndex(array $index) {
        $this->index = $index;
        return $this;
    }

    /**
     * Set the mather.
     *
     * @param string $matcher The matcher.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function setMatcher($matcher) {
        $this->matcher = $matcher;
        return $this;
    }

    /**
     * Set the navigation nodes.
     *
     * @param AbstractNavigationNode[] $nodes The navigation nodes.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    protected function setNodes(array $nodes) {
        $this->nodes = $nodes;
        return $this;
    }

    /**
     * Set the parent.
     *
     * @param AbstractNavigationNode $parent The parent.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    protected function setParent(AbstractNavigationNode $parent = null) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Set the target.
     *
     * @param string $target The target.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function setTarget($target) {
        $this->target = $target;
        return $this;
    }

    /**
     * Set the URI.
     *
     * @param string $uri The URI.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function setUri($uri) {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param bool $visible Visible ?
     * @return AbstractNavigationNode Returns this navigation node.
     */
    protected function setVisible($visible) {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Size.
     *
     * @return int Returns the size.
     */
    public function size() {
        return count($this->getNodes());
    }
}
