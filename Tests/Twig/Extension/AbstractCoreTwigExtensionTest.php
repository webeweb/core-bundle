<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension;

use WBW\Bundle\CoreBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\TestTwigExtension;

/**
 * Abstract Core Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 * @final
 */
final class AbstractCoreTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $this->assertEquals("&nbsp;", TestTwigExtension::DEFAULT_CONTENT);
        $this->assertEquals("javascript:void(0);", TestTwigExtension::DEFAULT_HREF);
    }

    /**
     * Tests the coreHTMLElement() method.
     *
     * @return void
     */
    public function testCoreHTMLElement() {

        $res = <<<'EOT'
<script type="text/javascript">
    $(document).ready(function() {});
</script>
EOT;

        $this->assertEquals($res, TestTwigExtension::coreHTMLElement("script", "\n    $(document).ready(function() {});\n", ["type" => "text/javascript"]));
    }

}
