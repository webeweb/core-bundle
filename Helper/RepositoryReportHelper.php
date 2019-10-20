<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Helper;

use WBW\Bundle\CoreBundle\Repository\RepositoryHelper;

/**
 * Repository report helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Helper
 * @deprecated since 2.15.0, use {@see WBW\Bundle\CoreBundle\Repository\RepositoryHelper} instead.
 */
class RepositoryReportHelper extends RepositoryHelper {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.helper.repository_report";
}
