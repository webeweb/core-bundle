<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Helper;

use Exception;
use InvalidArgumentException;
use Symfony\Component\Filesystem\Filesystem;
use WBW\Bundle\CoreBundle\Helper\SkeletonHelper;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Skeleton helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Helper
 */
class SkeletonHelperTest extends AbstractTestCase {

    /**
     * Directory "illegal".
     *
     * @var string
     */
    private $directoryIllegal;

    /**
     * Directory "resources".
     *
     * @var string
     */
    private $directoryResources;

    /**
     * Directory "skeleton".
     *
     * @var string
     */
    private $directorySkeleton;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the directories.
        $this->directoryIllegal   = realpath(__DIR__ . "/../../composer.json");
        $this->directoryResources = __DIR__ . "/../Fixtures/app/Resources";
        $this->directorySkeleton  = realpath(__DIR__ . "/../../Resources/views");

        (new Filesystem())->remove($this->directoryResources);
    }

    /**
     * Tests copySkeleton()
     *
     * @return void
     */
    public function testCopySkeleton(): void {

        $res = SkeletonHelper::copySkeleton($this->directorySkeleton, $this->directoryResources);
        $this->assertCount(16, $res);

        foreach ($res as $current) {
            $this->assertTrue($current);
        }
    }

    /**
     * Tests listSkeleton()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testListSkeleton(): void {

        $res = SkeletonHelper::listSkeleton($this->directorySkeleton);
        $this->assertCount(16, $res);

        $i = -1;

        $this->assertEquals($this->directorySkeleton . "/assets/_helper_css.html.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/assets/_javascripts.html.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/assets/_stylesheets.html.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/assets/wbwCoreFontAwesome.js.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/assets/wbwCoreJQueryInputMask.js.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/assets/wbwCoreLeaflet.js.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/assets/wbwCoreMaterialDesignColorPalette.js.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/assets/wbwCoreSweetAlert.js.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/assets/wbwCoreWaitMe.js.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/email/_content.html.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/email/_footer.html.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/email/_header.html.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/email/_stylesheet.html.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/email/layout.html.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/layout/exception.html.twig", $res[++$i]);
        $this->assertEquals($this->directorySkeleton . "/macros.html.twig", $res[++$i]);
    }

    /**
     * Tests listSkeleton()
     *
     * @return void
     */
    public function testListSkeletonWithDirectoryNotFoundException(): void {

        try {

            SkeletonHelper::listSkeleton($this->directoryIllegal);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
        }
    }
}
