<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Model\Layout;

/**
 * Email layout model.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Model\Layout
 */
class EmailLayout {

    /**
     * Account settings URL.
     *
     * @var string|null
     */
    private $accountSettingsUrl;

    /**
     * Best regards.
     *
     * @var string|null
     */
    private $bestRegards;

    /**
     * Company logo.
     *
     * @var string|null
     */
    private $companyLogo;

    /**
     * Company name.
     *
     * @var string|null
     */
    private $companyName;

    /**
     * Company URL.
     *
     * @var string|null
     */
    private $companyUrl;

    /**
     * Support email.
     *
     * @var string|null
     */
    private $supportEmail;

    /**
     * Support name.
     *
     * @var string|null
     */
    private $supportName;

    /**
     * Support phone.
     *
     * @var string|null
     */
    private $supportPhone;

    /**
     * Unsubscribe URL.
     *
     * @var string|null
     */
    private $unsubscribeUrl;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the account settings URL.
     *
     * @return string|null Returns the account settings URL.
     */
    public function getAccountSettingsUrl(): ?string {
        return $this->accountSettingsUrl;
    }

    /**
     * Get the best regards.
     *
     * @return string|null Returns the best regards.
     */
    public function getBestRegards(): ?string {
        return $this->bestRegards;
    }

    /**
     * Get the company logo.
     *
     * @return string|null Returns the company logo.
     */
    public function getCompanyLogo(): ?string {
        return $this->companyLogo;
    }

    /**
     * Get the company name.
     *
     * @return string|null Returns the company name.
     */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Get the company URL.
     *
     * @return string|null Returns the company URL.
     */
    public function getCompanyUrl(): ?string {
        return $this->companyUrl;
    }

    /**
     * Get the support email.
     *
     * @return string|null Returns the support email.
     */
    public function getSupportEmail(): ?string {
        return $this->supportEmail;
    }

    /**
     * Get the support name.
     *
     * @return string|null Returns the support name.
     */
    public function getSupportName(): ?string {
        return $this->supportName;
    }

    /**
     * Get the support phone.
     *
     * @return string|null Returns the support phone.
     */
    public function getSupportPhone(): ?string {
        return $this->supportPhone;
    }

    /**
     * Get the unsubscribe URL.
     *
     * @return string|null Returns the unsubscribe URL.
     */
    public function getUnsubscribeUrl(): ?string {
        return $this->unsubscribeUrl;
    }

    /**
     * Set the account settings URL.
     *
     * @param string|null $accountSettingsUrl The account settings URL.
     * @return EmailLayout Returns this email layout.
     */
    public function setAccountSettingsUrl(?string $accountSettingsUrl): EmailLayout {
        $this->accountSettingsUrl = $accountSettingsUrl;
        return $this;
    }

    /**
     * Set the best regards.
     *
     * @param string|null $bestRegards The best regards.
     * @return EmailLayout Returns this email layout.
     */
    public function setBestRegards(?string $bestRegards): EmailLayout {
        $this->bestRegards = $bestRegards;
        return $this;
    }

    /**
     * Set the company logo.
     *
     * @param string|null $companyLogo The company logo.
     * @return EmailLayout Returns this email layout.
     */
    public function setCompanyLogo(?string $companyLogo): EmailLayout {
        $this->companyLogo = $companyLogo;
        return $this;
    }

    /**
     * Set the company name.
     *
     * @param string|null $companyName The company name.
     * @return EmailLayout Returns this email layout.
     */
    public function setCompanyName(?string $companyName): EmailLayout {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Set the company URL.
     *
     * @param string|null $companyUrl The company URL.
     * @return EmailLayout Returns this email layout.
     */
    public function setCompanyUrl(?string $companyUrl): EmailLayout {
        $this->companyUrl = $companyUrl;
        return $this;
    }

    /**
     * Set the support email.
     *
     * @param string|null $supportEmail The support email.
     * @return EmailLayout Returns this email layout.
     */
    public function setSupportEmail(?string $supportEmail): EmailLayout {
        $this->supportEmail = $supportEmail;
        return $this;
    }

    /**
     * Set the support name.
     *
     * @param string|null $supportName The support name.
     * @return EmailLayout Returns this email layout.
     */
    public function setSupportName(?string $supportName): EmailLayout {
        $this->supportName = $supportName;
        return $this;
    }

    /**
     * Set the support phone.
     *
     * @param string|null $supportPhone The support phone.
     * @return EmailLayout Returns this email layout.
     */
    public function setSupportPhone(?string $supportPhone): EmailLayout {
        $this->supportPhone = $supportPhone;
        return $this;
    }

    /**
     * Set the unsubscribe URL.
     *
     * @param string|null $unsubscribeUrl The unsubscribe URL.
     * @return EmailLayout Returns this email layout.
     */
    public function setUnsubscribeUrl(?string $unsubscribeUrl): EmailLayout {
        $this->unsubscribeUrl = $unsubscribeUrl;
        return $this;
    }
}
