<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider\Theme;

/**
 * TasksDropDown theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Theme
 */
trait TasksDropDownThemeProviderTrait {

    /**
     * Tasks drop down theme provider.
     *
     * @var TasksDropDownThemeProviderInterface
     */
    private $tasksDropDownThemeProvider;

    /**
     * Get the tasks drop down theme provider.
     *
     * @return TasksDropDownThemeProviderInterface Returns the tasks drop down theme provider.
     */
    public function getTasksDropDownThemeProvider() {
        return $this->tasksDropDownThemeProvider;
    }

    /**
     * Set the tasks drop down theme provider.
     *
     * @param TasksDropDownThemeProviderInterface $tasksDropDownThemeProvider The tasks drop down theme provider.
     */
    protected function setTasksDropDownThemeProvider(TasksDropDownThemeProviderInterface $tasksDropDownThemeProvider = null) {
        $this->tasksDropDownThemeProvider = $tasksDropDownThemeProvider;
        return $this;
    }
}
