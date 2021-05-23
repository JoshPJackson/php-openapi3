<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\OAuthFlows;

use JoshPJackson\OpenApi\Traits\HasRequiredFields;

/**
 * Class AuthorizationCodeFlow
 * @package JoshPJackson\OpenApi\Paths\PathItem\Operation\SecurityScheme\OAuthFlows
 */
class AuthorizationCodeFlow extends OAuthFlow
{
    use HasRequiredFields;

    /**
     * @var array|string[]
     */
    protected array $requiredFields = [
        'authorizationUrl',
        'tokenUrl'
    ];

    /**
     * @var string
     */
    private string $authorizationUrl;

    /**
     * @var string
     */
    private string $tokenUrl;

    /**
     * @return string
     */
    public function getAuthorizationUrl(): string
    {
        return $this->authorizationUrl;
    }

    /**
     * @param string $authorizationUrl
     * @return AuthorizationCodeFlow
     */
    public function setAuthorizationUrl(string $authorizationUrl): AuthorizationCodeFlow
    {
        $this->authorizationUrl = $authorizationUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTokenUrl(): string
    {
        return $this->tokenUrl;
    }

    /**
     * @param string $tokenUrl
     * @return AuthorizationCodeFlow
     */
    public function setTokenUrl(string $tokenUrl): AuthorizationCodeFlow
    {
        $this->tokenUrl = $tokenUrl;
        return $this;
    }
}