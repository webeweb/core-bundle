<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Provider\Asset\Theme;

/**
 * TasksDropDown theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Provider\Asset\Theme
 */
trait TasksDropDownThemeProviderTrait {

    /**
     * Tasks drop down theme provider.
     *
     * @var TasksDropDownThemeProviderInterface|null
     */
    private $tasksDropDownThemeProvider;

    /**
     * Get the tasks drop down theme provider.
     *
     * @return TasksDropDownThemeProviderInterface|null Returns the tasks drop down theme provider.
     */
    public function getTasksDropDownThemeProvider(): ?TasksDropDownThemeProviderInterface {
        return $this->tasksDropDownThemeProvider;
    }

    /**
     * Set the tasks drop down theme provider.
     *
     * @param TasksDropDownThemeProviderInterface|null $tasksDropDownThemeProvider The tasks drop down theme provider.
     * @return self Returns this instance.
     */
    protected function setTasksDropDownThemeProvider(?TasksDropDownThemeProviderInterface $tasksDropDownThemeProvider): self {
        $this->tasksDropDownThemeProvider = $tasksDropDownThemeProvider;
        return $this;
    }
}
