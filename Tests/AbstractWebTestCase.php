<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\SchemaTool;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\User\UserInterface;
use TestKernel;
use Throwable;
use WBW\Bundle\CoreBundle\Tests\Fixtures\TestFixtures;

/**
 * Abstract web test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests
 * @abstract
 */
abstract class AbstractWebTestCase extends WebTestCase {

    /**
     * Client.
     *
     * @var KernelBrowser
     */
    protected $client;

    /**
     * {@inheritDoc}
     */
    protected static function getKernelClass(): string {
        require_once realpath(getcwd() . "/Tests/Fixtures/app/TestKernel.php");
        return TestKernel::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        static::ensureKernelShutdown();

        // Set a Client mock.
        $this->client = static::createClient();
    }

    /**
     * {@inheritDoc}
     */
    public static function setUpBeforeClass(): void {
        parent::setUpBeforeClass();

        static::$kernel = static::createKernel();

        // Clean the cache to avoid issues due to cache files.
        $filesystem = new Filesystem();
        $filesystem->remove(static::$kernel->getCacheDir());

        static::$kernel->boot();
    }

    /**
     * Set up a cookie.
     *
     * @param UserInterface|string $user The user.
     * @param array $roles The user roles.
     * @param string $firewallName The firewall name.
     * @param string $firewallContext The firewall context.
     * @return Cookie Returns the cookie.
     */
    protected function setUpCookie($user = "webeweb", array $roles = ["ROLE_SUPER_ADMIN"], string $firewallName = "main", string $firewallContext = "main"): Cookie {

        $token = new UsernamePasswordToken($user, null, $firewallName, $roles);

        /** @var SessionInterface $session */
        $session = static::$kernel->getContainer()->get("session");
        $session->set("_security_" . $firewallContext, serialize($token));
        $session->save();

        return new Cookie($session->getName(), $session->getId());
    }

    /**
     * Set up the schema tool.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected static function setUpSchemaTool(): void {

        /** @var EntityManagerInterface $em */
        $em = static::$kernel->getContainer()->get("doctrine.orm.entity_manager");

        $entities = $em->getMetadataFactory()->getAllMetadata();

        $schemaTool = new SchemaTool($em);
        $schemaTool->dropDatabase();
        $schemaTool->createSchema($entities);
    }

    /**
     * Set up the user fixtures.
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    protected static function setUpUserFixtures(): void {

        /** @var EntityManagerInterface $em */
        $em = static::$kernel->getContainer()->get("doctrine.orm.entity_manager");

        foreach (TestFixtures::getUsers() as $current) {
            $em->persist($current);
        }

        $em->flush();
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown(): void {
        static::$kernel->shutdown();
    }
}
