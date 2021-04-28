<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation;

use JoshPJackson\OpenApi\Paths\PathItem\Openation\SecurityScheme\OAuthFlows;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\Type;
use JoshPJackson\OpenApi\Traits\CanJsonSerialise;
use JoshPJackson\OpenApi\Traits\HasRequiredFields;

/**
 * Class SecurityScheme
 * @package JoshPJackson\OpenApi\Paths\PathItem\Openation
 */
class SecurityScheme implements \JsonSerializable
{
    use CanJsonSerialise;
    use HasRequiredFields {
        HasRequiredFields::validate as traitValidate;
    }

    protected array $requiredFields = [
        'type',
    ];

    /**
     * @var string
     */
    private string $type;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $in;

    /**
     * @var string
     */
    private string $scheme;

    /**
     * @var string
     */
    private string $bearerFormat;

    /**
     * @var OAuthFlows
     */
    private OAuthFlows $flows;

    /**
     * @var string
     */
    private string $openIdConnectUrl;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return SecurityScheme
     */
    public function setType(string $type): SecurityScheme
    {
        $this->type = $type;
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
     * @return SecurityScheme
     */
    public function setDescription(string $description): SecurityScheme
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return SecurityScheme
     */
    public function setName(string $name): SecurityScheme
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getIn(): string
    {
        return $this->in;
    }

    /**
     * @param string $in
     * @return SecurityScheme
     */
    public function setIn(string $in): SecurityScheme
    {
        $this->in = $in;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheme(): string
    {
        return $this->scheme;
    }

    /**
     * @param string $scheme
     * @return SecurityScheme
     */
    public function setScheme(string $scheme): SecurityScheme
    {
        $this->scheme = $scheme;
        return $this;
    }

    /**
     * @return string
     */
    public function getBearerFormat(): string
    {
        return $this->bearerFormat;
    }

    /**
     * @param string $bearerFormat
     * @return SecurityScheme
     */
    public function setBearerFormat(string $bearerFormat): SecurityScheme
    {
        $this->bearerFormat = $bearerFormat;
        return $this;
    }

    /**
     * @return OAuthFlows
     */
    public function getFlows(): OAuthFlows
    {
        return $this->flows;
    }

    /**
     * @param OAuthFlows $flows
     * @return SecurityScheme
     */
    public function setFlows(OAuthFlows $flows): SecurityScheme
    {
        $this->flows = $flows;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenIdConnectUrl(): string
    {
        return $this->openIdConnectUrl;
    }

    /**
     * @param string $openIdConnectUrl
     * @return SecurityScheme
     */
    public function setOpenIdConnectUrl(string $openIdConnectUrl): SecurityScheme
    {
        $this->openIdConnectUrl = $openIdConnectUrl;
        return $this;
    }

    /**
     * @return bool
     */
    protected function validate(): bool
    {
        switch ($this->type) {
            case Type::API_KEY:
                $this->required[] = 'name';
                $this->required[] = 'in';
                break;

            case Type::HTTP:
                $this->required[] = 'scheme';
                $this->required[] = 'bearerFormat';
                break;

            case Type::OAUTH2:
                $this->required[] = 'flows';
                break;

            case Type::OPENID_CONNECT:
                $this->required[] = 'openIdConnect';
        }

        return $this->traitValidate();
    }
}
