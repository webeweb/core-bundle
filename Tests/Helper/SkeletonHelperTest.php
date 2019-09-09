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
 * @author webeweb <https://github.com/webeweb/>
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
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set the directories.
        $this->directoryIllegal   = getcwd() . "/composer.json";
        $this->directoryResources = getcwd() . "/Tests/Fixtures/app/Resources";
        $this->directorySkeleton  = getcwd() . "/Resources/views";

        (new Filesystem())->remove($this->directoryResources);
    }

    /**
     * Tests the copySkeleton() method.
     *
     * @return void
     */
    public function testCopySkeleton() {

        $res = SkeletonHelper::copySkeleton($this->directorySkeleton, $this->directoryResources);
        $this->assertCount(26, $res);

        foreach ($res as $current) {
            $this->assertTrue($current);
        }
    }

    /**
     * Tests the listSkeleton() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testListSkeleton() {

        $res = SkeletonHelper::listSkeleton($this->directorySkeleton);
        $this->assertCount(26, $res);

        $this->assertEquals($this->directorySkeleton . "/email/content.html.twig", $res[0]);
        $this->assertEquals($this->directorySkeleton . "/email/footer.html.twig", $res[1]);
        $this->assertEquals($this->directorySkeleton . "/email/header.html.twig", $res[2]);
        $this->assertEquals($this->directorySkeleton . "/email/layout.html.twig", $res[3]);
        $this->assertEquals($this->directorySkeleton . "/email/stylesheet.html.twig", $res[4]);
    }

    /**
     * Tests the listSkeleton() method.
     *
     * @return void
     */
    public function testListSkeletonWithDirectoryNotFoundException() {

        try {

            SkeletonHelper::listSkeleton($this->directoryIllegal);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
        }
    }
}
