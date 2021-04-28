<?php

namespace JoshPJackson\OpenApi;

use JoshPJackson\OpenApi\Traits\CanJsonSerialise;
use JoshPJackson\OpenApi\Info\Contact;
use JoshPJackson\OpenApi\Info\License;
use JoshPJackson\OpenApi\Traits\HasRequiredFields;

/**
 * Class Info
 * @package JoshPJackson\OpenApi
 */
class Info implements \JsonSerializable
{
    use CanJsonSerialise;
    use HasRequiredFields;

    protected array $requiredFields = [
        'title',
        'version'
    ];

    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string
     */
    private string $termsOfService;

    /**
     * @var Contact
     */
    private Contact $contact;

    /**
     * @var License
     */
    private License $license;

    /**
     * @var string
     */
    private string $version;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Info
     */
    public function setTitle(string $title): Info
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Info
     */
    public function setDescription(string $description): Info
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfService(): string
    {
        return $this->termsOfService;
    }

    /**
     * @param string $termsOfService
     * @return Info
     */
    public function setTermsOfService(string $termsOfService): Info
    {
        $this->termsOfService = $termsOfService;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact(): Contact
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     * @return Info
     */
    public function setContact(Contact $contact): Info
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return License
     */
    public function getLicense(): License
    {
        return $this->license;
    }

    /**
     * @param License $license
     * @return Info
     */
    public function setLicense(License $license): Info
    {
        $this->license = $license;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return Info
     */
    public function setVersion(string $version): Info
    {
        $this->version = $version;
        return $this;
    }
}