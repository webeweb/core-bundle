<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Tests\Model;

use WBW\Bundle\CoreBundle\Model\EmailLayout;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Email layout test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\CoreBundle\Tests\Model
 */
class EmailLayoutTest extends AbstractTestCase {

    /**
     * Tests setAccountSettingsURL()
     *
     * @return void
     */
    public function testSetAccountSeetings(): void {

        $obj = new EmailLayout();

        $obj->setAccountSettingsURL("accountSettingsURL");
        $this->assertEquals("accountSettingsURL", $obj->getAccountSettingsURL());
    }

    /**
     * Tests setBestRegards()
     *
     * @return void
     */
    public function testSetBestRegards(): void {

        $obj = new EmailLayout();

        $obj->setBestRegards("bestRegards");
        $this->assertEquals("bestRegards", $obj->getBestRegards());
    }

    /**
     * Tests setCompanyLogo()
     *
     * @return void
     */
    public function testSetCompanyLogo(): void {

        $obj = new EmailLayout();

        $obj->setCompanyLogo("companyLogo");
        $this->assertEquals("companyLogo", $obj->getCompanyLogo());
    }

    /**
     * Tests setCompanyName()
     *
     * @return void
     */
    public function testSetCompanyName(): void {

        $obj = new EmailLayout();

        $obj->setCompanyName("companyName");
        $this->assertEquals("companyName", $obj->getCompanyName());
    }

    /**
     * Tests setCompanyURL()
     *
     * @return void
     */
    public function testSetCompanyURL(): void {

        $obj = new EmailLayout();

        $obj->setCompanyURL("companyURL");
        $this->assertEquals("companyURL", $obj->getCompanyURL());
    }

    /**
     * Tests setSupportEmail()
     *
     * @return void
     */
    public function testSetSupportEmail(): void {

        $obj = new EmailLayout();

        $obj->setSupportEmail("supportEmail");
        $this->assertEquals("supportEmail", $obj->getSupportEmail());
    }

    /**
     * Tests setSupportName()
     *
     * @return void
     */
    public function testSetSupportName(): void {

        $obj = new EmailLayout();

        $obj->setSupportName("supportName");
        $this->assertEquals("supportName", $obj->getSupportName());
    }

    /**
     * Tests setSupportPhone()
     *
     * @return void
     */
    public function testSetSupportPhone(): void {

        $obj = new EmailLayout();

        $obj->setSupportPhone("supportPhone");
        $this->assertEquals("supportPhone", $obj->getSupportPhone());
    }

    /**
     * Tests setUnsubscribeURL()
     *
     * @return void
     */
    public function testSetUnsubscribeURL(): void {

        $obj = new EmailLayout();

        $obj->setUnsubscribeURL("unsubscribeURL");
        $this->assertEquals("unsubscribeURL", $obj->getUnsubscribeURL());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmailLayout();

        $this->assertNull($obj->getAccountSettingsURL());
        $this->assertNull($obj->getBestRegards());
        $this->assertNull($obj->getCompanyLogo());
        $this->assertNull($obj->getCompanyName());
        $this->assertNull($obj->getCompanyURL());
        $this->assertNull($obj->getSupportEmail());
        $this->assertNull($obj->getSupportName());
        $this->assertNull($obj->getSupportPhone());
        $this->assertNull($obj->getUnsubscribeURL());
    }
}
