<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model;

/**
 * Wiki view model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Model
 */
class WikiView {

    /**
     * Bundle.
     *
     * @var string
     */
    private $bundle;

    /**
     * Category.
     *
     * @var string
     */
    private $category;

    /**
     * Package.
     *
     * @var string
     */
    private $package;

    /**
     * Page.
     *
     * @var string
     */
    private $page;

    /**
     * Title.
     *
     * @var string
     */
    private $title;

    /**
     * Constructor.
     *
     * @param string $category The category.
     * @param string $package The package.
     * @param string $page The page.
     * @param string $title The title.
     */
    public function __construct($category, $package, $page, $title) {
        $this->setBundle("Core");
        $this->setCategory($category);
        $this->setPackage($package);
        $this->setPage($page);
        $this->setTitle($title);
    }

    /**
     * Find.
     *
     * @param WikiView[] $wikiViews The wiki views.
     * @param string $category The category.
     * @param string $package The package.
     * @param string $page The page.
     * @return WikiView Returns the wiki view in case of success, null otherwise.
     */
    public static function find(array $wikiViews, $category, $package, $page) {
        $wikiView = null;
        foreach ($wikiViews as $current) {
            if ($category !== $current->getCategory() || $package !== $current->getPackage() || $page !== $current->getPage()) {
                continue;
            }
            $wikiView = $current;
            break;
        }
        return $wikiView;
    }

    /**
     * Get the bundle.
     *
     * @return string Returns the bundle.
     */
    public function getBundle() {
        return $this->bundle;
    }

    /**
     * Get the category.
     *
     * @return string Returns the category.
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Get the package.
     *
     * @return string Returns the package.
     */
    public function getPackage() {
        return $this->package;
    }

    /**
     * Get the page.
     *
     * @return string Returns the page.
     */
    public function getPage() {
        return $this->page;
    }

    /**
     * Get the title.
     *
     * @return string Returns the title.
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Get a view.
     *
     * @return string Returns the view.
     */
    public function getView() {
        $paths = [
            "@" . $this->getBundle(),
            "Wiki",
            strtolower($this->getCategory()),
            strtolower($this->getPackage()),
            strtolower($this->getPage()) . ".html.twig",
        ];
        return implode("/", $paths);
    }

    /**
     * Set the bundle.
     *
     * @param string $bundle The bundle.
     * @return WikiView Returns this wiki view.
     */
    public function setBundle($bundle) {
        $this->bundle = $bundle;
        return $this;
    }

    /**
     * Set the category.
     *
     * @param string $category The category.
     * @return WikiView Returns this wiki view.
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * Set the package.
     *
     * @param string $package The package.
     * @return WikiView Returns this wiki view.
     */
    public function setPackage($package) {
        $this->package = $package;
        return $this;
    }

    /**
     * Set the page.
     *
     * @param string $page The page.
     * @return WikiView Returns this wiki view.
     */
    public function setPage($page) {
        $this->page = $page;
        return $this;
    }

    /**
     * Set the title.
     *
     * @param string $title The title.
     * @return WikiView Returns this wiki view.
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

}
