<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Twig\Extension;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Twig\Extension\TestTwigExtension;

/**
 * Abstract Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Twig\Extension
 */
class AbstractTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestTwigExtension($this->twigEnvironment);

        $this->assertEquals("&nbsp;", TestTwigExtension::DEFAULT_CONTENT);
        $this->assertEquals("javascript:void(0);", TestTwigExtension::DEFAULT_HREF);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the coreHTMLElement() method.
     *
     * @return void
     */
    public function testCoreHTMLElement() {

        $res = <<< EOT
<script type="text/javascript">
    $(document).ready(function() {});
</script>
EOT;
        $this->assertEquals($res, TestTwigExtension::coreHTMLElement("script", "\n    $(document).ready(function() {});\n", ["type" => "text/javascript"]));
    }

}
