<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model\Layout;

use WBW\Bundle\CoreBundle\Model\Layout\EmailLayout;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Email layout test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Tests\Model\Layout
 */
class EmailLayoutTest extends AbstractTestCase {

    /**
     * Test setAccountSettingsUrl()
     *
     * @return void
     */
    public function testSetAccountSettingsUrl(): void {

        $obj = new EmailLayout();

        $obj->setAccountSettingsUrl("accountSettingsUrl");
        $this->assertEquals("accountSettingsUrl", $obj->getAccountSettingsUrl());
    }

    /**
     * Test setBestRegards()
     *
     * @return void
     */
    public function testSetBestRegards(): void {

        $obj = new EmailLayout();

        $obj->setBestRegards("bestRegards");
        $this->assertEquals("bestRegards", $obj->getBestRegards());
    }

    /**
     * Test setCompanyLogo()
     *
     * @return void
     */
    public function testSetCompanyLogo(): void {

        $obj = new EmailLayout();

        $obj->setCompanyLogo("companyLogo");
        $this->assertEquals("companyLogo", $obj->getCompanyLogo());
    }

    /**
     * Test setCompanyName()
     *
     * @return void
     */
    public function testSetCompanyName(): void {

        $obj = new EmailLayout();

        $obj->setCompanyName("companyName");
        $this->assertEquals("companyName", $obj->getCompanyName());
    }

    /**
     * Test setCompanyUrl()
     *
     * @return void
     */
    public function testSetCompanyUrl(): void {

        $obj = new EmailLayout();

        $obj->setCompanyUrl("companyUrl");
        $this->assertEquals("companyUrl", $obj->getCompanyUrl());
    }

    /**
     * Test setSupportEmail()
     *
     * @return void
     */
    public function testSetSupportEmail(): void {

        $obj = new EmailLayout();

        $obj->setSupportEmail("supportEmail");
        $this->assertEquals("supportEmail", $obj->getSupportEmail());
    }

    /**
     * Test setSupportName()
     *
     * @return void
     */
    public function testSetSupportName(): void {

        $obj = new EmailLayout();

        $obj->setSupportName("supportName");
        $this->assertEquals("supportName", $obj->getSupportName());
    }

    /**
     * Test setSupportPhone()
     *
     * @return void
     */
    public function testSetSupportPhone(): void {

        $obj = new EmailLayout();

        $obj->setSupportPhone("supportPhone");
        $this->assertEquals("supportPhone", $obj->getSupportPhone());
    }

    /**
     * Test setUnsubscribeUrl()
     *
     * @return void
     */
    public function testSetUnsubscribeUrl(): void {

        $obj = new EmailLayout();

        $obj->setUnsubscribeUrl("unsubscribeUrl");
        $this->assertEquals("unsubscribeUrl", $obj->getUnsubscribeUrl());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmailLayout();

        $this->assertNull($obj->getAccountSettingsUrl());
        $this->assertNull($obj->getBestRegards());
        $this->assertNull($obj->getCompanyLogo());
        $this->assertNull($obj->getCompanyName());
        $this->assertNull($obj->getCompanyUrl());
        $this->assertNull($obj->getSupportEmail());
        $this->assertNull($obj->getSupportName());
        $this->assertNull($obj->getSupportPhone());
        $this->assertNull($obj->getUnsubscribeUrl());
    }
}
